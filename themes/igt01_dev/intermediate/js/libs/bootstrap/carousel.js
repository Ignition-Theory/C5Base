(function(d){var f=function(a,b){this.$element=d(a);this.options=d.extend({},d.fn.carousel.defaults,b);this.options.slide&&this.slide(this.options.slide)};f.prototype={cycle:function(){this.interval=setInterval(d.proxy(this.next,this),this.options.interval);return this},to:function(a){var b=this.$element.find(".active"),c=b.parent().children(),b=c.index(b),e=this;if(!(a>c.length-1||a<0))return this.sliding?this.$element.one("slid",function(){e.to(a)}):b==a?this.pause().cycle():this.slide(a>b?"next":
"prev",d(c[a]))},pause:function(){clearInterval(this.interval);return this},next:function(){return this.sliding?void 0:this.slide("next")},prev:function(){return this.sliding?void 0:this.slide("prev")},slide:function(a,b){var c=this.$element.find(".active"),e=b||c[a](),f=this.interval,g=a=="next"?"left":"right",i=a=="next"?"first":"last",h=this;this.sliding=!0;f&&this.pause();e=e.length?e:this.$element.find(".item")[i]();!d.support.transition&&this.$element.hasClass("slide")?(this.$element.trigger("slide"),
c.removeClass("active"),e.addClass("active"),this.sliding=!1,this.$element.trigger("slid")):(e.addClass(a),c.addClass(g),e.addClass(g),this.$element.trigger("slide"),this.$element.one(d.support.transition.end,function(){e.removeClass([a,g].join(" ")).addClass("active");c.removeClass(["active",g].join(" "));h.sliding=!1;setTimeout(function(){h.$element.trigger("slid")},0)}));f&&this.cycle();return this}};d.fn.carousel=function(a){return this.each(function(){var b=d(this),c=b.data("carousel"),e=typeof a==
"object"&&a;c||b.data("carousel",c=new f(this,e));if(typeof a=="number")c.to(a);else if(typeof a=="string"||(a=e.slide))c[a]();else c.cycle()})};d.fn.carousel.defaults={interval:5E3};d.fn.carousel.Constructor=f;d(function(){d("body").on("click.carousel.data-api","[data-slide]",function(a){var b=d(this),c,e=d(b.attr("data-target")||(c=b.attr("href"))&&c.replace(/.*(?=#[^\s]+$)/,"")),b=!e.data("modal")&&d.extend({},e.data(),b.data());e.carousel(b);a.preventDefault()})})})(window.jQuery);
