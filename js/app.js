// App Framer
(function() {

	'use strict';

	var uAgent = navigator.userAgent || navigator.vendor || window.opera,
		ua = uAgent.toLowerCase(),
		webkit = /webkit/.test(ua),

		$window,
		$html,
		$body,
		$scroll,
		$shell,
		frameList = [],
		length,
		activeFrame = 0,
		scrollPosition = 0,
		heightWindow,
		timer = null;

	// Frame
	var F = function($elem, index) {
		return this.init($elem, index);
	};
	F.prototype = {
		init: function($elem, index) {
			this.$elem = $elem;
			this.index = index;
			this.$fixed = $elem.find('> .fixed');
			this.posY = 0;
			return this;
		},
		setPosition: function() {
			this.posY = (heightWindow * this.index) - scrollPosition;
			this.posY = (this.posY < 0) ? 0 : this.posY;
			this.posY = (this.posY > heightWindow) ? heightWindow : this.posY;

			this.$elem.css('top', this.posY + 'px');
			this.setFixedPosition();
		},
		setFixedPosition: function() {
			this.$fixed.css('top', -this.posY + 'px');
		},
		setFixedHeight: function() {
			this.$fixed.height(heightWindow);
		}
	};

	// -------------
	var setActiveFrame = function() {
			var af = Math.floor(scrollPosition / heightWindow) + 1;
			if (af !== activeFrame) {
				frameList[activeFrame].setPosition();
				activeFrame = (af >= length) ? length - 1 : af;
			}
		},
		setPositionAll = function() {
			for (var i = 0; i < length; i++) {
				frameList[i].setPosition();
				frameList[i].setFixedHeight();
			}
		},
		onScrollFunc = function() {
			clearTimer();
			scrollPosition = $scroll.scrollTop();
			setActiveFrame();
			frameList[activeFrame].setPosition();
			correctPosition();
		},
		onResizeFunc = function() {
			clearTimer();
			heightWindow = $window.height();
			$body.height(heightWindow * length + 'px');
			setActiveFrame();
			setPositionAll();
			correctPosition();
		},
		clearTimer = function() {
			if (typeof timer !== null) {
				clearTimeout(timer);
				timer = null;
			}
		},
		correctPosition = function() {
			timer = setTimeout(function() {
				var posY = Math.round(scrollPosition / heightWindow) * heightWindow;
				$html.animate({
					'scrollTop': posY + 'px'
				}, 400);
			}, 1000);
		},
		//////////////////

		init = function() {
			$window = $(window);
			$html = $('html,body');
			$body = $('body');
			$scroll = webkit ? $window : $html;

			$shell = $('#shell');
			$shell.find('> .frame').each(function(index) {
				var $f = new F($(this), index);
				frameList.push($f);
			});

			length = frameList.length;

			$html.scrollTop(0);
			onResizeFunc();

			// Events 
			$window.scroll(onScrollFunc).resize(onResizeFunc);

			$shell.addClass('rendered');
		};



	$('document').ready(init);
})();