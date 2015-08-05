define(function(require) {
	var elgg = require('elgg');
	var $ = require('jquery');

	return {
		toolbar: [
			['Bold', 'Italic', 'Underline', 'Strike'],
			['Undo', 'Redo', 'Link', 'Unlink', 'Image'],
			['NumberedList', 'BulletedList', 'CodeBlock', 'Blockquote'],
			['Paste', 'PasteFromWord', 'Maximize', 'RemoveFormat'],
		],
		removeButtons: 'Subscript,Superscript', // To have Underline back
		allowedContent: true,
		baseHref: elgg.config.wwwroot,
		removePlugins: 'contextmenu,elementspath,tabletools,liststyle',
		extraPlugins: 'codeblock,blockimagepaste',
		defaultLanguage: 'en',
		language: elgg.get_language(),
		skin: 'moono',
		uiColor: '#EEEEEE',
		contentsCss: elgg.get_simplecache_url('elgg/wysiwyg.css'),
		disableNativeSpellChecker: false,
		disableNativeTableHandles: false,
		removeDialogTabs: 'image:advanced;image:Link;link:advanced;link:target',
		autoGrow_maxHeight: $(window).height() - 100,
	};
});
