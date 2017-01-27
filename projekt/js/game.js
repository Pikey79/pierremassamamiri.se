
jQuery.konami = function(fn, code) {
    // ← → 
    code = code || [37, 39,];
    var i = 0;

    $(document).keydown(function(e) {
        var char = typeof code === 'string' ? String.fromCharCode(e.which).toLowerCase() : e.which;
        i = char === code[i] ? i + 1 : 0;
        if (i === code.length) {
            fn();
            i = 0;
        }
    });
};

$.konami(function() {


	if (window.confirm('Klicka "ok" om du vill hänga gubbe.')) 
{
window.location.href='http://localhost/pierremassamamiri.se/projekt/index.php?page=h%C3%A4ngagubbe';
};
    


});

$.konami(function() {
    alert('Woohoo!');
}, 'foo');
