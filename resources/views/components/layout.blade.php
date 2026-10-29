<!DOCTYPE html>
<html>
<head>
    <title>{{ $title ?? 'My App' }}</title>
    @vite(['resources/css/styles.css', 'resources/js/script.js'])
</head>
<body>
    <header>My App</header>

    <main>{{ $slot }}</main>

    <script>{{ asset('js/script.js') }}</script>
</body>
</html>
