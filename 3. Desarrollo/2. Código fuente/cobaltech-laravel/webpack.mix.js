const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
    // .sass('resources/sass/app.scss', 'public/css');

mix.styles([
        'resources/css/estilo.css',
        'resources/css/bootstrap.min.css',
        'resources/css/style.css',
        'resources/css/components.css',
        'resources/css/font-awesome-4.7.0/css/font-awesome.min.css',
        'resources/css/OwlCarousel2-2.2.1/owl.carousel.css',
        'resources/css/OwlCarousel2-2.2.1/owl.theme.default.css',
        'resources/css/OwlCarousel2-2.2.1/animate.css',
        'resources/css/main_styles.css',
        'resources/css/responsive.css'
    ],'public/css/app.css')
    .scripts([
        'resources/js/jquery-3.5.1.min.js',
        'resources/js/bootstrap.bundle.min.js',
        'resources/js/stisla.js',
        'resources/js/scripts.js',
        'resources/js/custom.js',
        'resources/js/greensock/TweenMax.min.js',
        'resources/js/greensock/TimelineMax.min.js',
        'resources/js/scrollmagic/ScrollMagic.min.js',
        'resources/js/greensock/animation.gsap.min.js',
        'resources/js/greensock/ScrollToPlugin.min.js',
        'resources/js/OwlCarousel2-2.2.1/owl.carousel.js',
        'resources/js/easing/easing.js',
        'resources/js/progressbar/progressbar.min.js',
        'resources/js/parallax-js-master/parallax.min.js'
    ],'public/js/app.js')
;