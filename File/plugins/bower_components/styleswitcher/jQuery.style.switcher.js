// Theme color settings
$(document).ready(function () {
    var URLactual = window.location.hostname+"";
    function store(name, val) {
        if (typeof (Storage) !== "undefined") {
            localStorage.setItem(name, val);
        } else {
            window.alert('Please use a modern browser to properly view this template!');
        }
    }
    $("*[data-theme]").click(function (e) {
        e.preventDefault();
        var currentStyle = $(this).attr('data-theme');
        store('theme', currentStyle);
        $('#theme').attr({
            href: 'http://'+URLactual+'/File/css/admin/colors/' + currentStyle + '.css'
        });
        document.getElementById("colorGuardado").value = currentStyle;
        
    });

    var currentTheme = get('theme');
    if (currentTheme) {
        $('#theme').attr({
            href: 'http://'+URLactual+'/File/css/admin/colors/' + currentTheme + '.css'
        });
        document.getElementById("colorGuardado").value = currentTheme;
    }
    // color selector
    $('#themecolors').on('click', 'a', function () {
        $('#themecolors li a').removeClass('working');
        $(this).addClass('working')
    });

});

function get(name) {

}

$(document).ready(function () {
    var URLactual = window.location.hostname+"";
    $("*[data-theme]").click(function (e) {
        e.preventDefault();
        var currentStyle = $(this).attr('data-theme');
        store('theme', currentStyle);
        $('#theme').attr({
            href: 'http://'+URLactual+'/File/css/admin/colors/' + currentStyle + '.css'
        })
        document.getElementById("colorGuardado").value = currentStyle;
    });

    var currentTheme = get('theme');
    if (currentTheme) {
        $('#theme').attr({
            href: 'http://'+URLactual+'/File/css/admin/colors/' + currentTheme + '.css'
        });
        document.getElementById("colorGuardado").value = currentTheme;
    }
    // color selector
    $('#themecolors').on('click', 'a', function () {
        $('#themecolors li a').removeClass('working');
        $(this).addClass('working')
    });
});
