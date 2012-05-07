/* Author:

*/


/* Webfonts */
  WebFontConfig = {
    google: { families: [ 'Josefin+Sans:100,400,700:latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); 
  
 


/* Autostart carousel slideshows */
$('.carousel').carousel('cycle');
