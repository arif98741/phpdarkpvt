$(document).ready(function() {
	setTimeout(function(){
		$('#below-nav').slideDown(600);
	},200);

	// Size of browser viewport.
	$(window).height();
	console.log($(window).width());
	if ($(window).width() > 1366) {
		$('body').css('font-size','120%');
	}

	// Size of HTML document (same as pageHeight/pageWidth in screenshot).
	$(document).height();
	$(document).width();
});