<?php if(extension_loaded("zlib")){ob_start("ob_gzhandler");} header("Content-type: text/javascript"); ?>// App Framer
(function() {

	'use strict';

	var cssfix = (function() {
		var style = document.createElement('dummy').style,
			prefixes = 'Webkit Moz O ms Khtml'.split(' '),
			memory = {};

		return function(prop) {
			if (typeof memory[prop] === "undefined") {

				var ucProp = prop.charAt(0).toUpperCase() + prop.substr(1),
					props = (prop + ' ' + prefixes.join(ucProp + ' ') + ucProp).split(' ');

				memory[prop] = null;
				for (var i in props) {
					if (style[props[i]] !== undefined) {
						memory[prop] = props[i];
						break;
					}
				}

			}

			return memory[prop];
		};

	})();

	var Slider = (function() {
		var sl = function(op) {
			return this.init(op);
		};
		sl.prototype = {
			init: function(op) {

				var $slide = $('#' + op),
					$slw = $slide.find('> .slw'),
					length = $slw.length,
					current = 0,
					duration = 800,

					$arrLeft = $('<div class="slide-arrow to-left"></div>'),
					$arrRight = $('<div class="slide-arrow to-right"></div>'),
					$slideNav = $('<div class="slide-nav"></div>');

				$slide.after($slideNav).after($arrRight).after($arrLeft);

				for (var i = 0; i < length; i++) {
					var $sp = $('<span></span>');
					if (i === current) {
						$sp.addClass('current');
					}
					$slideNav.append($sp);
				}

				var $spanNav = $slideNav.find('span');

				var changing = false,
					change = function(num) {
						if (!changing && current !== num) {
							var dir = 1;
							if (current > num) {
								dir = -1;
							}
							num = (num >= length) ? 0 : num;
							num = (num < 0) ? length - 1 : num;

							changing = true;

							$spanNav.removeClass('current').eq(num).addClass('current');

							$slw.eq(current).animate({
								'left': (dir * -100) + '%'
							}, duration);

							$slw.eq(num).css({
								'left': (dir * 100) + '%'
							}).animate({
								'left': '0%'
							}, duration, function() {
								changing = false;
								current = num;
							});
						}
					};

				$arrLeft.click(function() {
					change(current - 1);
				});
				$arrRight.click(function() {
					change(current + 1);
				});
				$spanNav.each(function(index) {
					$(this).click(function() {
						change(index);
					});
				});

				return this;
			}
		};
		return function(op) {
			return new sl(op);
		}
	})();

	var Hasher = (function() {
		var hashes = ['', 'quehacemos', 'ejemplos', 'nosotros', 'proyecto'];

		return {
			getIndexByHash: function(h) {
				var hash = h || window.location.hash,
					r = 0;
				for (var i = 0; i < hashes.length; i++) {
					if (hash === ('#' + hashes[i])) {
						r = i;
					}
				}
				return r;
			},
			setHashByIndex: function(i) {
				window.location.hash = hashes[i];
			}
		}
	})();


	$('document').ready(function() {
		var $window = $(window),
			$shell = $('#shell'),
			$frames = $('.frame'),
			$frameScrolled = $('.frame-content.scrolled'),
			$frameContent = $('.frame-content'),
			$menuBtn = $('#menu-btn'),
			$wrapCentereds = $('.wrap-centered'),
			length = $frames.length,
			$frameContents = $('.frame-content'),
			wrapCenteredOffsetY = 10,
			setWrapCenteredPositions = function() {
				$wrapCentereds.each(function() {
					var $this = $(this),
						w = $this.width(),
						h = $this.height();
					$this.css({
						'margin-left': '-' + Math.round(w / 2) + 'px',
						'margin-top': '-' + (Math.round(h / 2) - wrapCenteredOffsetY) + 'px'
					});
				});
			};

		var scrollWidth = $shell[0].scrollWidth - $window.width();
		$shell.css('right', scrollWidth + 'px');

		var current = 0,
			prevScroll = -10,
			waitScroll = false,
			animateScroll = function(num, ms) {
				var mss = ms || 800;
				waitScroll = true;
				Hasher.setHashByIndex(num);
				$shell.stop().animate({
					'scrollTop': $window.height() * current
				}, mss, function() {
					setTimeout(function() {
						prevScroll = $shell.scrollTop();
						current = num;
						waitScroll = false;
					}, 100);
				});
			},
			scrolling = function() {
				if (!waitScroll) {
					if (prevScroll < $shell.scrollTop()) { // Down
						current++;
						current = (current >= length) ? length - 1 : current;
					} else { // Up
						current--;
						current = (current < 0) ? 0 : current;
					}
					animateScroll(current);
				}
			},
			setSize = function() {
				setWrapCenteredPositions();
				current = Hasher.getIndexByHash();
				animateScroll(current, 10);
			};

		setSize();

		Slider('slide-what');

		$shell.on('scroll', function() {
			scrolling();
		});
		$window.resize(setSize);

		var renderMenu = function() {
			var scale = 1 / (length + 1);

			$frames.addClass('animatecss').css({
				'width': (100 * scale) + '%',
				'height': ($window.height() * scale) + 'px'
			});
			$frameScrolled.css('overflow', 'hidden');

			$frameContent.css({
				'width': (100 / scale) + '%',
				'height': (100 / scale) + '%'
			}).each(function() {
				//	console.log(cssfix('transform'));
				this.style[cssfix('transform')] = 'scale(' + scale + ')';
			});

		}
		$menuBtn.click(function() {
			renderMenu();
		});
	});
})();<?php if(extension_loaded("zlib")){ob_end_flush();}?>