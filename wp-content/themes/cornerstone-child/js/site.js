jQuery(function() { 

var divs = jQuery(".link-img-wrap");
for(var i = 0; i < divs.length; i+=6) {
  divs.slice(i, i+6).wrapAll("<li class='slide'></li>");
}


	jQuery('.fwrap').hover(
	  function() {
	    jQuery(this).find('.img-wrap').fadeIn(200);
	  }, function() {
	    jQuery(this).find('.img-wrap').fadeOut(300);
	  }
	);

	jQuery('.fwrap').hover(
	  function() {
	    jQuery(this).find('.member-pot').fadeIn(200);
	  }, function() {
	    jQuery(this).find('.member-pot').fadeOut(300);
	  }
	);


	function parallax(){
	    var scrolled = jQuery(window).scrollTop();
	    jQuery('#home-first').css('background-position-y', -(scrolled * 0.5) + 'px');
	}

	jQuery(window).scroll(function(e){
	    parallax();
	});
	
	jQuery(document).foundation({
	  orbit: {
	      animation: 'fade', // Sets the type of animation used for transitioning between slides, can also be 'fade'
	      timer_speed: 10000, // Sets the amount of time in milliseconds before transitioning a slide
	      pause_on_hover: false, // Pauses on the current slide while hovering
	      resume_on_mouseout: false, // If pause on hover is set to true, this setting resumes playback after mousing out of slide
	      animation_speed: 500, // Sets the amount of time in milliseconds the transition between slides will last
	      stack_on_small: true,
	      navigation_arrows: true,
	      slide_number: false,
	      slide_number_text: 'of',
	      container_class: 'orbit-container',
	      stack_on_small_class: 'orbit-stack-on-small',
	      next_class: 'orbit-next', // Class name given to the next button
	      prev_class: 'orbit-prev', // Class name given to the previous button
	      timer_container_class: 'orbit-timer', // Class name given to the timer
	      timer_paused_class: 'paused', // Class name given to the paused button
	      timer_progress_class: 'orbit-progress', // Class name given to the progress bar
	      slides_container_class: 'orbit-slides-container', // Class name given to the 
	      bullets_container_class: 'orbit-bullets',
	      slide_selector: 'li', // Default is '*' which selects all children under the container
	      bullets_active_class: 'active', // Class name given to the active bullet
	      slide_number_class: 'orbit-slide-number', // Class name given to the slide number
	      caption_class: 'orbit-caption', // Class name given to the caption
	      active_slide_class: 'active', // Class name given to the active slide
	      orbit_transition_class: 'orbit-transitioning',
	      bullets: false, // Does the slider have bullets visible?
	      circular: false, // Does the slider should go to the first slide after showing the last?
	      timer: false, // Does the slider have a timer visible?
	      variable_height: false, // Does the slider have variable height content?
	      swipe: true,
	  }
	});

});
