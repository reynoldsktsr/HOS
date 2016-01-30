var menuToggle = document.getElementById('menu-trigger');
menuToggle.addEventListener("click", toggleMenuDisplay);
function toggleMenuDisplay() {
	$('#menu-wrapper').toggle();
}