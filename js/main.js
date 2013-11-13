function _(x) {
	return document.getElementByID(x);
}
function signOut() {
    $.get("clearAll.php");
}
