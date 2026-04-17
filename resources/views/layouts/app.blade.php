<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NSS - About our team!</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <nav class="navbar">
        <div class="container">
            <a href="/" class="logo">
                <img src="{{ asset('assets/picture/NSS_BLACK.svg') }}" alt="NSS Logo" class="logo-light" height="40">
                <img src="{{ asset('assets/picture/NSS_WHITE.svg') }}" alt="NSS Logo" class="logo-dark" height="40">
            </a>
            <div class="nav-links">
                <a href="{{ url('/team') }}" class="active">Team</a>
                <a href="{{ url('/gallery') }}">Gallery</a>
                <a href="#contact">Contact</a>
            </div>
            <div style="display: flex; align-items: center; gap: 15px;">
                <button id="theme-toggle" class="theme-toggle" aria-label="Toggle Theme">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                    </svg>
                </button>
                <button id="menu-toggle" class="menu-toggle" aria-label="Toggle Menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <p><span id="year">2026</span> - NSS Dev Ops</p>
        </div>
    </footer>

    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>