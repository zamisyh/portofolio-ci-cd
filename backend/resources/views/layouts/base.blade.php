<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" id="bodyTheme">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="I am a Full-Stack Developer who specializes in Backend Developers, building complex applications using APIs with microservice concepts">
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://zamisyh.tech" />
        <meta property="og:title" content="Zamzam Saputra - Personal Website" />
        <meta property="og:description" content="I am a Full-Stack Developer who specializes in Backend Developers, building complex applications using APIs with microservice concepts" />
        <meta property="og:image" content="{{ asset('logo.webp') }}" />
        <link rel="canonical" href="https://zamisyh.tech" />
        <meta name="robots" content="index, follow">
        <meta name="keywords" content="Zamzam Saputra,Zamisyh,Zamsyh,Zami,zamzam saputra" />
        <meta name="language" content="ID" />
        <meta name="author" content="Zamzam Saputra" />
        <meta name="turbolinks-cache-control" content="reload">

        @yield('metaTags')
        @hasSection('title')

            <title>@yield('title')}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        <!-- Favicon -->
		<link rel="shortcut icon" href="{{ url(asset('logo.ico')) }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ url(mix('js/app.js')) }}" defer></script>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
        @yield('body')

        @livewireScripts

        <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
        @yield('js')
        <script src="{{ asset('js/themes.js') }}"></script>
    </body>
</html>
