function clickAlert() {
	alert("I'm clicked!");
}

function changeColor() {
	var color = document.getElementById("input").value;

	document.getElementById("theDiv").setAttribute("style", "background-color:" + color);

}