window.addEventListener('load', () => {

	let textarea = document.querySelector(".edit");
	let sel = document.querySelector('#historie_entry')

	if(textarea != null && sel == null){
		fetch('http://localhost:1337/content/' + textarea.id + ".md")
		.then(response => response.text())
		.then(data => textarea.innerHTML = data)
	}

	if(sel != null){
		sel.addEventListener('change', () => {
			console.log(sel.id)
		 	fetch('http://localhost:1337/content/historie/' + sel.value)
		 	.then(response => response.text())
			.then(data => textarea.innerHTML = data)
		})
	}
})