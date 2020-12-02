window.addEventListener('load', () => {
	let textarea = document.querySelector(".edit");
	let sel = document.querySelector('#historie_entry')
	let ninp = document.querySelector('.ninp');
	let rm = document.querySelector('.remove');
	console.log(sel)
	let compmd = document.querySelector('#compiledMarkdown');
	textarea.addEventListener('input', () => {
		compmd.innerHTML = marked(textarea.value);
	})

	if(textarea != null && sel == null){
		fetch('http://localhost:1337/content/' + textarea.id + ".md")
		.then(response => response.text())
		.then(data => {
			textarea.innerHTML = data
			compmd.innerHTML = marked(textarea.value);
		})
	}

	if(sel != null){
		ninp.style.visibility = "hidden";
		rm.style.visibility = "hidden";
		textarea.style.visibility = "visible";
		let g = document.querySelector('.gett');
		sel.addEventListener('change', () => {
			console.log("testing!");
			if(sel.value != "new" && sel.value != "t"){
				ninp.style.visibility = "hidden";
				textarea.style.visibility = "visible";
				rm.style.visibility = "visible";
			 	fetch('http://localhost:1337/content/historie/' + sel.value)
			 	.then(response => response.text())
				.then(data => {
					
					textarea.innerHTML = data
					compmd.innerHTML = marked(textarea.value);
					let v = sel.value
					textarea.name = v.substring(0, v.length-3);
					g.value = v.substring(0, v.length-3);
				})
			}else if(sel.value == "new"){
				ninp.style.visibility = "visible";
				textarea.style.visibility = "visible";
				rm.style.visibility = "hidden";
				textarea.innerHTML = "";
				textarea.name = "new";
				compmd.innerHTML = "";
				g.value = "new";
			}else if(sel.value == "t"){
				textarea.style.visibility = "hidden";
				ninp.style.visibility = "hidden";
				rm.style.visibility = "hidden";
			}
		})
	}
})