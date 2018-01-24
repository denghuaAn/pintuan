var obtn = document.getElementById("btn");
var obtn1 = document.getElementById("btn1");
var obox = document.getElementById("box");
var aa = document.getElementsByClassName("a")[0];
var yhm = document.getElementsByClassName("yhm")[0];
var mm = document.getElementsByClassName("mm")[0];
var ocuowu = document.getElementsByClassName("cuowu")[0];
obtn.onclick = function() {
	if(yhm.value!="" && mm.value!=""){
		obox.style.display = "block";
		obtn.disabled = true;
		
	}
	

};
obtn1.onclick = function() {
	obox.style.display = "none";
	obtn.disabled = false;
	yhm.value="";
	mm.value="";
	
};
ocuowu.onmousedown = function(ev) {
	var oevent = ev || event;
	var that = this;
	var x = oevent.clientX - ocuowu.offsetLeft;
	var y = oevent.clientY - ocuowu.offsetTop;
	document.onmousemove = function(ev) {
		var oevent = ev || event;
		that.style.left = oevent.clientX - x + (that.offsetWidth / 2) + "px";
		that.style.top = oevent.clientY - y + (that.offsetHeight / 2) + "px";
	};
	window.getSelection ? window.getSelection().removeAllRanges() : document.selection.empty();
};
document.onmouseup = function() {
	document.onmousemove = null;
};