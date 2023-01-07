<html>

<head>
    @livewireStyles
</head>

<body>
    <div>
        @if (session()->has('message'))
            <div>
                {{ session('message') }}
            </div>
        @endif
    </div>

    {{-- <livewire:counter /> --}}
    @livewire('counter')
    @livewireScripts
</body>

</html>
