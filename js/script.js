'use strict';
var listScripts = ['base.js', '2.js', '1.js'], len = listScripts.length, i;
for (i = 0; i < len; ++i) {
    loadJS(listScripts[i]);
}

function loadJS(file) {
    var script = document.createElement('script');
    script.src = '/js/' + file;
    script.setAttribute('defer', 'defer');
    document.getElementsByTagName('body')[0].appendChild(script);
}






