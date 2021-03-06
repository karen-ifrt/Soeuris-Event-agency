if ($(window).width() >= 550) {

    _uacct = "UA-994360-1";
    var colour = "#D0A245";
    var sparkles = 50;
    var x = ox = 400;
    var y = oy = 300;
    var swide = 800;
    var shigh = 600;
    var sleft = sdown = 0;
    var tiny = new Array();
    var star = new Array();
    var starv = new Array();
    var starx = new Array();
    var stary = new Array();
    var tinyx = new Array();
    var tinyy = new Array();
    var tinyv = new Array();
    window.onload = function () {
        if (document.getElementById) {
            var i, rats, rlef, rdow;
            for (var i = 0; i < sparkles; i++) {
                var rats = createDiv(3, 3);
                rats.style.visibility = "hidden";
                document.body.appendChild(tiny[i] = rats);
                starv[i] = 0;
                tinyv[i] = 0;
                var rats = createDiv(5, 5);
                rats.style.backgroundColor = "transparent";
                rats.style.visibility = "hidden";
                var rlef = createDiv(1, 5);
                var rdow = createDiv(5, 1);
                rats.appendChild(rlef);
                rats.appendChild(rdow);
                rlef.style.top = "2px";
                rlef.style.left = "0px";
                rdow.style.top = "0px";
                rdow.style.left = "2px";
                document.body.appendChild(star[i] = rats);
            }
            set_width();
            sparkle();
        }
    }
    function sparkle() {
        var c;
        if (x != ox || y != oy) {
            ox = x;
            oy = y;
            for (c = 0; c < sparkles; c++) if (!starv[c]) {
                star[c].style.left = (starx[c] = x) + "px";
                star[c].style.top = (stary[c] = y) + "px";
                star[c].style.clip = "rect(0px, 5px, 5px, 0px)";
                star[c].style.visibility = "visible";
                starv[c] = 50;
                break;
            }
        }
        for (c = 0; c < sparkles; c++) {
            if (starv[c]) update_star(c);
            if (tinyv[c]) update_tiny(c);
        }
        setTimeout("sparkle()", 20);
    }
    function update_star(i) {
        if (--starv[i] == 25) star[i].style.clip = "rect(1px, 4px, 4px, 1px)";
        if (starv[i]) {
            stary[i] += 1 + Math.random() * 3;
            if (stary[i] < shigh + sdown) {
                star[i].style.top = stary[i] + "px";
                starx[i] += (i % 5 - 2) / 5;
                star[i].style.left = starx[i] + "px";
            }
            else {
                star[i].style.visibility = "hidden";
                starv[i] = 0;
                return;
            }
        }
        else {
            tinyv[i] = 50;
            tiny[i].style.top = (tinyy[i] = stary[i]) + "px";
            tiny[i].style.left = (tinyx[i] = starx[i]) + "px";
            tiny[i].style.width = "2px";
            tiny[i].style.height = "2px";
            star[i].style.visibility = "hidden";
            tiny[i].style.visibility = "visible"
        }
    }
    function update_tiny(i) {
        if (--tinyv[i] == 25) {
            tiny[i].style.width = "1px";
            tiny[i].style.height = "1px";
        }
        if (tinyv[i]) {
            tinyy[i] += 1 + Math.random() * 3;
            if (tinyy[i] < shigh + sdown) {
                tiny[i].style.top = tinyy[i] + "px";
                tinyx[i] += (i % 5 - 2) / 5;
                tiny[i].style.left = tinyx[i] + "px";
            }
            else {
                tiny[i].style.visibility = "hidden";
                tinyv[i] = 0;
                return;
            }
        }
        else tiny[i].style.visibility = "hidden";
    }
    document.onmousemove = mouse;
    function mouse(e) {
        set_scroll();
        y = (e) ? e.pageY : event.y + sdown;
        x = (e) ? e.pageX : event.x + sleft;
    }
    function set_scroll() {
        if (typeof (self.pageYOffset) == "number") {
            sdown = self.pageYOffset;
            sleft = self.pageXOffset;
        }
        else if (document.body.scrollTop || document.body.scrollLeft) {
            sdown = document.body.scrollTop;
            sleft = document.body.scrollLeft;
        }
        else if (document.documentElement && (document.documentElement.scrollTop || document.documentElement.scrollLeft)) {
            sleft = document.documentElement.scrollLeft;
            sdown = document.documentElement.scrollTop;
        }
        else {
            sdown = 0;
            sleft = 0;
        }
    }
    window.onresize = set_width;
    function set_width() {
        if (typeof (self.innerWidth) == "number") {
            swide = self.innerWidth;
            shigh = self.innerHeight;
        }
        else if (document.documentElement && document.documentElement.clientWidth) {
            swide = document.documentElement.clientWidth;
            shigh = document.documentElement.clientHeight;
        }
        else if (document.body.clientWidth) {
            swide = document.body.clientWidth;
            shigh = document.body.clientHeight;
        }
    }
    function createDiv(height, width) {
        var div = document.createElement("div");
        div.style.position = "absolute";
        div.style.height = height + "px";
        div.style.width = width + "px";
        div.style.overflow = "hidden";
        div.style.backgroundColor = colour;
        return (div);
    }

} else {

}

