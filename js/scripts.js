
jQuery(document).ready(function(){
	videoHeight();

// Add Active to Last Class
jQuery(".project-links li:last-of-type").addClass("active");	

// Projects Title Click, Open Menu 
jQuery("h2.projects-title").click(function() {
	jQuery("ul.project-links").toggleClass("open");
	jQuery(this).toggleClass("open");
	jQuery(this).children("#nav-toggle").toggleClass("active");
});

});


jQuery(window).on('resize', function() {
	videoHeight();
})


// Project Click
jQuery(".project-links li a").click(function() {
	var postId = jQuery(this).attr("data-id");
	var postUrl = window.location.href + "?p=" + postId;
	jQuery(".project-links li").removeClass("active");
	jQuery(this).parent().addClass("active");
	
// Check Media Query
var mq = window.matchMedia( "(min-width: 769px)" );

	// Ajax for new project 
	jQuery.ajax({
		url: postUrl,
		success: function(data) {
			jQuery(".project-container").empty();
			jQuery(".project-container").append(data);
			


			if (mq.matches) {
				jQuery("html,body").animate({
					scrollTop: jQuery(".projects-title").offset().top}, '400');
			}
			else {
				jQuery("html,body").animate({
					scrollTop: jQuery(".project-container").offset().top}, '400');
			};

			jQuery(".project-content").animate({

				opacity: 1,
			}, 800);
			jQuery(".project-image").animate({

				opacity: 1,
			}, 800);



		},


	})
})


// Top Margin based on screen height
function videoHeight() {
	var windowHeight = jQuery(".video-bg").height();
	jQuery("section#container").css("margin-top", windowHeight);
	jQuery("section.intro-content").css("height", windowHeight);

}


