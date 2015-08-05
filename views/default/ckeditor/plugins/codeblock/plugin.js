CKEDITOR.plugins.add('codeblock', {
	init: function(editor) {
		var pre = new CKEDITOR.style({element:'pre'});
		var code = new CKEDITOR.style({element: 'code'});
		
		function isInCodeBlock() {
			
		}

		editor.ui.addButton('CodeBlock', {
			command: 'codeblock',
			icon: this.path + "/icons/codeblock.png",
			label: 'Apply code block',
		});

		editor.addCommand('codeblock', {
			exec: function() {
				editor.applyStyle(pre);

				var selection = editor.getSelection();
				var preElement = editor.elementPath().contains('pre');

				selection.lock();

				selection.fake(preElement);
				editor.applyStyle(code);

				selection.unlock();
			}
		});

		editor.attachStyleStateChange(pre, function(state) {
			editor.getCommand('codeblock').setState(state);
		});
	}
})