$(function () {

	var siteMenuClone = function () {

		$('.js-clone-nav').each(function () {
			var $this = $(this);
			$this.clone().attr('class', 'site-nav-wrap').appendTo('.site-mobile-menu-body');
		});


		setTimeout(function () {

			var counter = 0;
			$('.site-mobile-menu .has-children').each(function () {
				var $this = $(this);

				$this.prepend('<span class="arrow-collapse collapsed">');

				$this.find('.arrow-collapse').attr({
					'data-toggle': 'collapse',
					'data-target': '#collapseItem' + counter,
				});

				$this.find('> ul').attr({
					'class': 'collapse',
					'id': 'collapseItem' + counter,
				});

				counter++;

			});

		}, 1000);

		$('body').on('click', '.arrow-collapse', function (e) {
			var $this = $(this);
			if ($this.closest('li').find('.collapse').hasClass('show')) {
				$this.removeClass('active');
			} else {
				$this.addClass('active');
			}
			e.preventDefault();

		});

		$(window).resize(function () {
			var $this = $(this),
				w = $this.width();

			if (w > 768) {
				if ($('body').hasClass('offcanvas-menu')) {
					$('body').removeClass('offcanvas-menu');
				}
			}
		})

		$('body').on('click', '.js-menu-toggle', function (e) {
			var $this = $(this);
			e.preventDefault();

			if ($('body').hasClass('offcanvas-menu')) {
				$('body').removeClass('offcanvas-menu');
				$this.removeClass('active');
			} else {
				$('body').addClass('offcanvas-menu');
				$this.addClass('active');
			}
		})

		$('body').on('click', '.accordion .card', function (e) {
			var $this = $(this);
			$this.find('.collapse').toggleClass('show');

		})

		$('body').on('click', '.js-menu-close', function (e) {
			var $this = $(this);
			e.preventDefault();

			if ($('body').hasClass('offcanvas-menu')) {
				$('body').removeClass('offcanvas-menu');
				$this.removeClass('active');
			}
		})

		// click outisde offcanvas
		$(document).mouseup(function (e) {
			var container = $(".site-mobile-menu");
			if (!container.is(e.target) && container.has(e.target).length === 0) {
				if ($('body').hasClass('offcanvas-menu')) {
					$('body').removeClass('offcanvas-menu');
				}
			}
		});
	};
	siteMenuClone();

});



$(document).ready(function () {
	$(".success-message-1").hide();

	$("#form_1").submit(function (e) {
		e.preventDefault();
		var phone = $(this).find("input[name='phone1']").val();

		$.ajax({
			type: "POST",
			url: "mail1.php",
			data: {
				phone: phone
			},
			success: function () {
				$(".success-message-1").show();
				setTimeout(() => {
					$(".success-message-1").hide();
				}, 3000);
			}

		});
	});
});
$(document).ready(function () {

	$(".ajax_form").submit(function (e) {
		e.preventDefault();
		var phone = $(this).find("input[name='phone1']").val();
		$.ajax({
			type: "POST",
			url: "mail2.php",
			data: {
				phone: phone
			},
			success: function () {

			}

		});
	});
});

let anchorSelector = 'a[href^="#"]';

// Collect all such anchor links
let anchorList =
	document.querySelectorAll(anchorSelector);

// Iterate through each of the links
anchorList.forEach(link => {
	link.onclick = function (e) {

		// Prevent scrolling if the
		// hash value is blank
		e.preventDefault();

		// Get the destination to scroll to
		// using the hash property
		let destination =
			document.querySelector(this.hash);

		// Scroll to the destination using
		// scrollIntoView method
		destination.scrollIntoView({
			behavior: 'smooth',
		});
	}
});

$.fn.setCursorPosition = function(pos) {
    if ($(this).get(0).setSelectionRange) {
      $(this).get(0).setSelectionRange(pos, pos);
    } else if ($(this).get(0).createTextRange) {
      var range = $(this).get(0).createTextRange();
      range.collapse(true);
      range.moveEnd('character', pos);
      range.moveStart('character', pos);
      range.select();
    }
  };

$.mask.definitions['9'] = false;
$.mask.definitions['5'] = "[0-9]";

$('input[name="phone1"]').click(function(){
    $(this).setCursorPosition(4);
}).mask("992-555-555-555",{autoclear: false});
