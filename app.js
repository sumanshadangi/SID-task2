const hamburger = document.querySelector('.headernav .navbar .navbar_list .hamburger');
const mobile_menu = document.querySelector('.headernav .navbar .navbar_list ul');
const menu_item = document.querySelectorAll('.headernav .navbar .navbar_list ul li a');
const header = document.querySelector('.headernav.container');
hamburger.addEventListener('click', () => {
	hamburger.classList.toggle('active');
	mobile_menu.classList.toggle('active');
});
document.addEventListener('scroll', () => {
	var scroll_position = window.scrollY;
	if (scroll_position > 250) {
		header.style.backgroundColor = '#29323c';
	} else {
		header.style.backgroundColor = 'rgba(7, 5, 5, 0.575)';
	}
});
menu_item.forEach((item)=>{
	item.addEventListener('click',()=>{
		hamburger.classList.toggle('active');
	mobile_menu.classList.toggle('active');
	})
})