// FILTRE EVENEMENTS

!function ($) {

    "use strict"; // jshint ;_;

    var pluginName = 'portfilter';

    /* PUBLIC CLASS DEFINITION
     * ============================== */

    var PortFilter = function (element) {

        this.$element = $(element)
        this.stuff = $('[data-tag]');
        this.target = this.$element.data('target') || '';

    }

    PortFilter.prototype.filter = function (params) {
        var items = [],
            target = this.target;
        this.stuff
            .fadeOut('fast').promise().done(function () {
                $(this).each(function () {
                    if ($(this).data('tag') == target || target == 'all')
                        items.push(this);
                });
                $(items).show()
            });
    }


    /* PLUGIN DEFINITION
     * ======================== */

    var old = $.fn[pluginName]

    $.fn[pluginName] = function (option) {
        return this.each(function () {
            var $this = $(this)
                , data = $this.data(pluginName);

            if (!data) $this.data(pluginName, (data = new PortFilter(this)))

            if (option == 'filter') data.filter()
        })
    }

    // DEFAULTS
    $.fn[pluginName].defaults = {}

    // CONSTRUCTOR CONVENTION 
    $.fn[pluginName].Constructor = PortFilter;


    /* PORTFILTER NO CONFLICT
     * ================== */

    $.fn[pluginName].noConflict = function () {
        $.fn[pluginName] = old
        return this
    }

    /* PORTFILTER DATA-API
     * =============== */

    $(document).on('click.portfilter.data-api', '[data-toggle^=portfilter]', function (e) {
        $(this).portfilter('filter')
    })

}(window.jQuery);


// Menu mobile

let burger = document.getElementById('burger-mobile');
burger.addEventListener('click', () => {
    
    let menu_mobile = document.getElementById('content-menu');
    menu_mobile.classList.toggle('transi-mobile-menu');
    
});


// Bouton retour en haut

mybutton = document.getElementById("myBtn");
window.addEventListener("scroll", function () {
    if (document.documentElement.scrollTop > 200) {
        mybutton.style.bottom = "80px";
    } else {
        mybutton.style.bottom = "-100px";
    }
});

function topFunction() {
    $("html").animate({ scrollTop: "0" }, "600");
}


// Apparition au défilement

const ratio = .1;

const options = {
    root: null,
    rootMargin: "0px",
    threshold: ratio
}

const handleIntersect = function(entries, observer) {
    entries.forEach(function (entry) {
        if(entry.intersectionRatio > ratio) {
            entry.target.classList.add('reveal-visible');
            observer.unobserve(entry.target);
        }
    })
}

const observer = new IntersectionObserver(handleIntersect, options);
document.querySelectorAll('[class*="reveal-"]').forEach(function(r) {
    observer.observe(r);
})

// Apparition par la droite

const ratio_right = .1;

const options_right = {
    root: null,
    rootMargin: "0px",
    threshold: ratio_right
}

const handleIntersect_right = function(entries, observer) {
    entries.forEach(function (entry) {
        if(entry.intersectionRatio > ratio_right) {
            entry.target.classList.add('reveal-right-visible');
            observer.unobserve(entry.target);
        }
    })
}

const observer_right = new IntersectionObserver(handleIntersect_right, options_right);
document.querySelectorAll('[class*="reveal-right"]').forEach(function(r) {
    observer_right.observe(r);
})



// Loader

$(document).ready(function() {
    $("#loader-wrapper").fadeOut("200");
})

