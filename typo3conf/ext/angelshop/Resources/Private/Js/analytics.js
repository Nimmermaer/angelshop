var gaProperty = 'UA-58438979-1';
var disableStr = 'ga-disable-' + gaProperty;
if (document.cookie.indexOf(disableStr + '=true') > -1) {
    window[disableStr] = true;
}
function gaOptout() {
    document.cookie = disableStr + '=true; expires=Thu, 12 Dec 2097 22:59:59 UTC; path=/';
    window[disableStr] = true;
}

(function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
    a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');


ga('create', 'UA-58438979-1', 'auto');
ga('set', 'anonymizeIp', true);
ga('require', 'displayfeatures');
ga('send', 'pageview');
ga('send', 'pageview', {
    'anonymizeIp': true
});

if(ga) {
   $('.call-to-action-1299').click(function(){
       ga('send', 'event', 'fischerpruefung', 'klick on start page');
   });
   $('#c1297 .ce-textpic a').click(function(){
       ga('send', 'event', 'fischerpruefung', 'klick on start page');
   });
 }