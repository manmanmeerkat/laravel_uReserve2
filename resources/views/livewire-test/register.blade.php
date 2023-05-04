<html>
    <head>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        live-wireテスト<span class="text-blue-300">register</span> 
        @livewireScripts
        @livewire('register')
    </body>


</html>