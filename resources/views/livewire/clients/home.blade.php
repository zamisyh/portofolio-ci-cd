<div>

    @section('title', 'Zamzam Saputra - Personal Website')
    @section('metaTags')
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
    @endsection
    @section('js')
        <script src="{{ asset('library/particlejs/particles.min.js') }}"></script>
        <script>
            var config = "{{ asset('library/particlejs/particlesjs-config.json') }}";
            particlesJS.load('particles-js', config, function() {
                console.log('callback - particles.js config loaded');
            });
        </script>
        <script src="{{ asset('library/animation/anime.min.js') }}"></script>
        <script src="{{ asset('library/animation/app.js') }}"></script>

    @endsection
    <div>

        @livewire('clients.components.navbar')
        <div id="particles-js" style="position: absolute; width: 100%; height: 100%;"></div>
        @livewire('clients.components.hero')
    </div>
</div>
