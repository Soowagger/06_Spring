/*<![CDATA[*/
(function(w) {
    var wg = w.document.getElementById('wp_tg_cts');
    function doPair(url) {
        if (wg == null) { return; }
        (function(_url) {
            var frm = w.document.createElement('IFRAME');
            frm.width = '1px';
            frm.height = '1px';
            frm.style.display = 'none';
            frm.src='about:blank';
            frm.title = 'tgpairing';
            wg.appendChild(frm);

            var ifrm = (frm.contentWindow) ? frm.contentWindow : (frm.contentDocument.document ? frm.contentDocument.document : frm.contentDocument);
            ifrm.document.open();
            ifrm.document.write('<img src=\"' + _url + '\"/>');
            ifrm.document.close();

            setTimeout(function() {
                wg.removeChild(frm);
            }, 2000);
        })(url);
    }

    try {
        var links = ["https:\/\/mat.adpies.com\/mat\/init?oaid=149b9bba3cd7059906bfe503547ce874\u0026landing=https%3A%2F%2Fastg.widerplanet.com%2Fdelivery%2Fwpp.php%3Fwpg%3Dadpies_rtb%26oaid%3D149b9bba3cd7059906bfe503547ce874","https:\/\/cm.g.doubleclick.net\/pixel?google_nid=wider_planet\u0026google_cm\u0026google_ula=12153253,1707787123\u0026poaid=149b9bba3cd7059906bfe503547ce874","https:\/\/cm-exchange.toast.com\/bi\/pixel?cm_pid=1107948209\u0026puid=149b9bba3cd7059906bfe503547ce874\u0026toast_push"],
            len = links.length,
            i;
        for (i=0; i<len; i++) {
            doPair(links[i]);
        }
    } catch(e) {}
})(window);
/*]]>*/


/*<![CDATA[*/
(function() {
var ttd = new Image();
ttd.src = "https:\/\/match.adsrvr.org\/track\/cmf\/generic?ttd_pid=ven6wdk\u0026ttd_tpi=1\u0026ttd_puid=149b9bba3cd7059906bfe503547ce874";
})();
/*]]>*/





/*<![CDATA[*/
(function(w) {
    try {
        var identity = {
            setCookie: function(cname, cvalue, exdays) {
                var d = new Date();
                d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
                var expires = 'expires='+d.toUTCString();
                var domain = 'domain=.'+this.extractRootDomain(location.host);
                document.cookie = cname + '=' + cvalue + ';' + domain + ';' + expires + ';path=/';
            },
            getCookie: function(cname) {
                var name = cname + '=';
                var ca = document.cookie.split(';');
                for(var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') {
                        c = c.substring(1);
                    }
                    if (c.indexOf(name) == 0) {
                        return c.substring(name.length, c.length);
                    }
                }
                return '';
            },
            extractRootDomain: function (domain) {
                var splitArr = domain.split('.'),
                    arrLen = splitArr.length;

                if (arrLen > 2) {
                    //TODO: .me 와 같은 특수도메인 예외처리 필요.
                    domain = splitArr[arrLen - 2] + '.' + splitArr[arrLen - 1];
                    if (splitArr[arrLen - 1].length == 2 && splitArr[arrLen - 1].length == 2) {
                        domain = splitArr[arrLen - 3] + '.' + domain;
                    }
                }
                return domain;
            }
        };

        var c = document.cookie,
            size = document.cookie.length,
            ca = c.split(';'),
            len = ca.length,
            wp_uid = identity.getCookie('_wp_uid'),
            is_wp_uid = 'empty',
            ga = identity.getCookie('_ga') ? 1 : 0,
            scheme = location.href.split('://')[0],
            i,
            c,
            ti = location.href.split('ti=');

        ti =  (ti.length>1 ? ti[1].split('&')[0] : '');

        if (wp_uid) {
            is_wp_uid = (/^[0-9]-[a-zA-Z0-9_]+-s[0-9]+.[0-9]+\|[a-zA-Z0-9_-]+\|[a-zA-Z0-9_-]+/.test(wp_uid.replace(/%7C/g,'|')) ? 1 : 0);
            if (is_wp_uid) {
                identity.setCookie('_wp_uid', "2-149b9bba3cd7059906bfe503547ce874-s1706745841.593924|windows_10|chrome-1goqkbn", 365);
                return;
            }
        }

        if (size>3980 || len>45 || !is_wp_uid) {
            if (/^(http|https)$/.test(scheme)) {
                i = new Image();
                i.src = scheme + '://altg.widerplanet.com/delivery/info?dlid=&count=' + len + '&size=' + size + '&is_wp_uid=' + is_wp_uid + '&ti=" . $clientId . "&ga=' + ga + (is_wp_uid === 0 ? '&org_wp_uid=' + encodeURIComponent(wp_uid) : '');
            }
        } else {
            identity.setCookie('_wp_uid', "2-149b9bba3cd7059906bfe503547ce874-s1706745841.593924|windows_10|chrome-1goqkbn", 365);
        }

    } catch(e) {}
})(window);
/*]]>*/





