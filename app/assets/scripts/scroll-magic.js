/*jshint -W117 */
/*jslint latedef:false*/
/* jshint unused:false */

	var MagicStuff = {
		init: function(){
      'use strict';
			var controller = new ScrollMagic.Controller();
			// if ( $('#content.home').length ) {
			// 	this.home(controller);
			// }
      if ( $('.img-in').length ) {
				this.imgInAnim(controller);
			}
			if ( !$('.isMobile').is(':visible') ) {
				var headerTween = TweenMax.set('header', {className:'+=white',onComplete:function(){
					TweenMax.to('header', 0.25,{top:0,ease:Power2.easeOut});
				}});
				var headerScene = new ScrollMagic.Scene({
					triggerElement: $('header'),
					triggerHook: 'onLeave',
					offset: 90
				}).addTo(controller).setTween(headerTween);
			}

		},
    imgInAnim: function(controller) {
      'use strict';
      TweenMax.set('.img-in', {opacity:0,y:50});
      $('.img-in').each(function (index, elem) {
        var imgInTween = new TweenMax.to(elem, 0.75, {opacity:1,y:0,ease:Power2.easeOut});
        var imgInScene = new ScrollMagic.Scene({
            triggerElement: elem,
            triggerHook: 'onEnter',
            offset: 150
          }).addTo(controller)
          .setTween(imgInTween);
      });
    }
  };
