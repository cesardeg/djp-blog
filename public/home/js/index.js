(function() {
    var breakPoints = [0, 410, 760, 1020, 1340, 2400, Infinity],
        banners, members, services;

    var breakPointIndex = function() {
        var width  = $(window).width();
        for (var i = 0; i < breakPoints.length; i++) {
            if (width < breakPoints[i]) {
                return i - 1;
            }
        }
    }

    var resizeTriangles = function(index) {
        var ref       = $('#triangles-ref'),
            refWidth  = ref && ref.outerWidth(),
            refHeight = ref && ref.outerHeight(),
            refLeft   = ref && ref.offset().left;
        var widths = [refWidth / 2, refWidth / 2, 216, 432, 432, 792].map(function(w) {
            return w + refLeft;
        });
        var width = widths[index],
            hLogo = findHeightTriLogo(width);

        $('.triangle-1').css('border-width', '' + (0.75 * refHeight) + 'px ' + width + 'px 0 0');
        $('.triangle-2').css('border-width', (0.25 * refHeight) + 'px ' + '0 0 ' + width + 'px');
        $('.triangle-3').css('border-width', '' + (hLogo + 20) + 'px ' + width + 'px 0 0');
        $('.triangle-4').css('border-width', '' + (hLogo) + 'px ' + width + 'px 0 0');

        /*$('#about').css('padding-top', '')
            .css('padding-top',
            Math.max(hLogo / 2 + 10, +$('#about').css('padding-top').split('px')[0]));*/
    }

    var findHeightTriLogo = function(x1) {
        var el = $('.header .logo'),
            x2 = x1 - (el.offset().left + el.width()),
            y2 = el.offset().top + el.height(),
            th = Math.atan(y2/x2),
            y1 = Math.tan(th) * x1;
        return y1;
    }

    var resize = function () {
        var index = breakPointIndex();
        resizeTriangles(index);
        if (breakPoints[index] < breakPoints[3]) {
            if (!members) {
                members = new Swiper('#members-swiper', { autoplay: 2000, slidesPerView: 'auto' });
            }
        } else {
            if (members) {
                members.destroy(true, true);
                members = null;
            }
        }
        if (index >= 2) {
            $('#textarea').innerHeight($('#col-1').innerHeight() - 12);
        } else {
            $('#textarea').innerHeight('');
        }
    }

    var init = function() {
        banners = new Swiper('#banners-swiper', { autoplay: 2000, loop: true });
        members = new Swiper('#members-swiper', { autoplay: 2000, slidesPerView: 'auto' });
        services = new Swiper('#services-swiper', { parallax: true, onSlideChangeEnd: function () {
            $('#services .pagination li').removeClass('active').eq(services.activeIndex).addClass('active');
        }});

        $('.section').waypoint(function(direction) {
            var section = direction == 'down'
                ? $(this.element)
                : $(this.element).prevAll('.section:first').add(this.element).first();
            $('.header').toggleClass('has-logo', !!section.filter('[has-logo]').length);
            $('.header').toggleClass('clear', !!section.filter('[header-clear]').length);
            $('.header li').has('a[href=\\#'+section.get(0).id+']').addClass('active').siblings().removeClass('active');
        }, { context: $('main'), offset: function() { return $('.header').height() / 2 } });

        $('.grid').masonry({
            itemSelector: '.grid-item'
        });

        resize();
    }

    $(window).resize(function() {
        resize();
    });

    var showMenu = false;
    $('.btn-menu').click(function() {
        showMenu = !showMenu;
        $('.header').toggleClass('show-menu', showMenu);
    });

    $('.header').on('click', 'li', function() {
        $('.header').toggleClass('show-menu', false);
    });

    $('#services').on('click', '.pagination li', function() {
        var index = $(this).prevAll().length;
        services && services.slideTo(index, 1000);
        $(this).addClass('active').siblings().removeClass('active');
    });

    init();
})();
