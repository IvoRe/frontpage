/* 
 * Invoke as: $('sections').front('init',{overlap: 0.9});
 */
/*
  Handles uploading photos and/or movies with form data to Family Archive.
  Also allows for rotation and cropping before uploading.
  Allows multiple files to be uploaded with identical form data.
*/
;(function ($) {
     
    // s is object to hold the settings for this plugin;
    // below the default values are specified:
var s = 
{
    debug: false
};
    // object debug that holds variables and methods for debugging.
var debug =
{ 
};
    // i is an object that holds variables and methods that may not
    // be changed or called from the outside. Internal use only.
var i = 
{
};
    // object methods holds functions that may be called from outside:
var methods = {
    /*
     * 
     * @returns {undefined}
     */
    'init': function (options)
    {
            // merge options with default settings:
        s = $.extend({}, s, options),
            // When the window is resized, recalculate the heights
            // for the sections with a background image
        window.onresize = function(event)
        {
            $(".background-img-container").front('heighten');
        }
            // After the frontpage has loaded, set the section
            // heights for the first time:
        window.onresize();
        
         // When the window is scrolled, see if we pop up the fixed header
        $(window).scroll(function()
        {
            if ($(window).scrollTop() > 200 && $(window).width()>960)
            {
                $('header.fixed').show();
            }
            else
            {
                $('header.fixed').hide();
            }
        });
        
        // glide to anchors on the page:
        $('li.active>a').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);
            
	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 1500, 'swing', function () {
	        window.location.hash = target;
	    });
	});
    }
    ,'heighten': function ()
    {
        this.each( function() {
                // Determine the height of the image in the background:
                // if ratio = 0.8, there is a 20% overlap of two sections
                // on the display:
            var backgroundHeight = window.innerWidth * $(this).data('ratio');
            $(this).height(
                backgroundHeight + $(this).find("section.section-full-width" ).height()
            );
        });
    }
    ,'scroll': function (target)
    {
        var displacement = (window.innerHeight - $(target+'>section').height() )/2;
        var scrollTo = $(target).offset().top - displacement;
        this.animate({'scrollTop': scrollTo}, 2000, function() {
        if ($(window).width()>960)
        {
            $('header.fixed').hide();
        }
        });
    }
};
    /*
        Define the plug-in and handle method called from outside this plugin:
    */
    $.fn.front = function (method, options) {
        if (methods[method]) {
            return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
        } else if (typeof method === 'object' || !method) {
            return methods.init.apply(this, arguments);
        } else {
            $.error('Method ' + method + ' does not exist on frontpage plugin');
        }
    };
})(jQuery);