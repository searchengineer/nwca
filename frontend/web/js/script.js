$(document).ready(function(){

    // Hiding all the testimonials, except for the first one.
    $('.testimonialsbox li').hide().eq(0).show();

    // A self executing named function that loops through the testimonials:
    (function showNextTestimonial(){

        // Wait for 7.5 seconds and hide the currently visible testimonial:
        $('.testimonialsbox li:visible').delay(7500).fadeOut('slow',function(){

            // Move it to the back:
            $(this).appendTo('.testimonialsbox ul');

            // Show the next testimonial:
            $('.testimonialsbox li:first').fadeIn('slow',function(){

                // Call the function again:
                showNextTestimonial();
            });
        });
    })();

});