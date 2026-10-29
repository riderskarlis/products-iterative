<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My App' }}</title>

    @vite(['resources/css/styles.css', 'resources/js/script.js'])
</head>
<body>
    <div class="layout">
        <header>
            <h1>My App</h1>
        </header>

        <nav aria-label="Galvenā navigācija">
            <a href="/">Sākums</a>
        </nav>

        <main>
            {{ $slot }}
        </main>

        <aside>
            Papildu informācija
        </aside>

        <footer>
            <p>Kājene</p>
        </footer>
    </div>
</body>
</html>
