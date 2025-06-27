<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link src="https://demo.themesberg.com/windster/app.bundle.js" />
        <link src="https://buttons.github.io/buttons.js"/>
        <link src="../path/to/flowbite/dist/flowbite.min.js"/>
        <link src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"/>
        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
        
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
