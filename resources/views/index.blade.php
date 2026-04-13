<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NSS - Nightshot Syndicate</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <nav class="navbar">
        <div class="container">
            <a href="/" class="logo">
                <img src="{{ asset('assets/picture/NSS_BLACK.svg') }}" alt="NSS Logo" class="logo-light" height="40">
                <img src="{{ asset('assets/picture/NSS_WHITE.svg') }}" alt="NSS Logo" class="logo-dark"  height="40">
            </a>
            <div class="nav-links">
                <a href="{ url('/about') }}">About</a>
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
        <section id="home" class="hero">
            <div class="container">
                <div class="hero-content">
                    <h1 id = "Typewritter"></h1>
                    <p>A project by SAYAORANQSINI, gungrahmaa and silvanusbrillian.</p>
                    <div style="margin-top: 32px;">
                        <a href="https://www.instagram.com/nssdariselatan/" class="btn">Visit our Instagram!</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="section">
            <div class="container">
                <div class="about-grid">
                    <div class="about-image">
                        <img src="{{ asset('assets/picture/NSS_BLACK.svg') }}" alt="NSS Logo About" class="logo-light">
                        <img src="{{ asset('assets/picture/NSS_WHITE.svg') }}" alt="NSS Logo About" class="logo-dark">
                    </div>
                    <div class="about-text">
                        <h2>About NSS</h2>
                        <p>NSS (Nightshot Syndicate) is a project that contains 3 people (SOS, GR and SB).</p>
                        <p>Our primary project goals is to deliver a nightshot airplane picture from anywhere!.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="section">
            <div class="container contact-container">
                <h2>Let's talk.</h2>
                <p>Wanna collab with us? contact this email!</p>
                <div style="margin-top: 40px;">
                    <a href="mailto:#" class="contact-email">nssteam@gmail.com</a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p><span id="year">2026</span> - NSS Developer team</p>
        </div>
    </footer>

    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>