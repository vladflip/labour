$('.owl-carousel').owlCarousel
	autoplay: true
	autoplayTimeout: 3000
	autoplayHoverPause: true
	smartSpeed: 1000
	loop: true
	dots: false
	nav: true
	navText: [
		'<i class="fa fa-arrow-left"></i>'
		'<i class="fa fa-arrow-right"></i>'
	]
	responsive:
		0:
			items: 1
		600:
			items: 2
		1200:
			items: 3