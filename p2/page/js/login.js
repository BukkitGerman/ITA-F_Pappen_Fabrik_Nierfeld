window.addEventListener('load', () => {
	console.log("Login JS Loaded")

	let submit = document.querySelector("#submit")
	let usr = document.querySelector("#usr")
	let pwd = document.querySelector("#pwd")
	submit.addEventListener('mouseover', () => {
		if((usr.value == "") || pwd.value == ""){
			console.log("Red")
			submit.style.backgroundColor = "#8b4513";
		}else{
			console.log("Green")
			submit.style.backgroundColor = "green";
		}
	})
})