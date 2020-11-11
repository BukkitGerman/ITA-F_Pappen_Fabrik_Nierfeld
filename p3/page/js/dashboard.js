window.addEventListener('load', () => {
	console.log("ok")
	let point = document.querySelectorAll(".point")
	let links = document.querySelectorAll(".li")
	links.forEach(v => {
		console.log(v)
		v.addEventListener('mouseover', () => {
			point.forEach(p => {
				console.log(p.className.split(' '))
				console.log(v.className.split(' '))
				if(p.className.split(' ')[1] === (v.className.split(' ')[1])){
					p.style.animation = "1s ease infinite fade";
				}
			})
			

		})
	})
})