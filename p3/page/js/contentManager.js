window.addEventListener('load', () => {

	let textarea = document.querySelector(".edit");

	fetch('http://localhost:1337/content/' + textarea.id + ".md")
	.then(response => response.text())
	.then(data => textarea.innerHTML = data)
})