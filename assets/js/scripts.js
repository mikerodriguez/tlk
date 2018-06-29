(function($) {

	$(document).on("scroll", function(){
		if($(document).scrollTop() > 100)
	    {
	       $(".logo").addClass("shrink");
	    }
	    else
	    {
	        $(".logo").removeClass("shrink");
	    }
	});

	$(".arrow-down").click(function() {

	    var nextItem = $(this).parent().next('.home-spot');
	    //console.log(nextItem);
	    $('html,body').animate({scrollTop: nextItem.offset().top - 25},'slow');
	});

})(jQuery);
