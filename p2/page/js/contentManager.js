window.addEventListener('load', () => {

	let textareas = document.querySelectorAll("textarea");

	textareas.forEach(v => {
		fetch('http://localhost:1337/template/content/' + v.id + ".html")
		.then(response => response.text())
		.then(data => v.innerHTML = data)
	})


	document.querySelector("#bold").addEventListener('click', () => {
		formatText("b");
	})
	document.querySelector("#italic").addEventListener('click', () => {
		formatText("i");
	})
	document.querySelector("#underline").addEventListener('click', () => {
		formatText("u");
	})
	

	function formatText (tag) {
		let textarea = document.querySelector("produkte");
        var selectedText = textarea.selection.createRange().text;

        if (selectedText != "") {
            var newText = "<" + tag + ">" + selectedText + "</" + tag + ">";
            textarea.selection.createRange().text = newText;
        }
    }
})