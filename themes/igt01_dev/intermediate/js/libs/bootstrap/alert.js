(function(b){var a=function(e){b(e).on("click",'[data-dismiss="alert"]',this.close)};a.prototype={constructor:a,close:function(e){function f(){c.remove();c.trigger("closed")}var d=b(this),a=d.attr("data-target"),c;a||(a=(a=d.attr("href"))&&a.replace(/.*(?=#[^\s]*$)/,""));c=b(a);c.trigger("close");e&&e.preventDefault();c.length||(c=d.hasClass("alert")?d:d.parent());c.removeClass("in");b.support.transition&&c.hasClass("fade")?c.on(b.support.transition.end,f):f()}};b.fn.alert=function(e){return this.each(function(){var f=
b(this),d=f.data("alert");d||f.data("alert",d=new a(this));typeof e=="string"&&d[e].call(f)})};b.fn.alert.Constructor=a;b(function(){b("body").on("click.alert.data-api",'[data-dismiss="alert"]',a.prototype.close)})})(window.jQuery);
