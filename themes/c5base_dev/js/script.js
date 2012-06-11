
/*	******** script.js ********
	Application code. For any custom javascript written specifically for a project/theme.
	************************************************************************* */

/*  ====== Google Web Fonts ======
	========================================================================= */
	
WebFontConfig = {
	google: { families: [ 'Lato:400,700:latin' ] }
};
(function() {
	var wf = document.createElement('script');
	wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
	wf.type = 'text/javascript';
	wf.async = 'true';
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(wf, s);
})(); 
  

/*  ====== Cookie Consent ======
	Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent 
	========================================================================= */
	
/* 
Find any Javascript elements that set cookies. Examples might include Google AdSense and other targeted advertising plugins.
Modify the <script> tag so that the type attribute is "text/plain" rather than "text/javascript"
Add a class of "cc-onconsent-cookiename" to the <script> tag
E.G. <script type="text/plain" class="cc-onconsent-customcookie">
*/

// <![CDATA[
cc.initialise({
	cookies: {
		analytics: {}
		//social: {}
		//advertising: {},
		/*
		customcookie: {
			title: 'My custom cookie title',
			description: 'Here is a description of '+
				'my custom type of cookie.'
		}*/
	},
	settings: {
		tagPosition: "bottom-left",
		bannerPosition: "bottom",
		//refreshOnConsent: true,
		style: "light"
	},
	strings: {
		//socialDefaultTitle: 'Social Media',
		//socialDefaultDescription: 'Facebook, Twitter and other, social websites need to know who you are to work properly.',
		analyticsDefaultTitle: 'Analytics',
		analyticsDefaultDescription: 'We anonymously measure your use of this website to improve your experience.',
		defaultTitle: 'Default cookie title',
		defaultDescription: 'Default cookie description.',
		learnMore: 'Learn more',
		closeWindow: 'Close window'
		//advertisingDefaultTitle: 'Advertising',
		//advertisingDefaultDescription: 'Adverts will be chosen for, you automatically based on your past behaviour and interests.',
	}
});
// ]]>
