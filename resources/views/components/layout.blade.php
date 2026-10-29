<!DOCTYPE html>
<html>
<head>
    <title>{{ $title ?? 'My App' }}</title>
    @vite(['resources/css/styles.css', 'resources/js/script.js'])
</head>
<body>
    <header>My App</header>

    <div class="layout">
        <aside>Left</aside>
        <main>{{ $slot }}</main>
        <aside>Right</aside>
    </div>

    <footer>Footer</footer>
</body>
</html>
