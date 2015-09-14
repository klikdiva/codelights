jQuery(document).ready(function($){
	'use strict';

	/* Add Color Picker to all inputs that have 'color-field' class */
	$('.cl-color-picker').wpColorPicker();

	// $('.widget-title-action').click(function (e) {
	$('.widget-top').click(function(e){
		var $parent = $(this).closest('div[id]');
		var parent_id = $parent.attr('id').match(/_cl_/);
		if (parent_id !== null) {
			var widget_id = parent_id['input'];
			var widget_class = $('#' + widget_id).attr('class');
			var $parent_sidebar = $(this).closest('[class^=sidebars-column]');
			if (widget_class == 'widget') {
				$parent_sidebar.css('max-width', '650px');
			} else if (widget_class == 'widget open') {
				$parent_sidebar.css('max-width', '');
			}
		}
	});

	$('.widget-control-close').click(function(e){
		var $parent = $(this).closest('div[id]');
		var parent_id = $parent.attr('id').match(/_cl_/);
		if (parent_id !== null) {
			var widget_id = parent_id['input'];
			var widget_class = $('#' + widget_id).attr('class');
			var $parent_sidebar = $(this).closest('[class^=sidebars-column]');
			$parent_sidebar.css('max-width', '');
		}
	});

	$('.sidebar-name').click(function(e){
		var $parent_sidebar = $(this).closest('[class^=sidebars-column]');
		$parent_sidebar.css('max-width', '');
	});

	// Event handler for widget Save button click
	$('input[name=savewidget]', 'div[id*=_cl_]').on('click', function(){
		var element_id = $(this).attr('id');
		var $parent = $(this).closest('div[id]');
		var parent_id = $parent.attr('id').match(/_cl_/);
		if (parent_id !== null) {
			var widget_id = parent_id['input'];
			var $textarea_wrapper = $('#' + widget_id).find('.cl-widget-textarea-html-wrapper');
			var $textarea = $textarea_wrapper.find('textarea');
			var textarea_id = $textarea.attr('id');

			var $iframe = $('#' + textarea_id + '_ifr');
			var iframe_content = $iframe.contents().find("body").html();
			$textarea.val(iframe_content);
		}

	});

	// Event handler for widget updated
	$(document).on('widget-updated', function(event, $widget){
		if ($widget.is('[id*=_cl_]')) {
			event.preventDefault();
			var widget_id = $widget.attr('id');

			// tinymce editor handler
			var $textarea_wrapper = $widget.find('.cl-widget-textarea-html-wrapper');
			var $textarea = $textarea_wrapper.find('textarea');
			var textarea_id = $textarea.attr('id');

			var configured = is_tinymce_configured(textarea_id);

			var tmce_active = is_tinymce_active(textarea_id);

			var tmce_hidden = $textarea.is(":visible");

			window.setTimeout(function(){
				// TinyMCE instance deactivation
				if (tmce_active === true) {
					if (tmce_hidden === true) {
						try {
							tinymce.remove();
						} catch (e) {
						}

					} else {
						tinymce.get(textarea_id).remove();
					}
				}

				// check is buttons is configured
				var quicktags_active = is_quicktags_active(textarea_id);

				if (quicktags_active === true) {
					// TinyMCE instance activation
					// buttons for non-visual mode
					var prevInstances, newInstance;
					prevInstances = QTags.instances;
					QTags.instances = [];
					quicktags(tinyMCEPreInit.qtInit[textarea_id]);
					QTags._buttonsInit();
					newInstance = QTags.instances[textarea_id];
					QTags.instances = prevInstances;
					QTags.instances[textarea_id] = newInstance;
				}

				//textarea init		
				tinyMCEPreInit.mceInit[textarea_id].selector = '#' + textarea_id;
				tinyMCEPreInit.mceInit[textarea_id].height = '100%';
				tinymce.init(tinyMCEPreInit.mceInit[textarea_id]);
			}, 500);

			var $attached_images = $widget.find('.cl-attached-images');

			// add image button hide if no multiple images and one image chosen
			var gallery_images_array = new Array();
			var $multiple = $widget.find('.multiple-attachments');
			var multiple_attachments = $multiple.val();
			var $add_button = $widget.find('.cl_widget_add_images_button');
			var $findres = $widget.find('.attachments-thumbnail');
			var $attached_images = $widget.find('.cl-attached-images');
			if (multiple_attachments == 'false' && $findres.lenght > 0) {
				$add_button.css('display', 'none');
			}
			var attachments_list_id = $widget.find('.cl-images-container').attr('id');

			if (typeof gallery_images_array !== 'undefined' && gallery_images_array.length > 0) {
				var gallery_images_val = gallery_images_array.toString();
				$attached_images.val(gallery_images_val);
			} else {
				$attached_images.removeAttr('value');
			}

			// color picker reinit
			$('.cl-color-picker').wpColorPicker();

			// sortable reinit
			$('.sortable-attachment-list').sortable({
				stop: function(event, ui){
					var container_id = $(this).attr('id');
					var gallery_images_array = get_attachments_list(attachments_list_id);
					var gallery_images_res = gallery_images_array.toString();
					$attached_images.val(gallery_images_res);
				}
			});

		}

	});

	// Check if the tinymce quicktags buttons is created
	function is_quicktags_active(textarea_id){
		return 'object' === typeof QTags.instances[textarea_id];
	}

	// Check if the tinymce instance is configured
	function is_tinymce_configured(textarea_id){
		return 'undefined' !== typeof tinyMCEPreInit.mceInit[textarea_id];
	}

	// Check if the tinymce instance is active
	function is_tinymce_active(textarea_id){
		return 'object' === typeof tinymce && 'object' === typeof tinymce.get(textarea_id) && null !== tinymce.get(textarea_id);
	}

	// images attachment

	// rebuild array with images from list
	function get_attachments_list(attachments_list_id){
		var gallery_images_array = new Array();
		$('#' + attachments_list_id + ' > li.attachments-thumbnail').each(function(index){
			var image_id = $(this).attr('id');
			gallery_images_array.push(image_id);
		});
		return gallery_images_array;
	}

	// remove element from array by value
	function removeA(arr){
		var what, a = arguments,
			L = a.length,
			ax;
		while (L > 1 && arr.length) {
			what = a[--L];
			while ((ax = arr.indexOf(what)) !== -1) {
				arr.splice(ax, 1);
			}
		}
		return arr;
	}


	// init sortable images
	$('.sortable-attachment-list').sortable();

	// handler of event after sorting
	$(".sortable-attachment-list").on('sortstop', function(event, ui){
		var $parent = $('.widget.open').find('.cl-attach-images-group');
		var $attached_images = $parent.find('.cl-attached-images');
		var attachments_list_id = $(this).attr('id');
		var gallery_images_array = get_attachments_list(attachments_list_id);
		var gallery_images_res = gallery_images_array.toString();
		$attached_images.val(gallery_images_res);
	});

	$('body').on('mouseenter', '.attachments-thumbnail', function(e){
		e.preventDefault();
		$(this).children('.attachment-delete-wrapper').css('background-color', 'rgba(0,0,0,0.5)');
		$(this).children('.attachment-delete').css('display', 'block');
	}).on('mouseleave', '.attachments-thumbnail', function(e){
		e.preventDefault();
		$(this).children('.attachment-delete-wrapper').css('background-color', 'rgba(0,0,0,0)');
		$(this).children('.attachment-delete').css('display', 'none');
	});

	$("body").on('click', '.attachment-delete-link', function(e){
		e.preventDefault();
		var $parent_del = $(this).closest('.cl-attach-images-group');
		var $attached_images_del = $parent_del.find('.cl-attached-images');
		var attachments_list_id = $parent_del.find('.cl-images-container').attr('id');
		var $multiple_del = $parent_del.find('.multiple-attachments');
		var multiple_attachments_del = $multiple_del.val();
		var $add_button_del = $parent_del.find('.cl_widget_add_images_button');

		$(this).closest('li').remove();
		if (multiple_attachments_del == 'false') {
			$add_button_del.css('display', 'block');
			$attached_images_del.removeAttr('value');
		} else {
			var gallery_images_array = get_attachments_list(attachments_list_id);
			if (typeof gallery_images_array !== 'undefined' && gallery_images_array.length > 0) {
				var gallery_images_val = gallery_images_array.toString();
				$attached_images_del.val(gallery_images_val);
			} else {
				$attached_images_del.removeAttr('value');
			}
		}

	});

	// open WP media uploader
	$(document).on('click', '.cl_widget_add_images_button', function(event){

		var file_frame;

		event.preventDefault();

		var $parent = $('.widget.open').find('.cl-attach-images-group');
		console.log('parent id:' + $parent.attr('id'));
		var $attachments = $parent.find('.cl-images-container');
		var gallery_images;

		// If the media frame already exists, reopen it.
		if (file_frame) {
			file_frame.open();
			return;
		}

		// Create the media frame.
		file_frame = wp.media.frames.file_frame = wp.media({
			title: $(this).data('uploader_title'),
			button: {
				text: $(this).data('uploader_button_text'),
			},
			multiple: true // Set to true to allow multiple files to be selected
		});

		// When an image is selected, run a callback.
		file_frame.on('select', function(){

			var $attachments_storage = $parent.find('.cl-attached-images'); // input with list of attached images
			var $attachments_list = $parent.find('.cl-images-container'); // ul with attached images
			var attachments_list_id = $attachments_list.attr('id');
			var $multiple = $parent.children('.multiple-attachments'); // input with multiple trigger
			var multiple_attachments = $multiple.val();
			var $add_button = $parent.children('.cl_widget_add_images_button'); // button

			var selection = file_frame.state().get('selection');

			selection.map(function(attachment){

				attachment = attachment.toJSON();
				if (typeof attachment.sizes.thumbnail != 'undefined') {
					var attachment_size = attachment.sizes.thumbnail;
				} else {
					var attachment_size = attachment.sizes.full;
				}

				var gallery_images_array = get_attachments_list(attachments_list_id); // array
				if (multiple_attachments != 'false') {

					if (gallery_images_array != '' || gallery_images_array !== 'undefined') {
						var is_image_exsist = false;
						for (var i = 0; i < gallery_images_array.length; i++) {
							if (gallery_images_array[i] == attachment.id) {
								is_image_exsist = true;
							}
						}

						if (is_image_exsist === false) {
							$attachments.append('<li class="attachments-thumbnail ui-sortable-handle" id="' + attachment.id + '"><span class="attachment-delete-wrapper"></span><span class="attachment-delete"><a href="#" class="attachment-delete-link" id="' + attachment.id + '">&times;</a></span><div class="centered"><img src="' + attachment_size.url + '" height="' + attachment_size.height + '" width="' + attachment_size.width + '"></div></li>');
							gallery_images_array.push(attachment.id); // array
							var gallery_images_res = gallery_images_array.toString(); // string
							$attachments_storage.val(gallery_images_res);
						} else {
							$attachments.append('<li class="attachments-thumbnail-error">This image is already in the Gallery</li>');
							$('.attachments-thumbnail-error').fadeOut(3000);
						}
					}

				} else {
					$attachments.append('<li class="attachments-thumbnail ui-sortable-handle" id="' + attachment.id + '"><span class="attachment-delete-wrapper"></span><span class="attachment-delete"><a href="#" class="attachment-delete-link" id="' + attachment.id + '">&times;</a></span><div class="centered"><img src="' + attachment_size.url + '" height="' + attachment_size.height + '" width="' + attachment_size.width + '"></div></li>');
					$attachments_storage.val(attachment.id);
					$add_button.css('display', 'none');
				}


			});
		});
		// Finally, open the modal
		file_frame.open();
	});


	// handler for insert link button
	cl_link_btn.init();

});


