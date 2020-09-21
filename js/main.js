"use strict"

window.addEventListener('load', () => {

	console.log("Successfully Loaded!");

	const LINKS = document.querySelectorAll('.link');

	LINKS.forEach(item => {
		item.addEventListener('click', (e) => {
			e.preventDefault();
			document.querySelector('#'+item.name).submit();	
		})
	})


})