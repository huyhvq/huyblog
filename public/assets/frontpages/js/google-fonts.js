/* You can add more configuration options to webfontloader by previously defining the WebFontConfig with your options */
if (typeof WebFontConfig === "undefined") {
    WebFontConfig = new Object();
}
WebFontConfig['google'] = {families: ['Merriweather:300,400,700,900,300italic,400italic,700italic,900italic', 'Montserrat:400,700', 'Playfair+Display:400,700,900,400italic,700italic,900italic', 'Poppins:300,400,500,600,700', 'Roboto+Slab:100,300,400,700&amp;subset=latin']};

(function () {
    var wf = document.createElement('script');
    wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.3/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
})();