
jQuery(document).ready(function(){
	videoHeight();

	jQuery(".project-links li:last-of-type").addClass("active");	

});


jQuery(window).on('resize', function() {
	videoHeight();
})


jQuery(".project-links li a").click(function() {
	var postId = jQuery(this).attr("data-id");
	var postUrl = window.location.href + "?p=" + postId;
	jQuery(".project-links li").removeClass("active");
	jQuery(this).parent().addClass("active");

	var mq = window.matchMedia( "(min-width: 960px)" );
	jQuery.ajax({
		url: postUrl,
		success: function(data) {
			jQuery(".project-container").empty();
			jQuery(".project-container").append(data);
			
			if (mq.matches) {
				jQuery(".project-content").animate({
					right: "+=400",
					opacity: 1,
				}, 800);
				jQuery(".project-image").animate({
					bottom: "+=400",
					opacity: 1,
				}, 800);
				
			} else {
				jQuery(".project-content").animate({
					
					opacity: 1,
				}, 800);
				jQuery(".project-image").animate({
				
					opacity: 1,
				}, 800);
			}
			

		},


	})
})


function videoHeight() {
	var windowHeight = jQuery(".video-bg").height();
	jQuery("section#container").css("margin-top", windowHeight);
	jQuery("section.intro-content").css("height", windowHeight);

}