var _cl_link_sideload = false; //used to track whether or not the link dialogue actually existed on this page, ie was wp_editor invoked.

var cl_link_btn = (function($){
	'use strict';
	var _cl_link_sideload = false; //used to track whether or not the link dialogue actually existed on this page, ie was wp_editor invoked.

	/* PRIVATE METHODS
	 -------------------------------------------------------------- */
//add event listeners

	function _init(){
		$('body').on('click', '.cl-insert-link-button', function(e){
			_addLinkListeners();
			_cl_link_sideload = false;

			var link_val_container = $('.cl-insert-link-container');

			if (typeof wpActiveEditor != 'undefined') {
				wpLink.open();
				var existing_link_title = $('.widget.open').find('.cl-linkdialog-title').text();
				if (existing_link_title !== 'undefined' || existing_link_title.lenght > 0) {
					$('#wp-link-text').val(existing_link_title);
				}
				var existing_link_url = $('.widget.open').find('.cl-linkdialog-url').text();
				if (existing_link_url !== 'undefined' || existing_link_url.lenght > 0) {
					$('#wp-link-url').val(existing_link_url);
				}
				var existing_link_target = $('.widget.open').find('.cl-linkdialog-target').text();
				if (existing_link_target == '_blank') {
					$('#wp-link-target').prop('checked', true);
				}
				wpLink.textarea = $(link_val_container);
			} else {
				window.wpActiveEditor = true;
				_cl_link_sideload = true;
				wpLink.open();
				wpLink.textarea = $(link_val_container);
			}
			return false;
		});

	}

	/* LINK EDITOR EVENT HACKS
	 -------------------------------------------------------------- */
	function _addLinkListeners(){
		$('body').on('click', '#wp-link-submit', function(e){
			e.preventDefault();
			var wp_link_text = $('#wp-link-text').val();
			var linkAtts = wpLink.getAttrs();
			var link_val_container = $('.cl-insert-link-container');
			var link_val_url = $('.cl-linkdialog-url');
			var link_val_title = $('.cl-linkdialog-title');
			var link_val_target = $('.cl-linkdialog-target');

			var encoded_url = encodeURIComponent (linkAtts.href);
			var encoded_title = encodeURIComponent (wp_link_text);
			var encoded_target = encodeURIComponent (linkAtts.target);
			var link_val_encoded = 'url:' + encoded_url + '|title:' + encoded_title + '|target:' + encoded_target;
			console.log(link_val_encoded);

			link_val_container.text(link_val_encoded);
			link_val_title.text(wp_link_text);
			link_val_url.text(linkAtts.href);
			link_val_target.text(linkAtts.target);
			_removeLinkListeners();
			return false;
		});

		$('body').on('click', '#wp-link-cancel', function(event){
			_removeLinkListeners();
			return false;
		});
	}

	function _removeLinkListeners(){
		if (_cl_link_sideload) {
			if (typeof wpActiveEditor != 'undefined') {
				wpActiveEditor = undefined;
			}
		}

		wpLink.close();
		wpLink.textarea = $('html');//focus on document

		$('body').off('click', '#wp-link-submit');
		$('body').off('click', '#wp-link-cancel');
	}

	/* PUBLIC ACCESSOR METHODS
	 -------------------------------------------------------------- */
	return {
		init: _init,
	};

})(jQuery);
