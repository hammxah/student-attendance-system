	$(document).ready(function(){
		$(document).on('click', 'a[href^="#"]', function (event) {
		    event.preventDefault();

		    $('html, body').animate({
		        scrollTop: $($.attr(this, 'href')).offset().top
		    }, 1000);
		});
	});


$(document).ready(function(){
	    $("[data-toggle=popover]").popover({
		    html: true, 
			content: function() {
		          return $('#popover-content').html();
		        }
		});

	});