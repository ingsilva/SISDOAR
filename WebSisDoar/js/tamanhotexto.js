
//Especifica as tags que serão aumentadas com a função
var tgs = new Array('div', 'td', 'tr', 'a', 'body', 'input', 'select');

//Especifica o tamanho de aumento a cada clique do usuário
var szs = new Array('12px', '14px', '16px', '18px', '20px');
//Valor inicial
var startSz = 2;

function ts(trgt, inc) {
    if (!document.getElementById)
        return
    var d = document, cEl = null, sz = startSz, i, j, cTags;
    sz += inc;
    if (sz < 0)
        sz = 0;
    if (sz > 6)
        sz = 6;
    startSz = sz;
    if (!(cEl = d.getElementById(trgt)))
        cEl = d.getElementsByTagName(trgt)[ 0 ];
    cEl.style.fontSize = szs[ sz ];
    for (i = 0; i < tgs.length; i++) {
        cTags = cEl.getElementsByTagName(tgs[ i ]);
        for (j = 0; j < cTags.length; j++)
            cTags[ j ].style.fontSize = szs[ sz ];
    }
}