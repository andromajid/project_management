/**
 @preserve CLEditor Image Upload Plugin v1.0.0
 http://premiumsoftware.net/cleditor
 requires CLEditor v1.3.0 or later
 
 Copyright 2011, Dmitry Dedukhin
 Plugin let you either to upload image or to specify image url.
*/

(function($) {
	var hidden_frame_name = '__upload_iframe';
	// Define the image button by replacing the standard one
	$.cleditor.buttons.image = {
		name: 'image',
		title: 'Insert/Upload Image',
		command: 'insertimage',
		popupName: 'image',
		popupClass: 'cleditorPrompt',
		stripIndex: $.cleditor.buttons.image.stripIndex,
		popupContent:
			'<iframe style="width:0;height:0;border:0;" src="http://127.0.0.1/skripsi/database/protected/extensions/cleditor/assets/kcfinder-2.51/browse.php" name="' + hidden_frame_name + '"></iframe>',
		buttonClick: imageButtonClick,
		uploadUrl: '/uploadImage' // default url
	};

	function closePopup(editor) {
		editor.hidePopups();
		editor.focus();
	}

	function imageButtonClick(e, data) {
		var editor = data.editor,
			$text = $(data.popup).find(':text'),
			url = $.trim($text.val()),
			$iframe = $(data.popup).find('iframe'),
			$file = $(data.popup).find(':file');

		// clear previously selected file and url
		$file.val('');
		$text.val('').focus();
		$('#click')
			.unbind("click")
			.bind("click", function(e) {
				if($file.val()) { // proceed if any file was selected
					$(data.popup).find('form').attr('action', $.cleditor.buttons.image.uploadUrl).submit();
                                        $iframe.bind('load', function() {
						var file_url;
						try {
							file_url = $iframe.get(0).contentWindow.document.getElementById('image').innerHTML;
						} catch(e) {};
                                                console.log($iframe.get(0).contentWindow.document);
						if(file_url) {
							editor.execCommand(data.command, file_url, null, data.button);
						} else {
							alert('An error occured during upload!');
						}
						$iframe.unbind('load');
						closePopup(editor);
					});
				} else if (url != '') {
					editor.execCommand(data.command, url, null, data.button);
					closePopup(editor);
				}
			});
	}
})(jQuery);
