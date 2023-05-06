<html>
    <head>
        @livewireStyles
    </head>
    <body>
        live-wireテスト
        <div>
            @if (session()->has('message'))
                <div class="">
                    {{ session('message')}}
                </div>
            @endif
        </div>
        <!-- <livewire:counter /> -->
        @livewireScripts
        @livewire('counter')
    </body>


</html>