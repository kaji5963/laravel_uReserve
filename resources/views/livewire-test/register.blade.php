<html>

<head>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body>
    <span class="text-blue-600">register</span>テスト
    {{-- <livewire:counter /> --}}
    @livewire('register')
    @livewireScripts
</body>

</html>
