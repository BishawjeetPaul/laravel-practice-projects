const mix = required('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/scripts.js', 'public/js')
    
    .postCss('resources/css/app.css', 'public/css', [])
    .postCss('resources/css/style.css', 'public/css');

