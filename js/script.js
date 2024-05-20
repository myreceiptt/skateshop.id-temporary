$(function(){

	function Responsive() {
		$('.panda-404, .panda-maintenance').removeAttr("style")

		windowsHeight = $(window).height();
		p404Height = $('.panda-404').height();
		maintenanceHeight = $('.panda-maintenance').height();

		if (p404Height < windowsHeight - 50) {
			$('.panda-404').css({
				'height':windowsHeight,
				'padding-top': (windowsHeight - 16 - p404Height)/2
			})
		}

		if (maintenanceHeight < windowsHeight - $('footer').height()) {
			$('.panda-maintenance').css({
				'height':windowsHeight - $('footer').height(),
				'padding-top': (windowsHeight - 16 - maintenanceHeight)/2
			})
		}
	}

	$(document).ready(function() { 
	 	// Maintenance countdown
	 	if ($('.panda-countdown').length) {
			var date  = new Date(Date.UTC(2016, 8, 28, 12, 0, 0)); // Year/month/Day/hour/min/sec
			var now   = new Date();
			if (date.getTime() > now.getTime()) {
				var diff  = date.getTime()/1000 - now.getTime()/1000;
				var clock = $('.panda-countdown').FlipClock(diff, {
				    clockFace: 'DailyCounter',
				    countdown: true,
				    classes: {
				    	active: 'flip-clock-active',
						before: 'flip-clock-before',
						divider: 'flip-clock-divider',
						dot: 'flip-clock-dot',
						label: 'flip-clock-label',
						flip: 'flip',
						play: 'play',
						wrapper: 'flip-clock-wrapper'
				    }
				});
			} else {
				$(".hideintime").hide();
				$(".showintime").show()
			}
		}

		if ($('#menu').length) {
			$('#menu').slicknav({	
				prependTo:'#responsivemenu'
			});
		}

		//New
		$('.awe-panda .panda-countdown')
			.prepend(
				'<div class="cd-item awe-days">' +
					'<span class="clock-label">Days</span>' +
				'</div>' + 
				'<div class="cd-item awe-hours">' + 
					'<span class="clock-label">Hours</span>' +
				'</div>' + 
				'<div class="cd-item awe-minutes">' +
					'<span class="clock-label">Minutes</span>' +
				'</div>' +
				'<div class="cd-item awe-seconds">' +
					'<span class="clock-label">Seconds</span>' +
				'</div>'
			);
		$('.flip-clock-divider.days').nextAll().appendTo('.awe-days');
		$('.flip-clock-divider.hours').nextAll().appendTo('.awe-hours');
		$('.flip-clock-divider.minutes').nextAll().appendTo('.awe-minutes');
		$('.flip-clock-divider.seconds').nextAll().appendTo('.awe-seconds');
		if ($(window).width() > 768) {
			$('.awe-panda').mousemove(function(e) {
				$('.awe-panda .parallax').each(function() {
					var position = $(this).data('position');
			        var amountMovedX = (e.pageX * -1 / (10*position));
			        $(this).css({
			            'background-position': amountMovedX + 'px 100%'
			        });
			    });
			});
		}
		$('.awe-panda').wrapInner('<div class="inner"></div>')
		$(window).on('load', function() {
			$('.awe-panda').addClass('awe-opacity');
			$('.awe-panda .parallax1, .awe-panda .parallax404').addClass('panda-anim panda-anim-delay1');
			$('.awe-panda .parallax2').addClass('panda-anim panda-anim-delay2');
			$('.awe-panda .parallax3').addClass('panda-anim panda-anim-delay3');
			$('.awe-panda .panda-logo').addClass('logo-anim');
			$('.awe-panda .panda-shadow').addClass('shadow-anim');
			$('.awe-panda .panda-content, .awe-panda .panda-countdown').addClass('panda-content-anim');
			$('.awe-panda .panda-footer').addClass('panda-footer-anim');
		});

		$(window).on('load resize', function() {
			Responsive();
			var heightContent = $(window).height() - $('.panda-footer').height();
			$('.awe-panda .panda-body').height(heightContent);

			setTimeout(function() {
				if($('canvas.snow').length) {
				    $('canvas.snow').let_it_snow({
						speed: 1,
					    interaction: true,
					    size: 3,
					    count: 100,
					    opacity: 1,
					    color: "#ffffff",
					    windPower: 0,
					    image: false
					});
				}
				$('.snow-mobile').css('opacity', '1');
			}, 3000);

		});

	});

	
});

