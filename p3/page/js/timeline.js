var UID = {
	_current: 0,
	getNew: function(){
		this._current++;
		return this._current;
	}
};

HTMLElement.prototype.pseudoStyle = function(element,prop,value){
	var _this = this;
	var _sheetId = "pseudoStyles";
	var _head = document.head || document.getElementsByTagName('head')[0];
	var _sheet = document.getElementById(_sheetId) || document.createElement('style');
	_sheet.id = _sheetId;
	var className = "pseudoStyle" + UID.getNew();
	
	_this.className +=  " "+className; 
	
	_sheet.innerHTML += " ."+className+":"+element+"{"+prop+":"+value+"}";
	_head.appendChild(_sheet);
	return this;
};


window.addEventListener('load', () => {
	let div = document.querySelector(".timeline")
	let ul = document.querySelector("#tl")
	let point = ul.lastChild.querySelector(".point")
	

	window.addEventListener('scroll', () => {
		last_known_scroll_position = window.scrollY
		let position = (last_known_scroll_position*1.3)
		div.pseudoStyle("before", "max-height", ((last_known_scroll_position*1.3)+80)+"px");
		if((point.getBoundingClientRect().y) <= (document.body.scrollHeight*0.9)){
			div.pseudoStyle("before", "height", "104%");
		}else{
			div.pseudoStyle("before", "height", (position+80)+"px");
			console.log(document.body.scrollHeight)
			console.log(window.getComputedStyle(document.querySelector('.timeline'), ':before').getPropertyValue('height'))
		}
		
	})
})