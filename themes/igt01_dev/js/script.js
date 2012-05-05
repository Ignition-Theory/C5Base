/* Author:

*/


/* Webfonts */
WebFontConfig = {
	google: { families: [ 'Cantarell:700,400:latin', 'Stoke::latin' ] }
};
(function() {
	var wf = document.createElement('script');
	wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
	wf.type = 'text/javascript';
	wf.async = 'true';
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(wf, s);
})(); 

/* Enable Tooltips */

//$("[rel=tooltip]").tooltip({selector : 'page'});