<div>

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
