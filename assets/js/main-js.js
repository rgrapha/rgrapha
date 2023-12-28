jQuery(document).ready(function($) {
	var windowWidth = window.innerWidth;

	var veri = 1;	
	var trigger = document.getElementById('menu-trigger').addEventListener("click",function(){
		var menu = document.getElementById('menu-hidde');
		if (veri == 1) {
			menu.style.left = "0px";
			veri = 0;
		}else{
			menu.style.left = "-100%";
			veri = 1;
		}
	})
});
var swiper = new Swiper('.banner-home', {
	speed: 2000,
	parallax: true,
	loop: true,
	spaceBetween: 30,
	effect: 'fade',
	pagination: {
	el: '.swiper-pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	autoplay: {
		delay: 5000,
	},    
});