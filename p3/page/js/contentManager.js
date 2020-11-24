window.addEventListener('load', () => {

	let textarea = document.querySelector(".edit");
	let sel = document.querySelector('#historie_entry')

	if(textarea != null && sel == null){
		fetch('http://localhost:1337/content/' + textarea.id + ".md")
		.then(response => response.text())
		.then(data => textarea.innerHTML = data)
	}

	if(sel != null){
		let g = document.querySelector('.gett');
		sel.addEventListener('change', () => {
			console.log(sel.id)
		 	fetch('http://localhost:1337/content/historie/' + sel.value)
		 	.then(response => response.text())
			.then(data => {
				console.log(g)
				textarea.innerHTML = data
				let v = sel.value
				textarea.name = v.substring(0, v.length-3);
				g.value = v.substring(0, v.length-3);
			})
		})
	}
})