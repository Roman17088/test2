'use strict';
var appCoinNews = {
    // values storage
    window: {
        width: window.innerWidth
    },
    // cache elements
    el: {
        $topMenu: null
    },
    selectors: {
        topMenu: '#topMenu',
        asLink: '.asLink',
        dataSrc: '[data-src]'
    },
    // redirect
    redirect: function (url, target) {
        if (target) {
            window.open(url, target);
            return;
        }
        window.location.href = url;
    },
    // as tag A
    asLink: function (e) {
        e.stopPropagation ? e.stopPropagation() : (e.cancelBubble = true);
        var $this = $(e.currentTarget),
            obTarget = $(e.target);
        if (!$this.attr('data-href')) {
            console.error('Not found or empty data-href');
            return;
        }
        if (obTarget.hasClass('notReact') || obTarget.parents('.notReact').length) {
            return;
        }
        var url = $this.attr('data-href');
        if (url && url.slice(0, 4) !== 'http' && url[0] !== '#') {
            url = window.location.origin + url;
        } else {
            url = window.location.origin + '/' + url;
        }
        appCoinNews.redirect(url, $this.attr('data-target'));
    }
};
// init app
appCoinNews.init = function () {
    appCoinNews.el.$topMenu = $(appCoinNews.selectors.topMenu);
    $(window).on('resize', function () {
        appCoinNews.loadViewedImg();
        var w = window.innerWidth;
        if (appCoinNews.window.width !== w) {
            appCoinNews.window.width = w;
            // There was a change in width

        }
    }).on('scroll', function () {
        appCoinNews.loadViewedImg();
    }).on('load', function () {
        appCoinNews.loadViewedImg();
    });
};
// lazy loading
appCoinNews.loadViewedImg = function () {
    var wh = window.innerHeight + window.scrollY;
    $(appCoinNews.selectors.dataSrc).not('.showed').each(function () {
        var $this = $(this);
        if ($this.offset().top + 5 > wh) {
            if (!$this.hasClass('initialized')) {
                $this.css({
                    'background-color': '#fafafa',
                    'background-image': 'url(/i/preloader.gif)',
                    'background-position': 'center center',
                    'background-repeat': 'no-repeat'
                }).addClass('initialized');
            }
            return;
        }
        $this.addClass('showed');
        var src = $this.data('src');
        if (!src) {
            return;
        }
        var color = $this.data('color') ? $this.data('color') : 'transparent',
            size = $this.data('size') ? $this.data('size') : 'cover',
            position = $this.data('position') ? $this.data('position') : '50%';
        $this.css({
            'background-image': 'url(' + src + ')',
            'background-position': position,
            'background-size': size,
            'background-color': color,
            'background-repeat': 'no-repeat'
        });
    });
};

$(function () {
    appCoinNews.init();

    appCoinNews.el.$topMenu.find('.burger').on('click', function () {
        $(this).toggleClass('open');
        appCoinNews.el.$topMenu.toggleClass('open');
    });

    $(appCoinNews.selectors.asLink).on('click', appCoinNews.asLink);
});