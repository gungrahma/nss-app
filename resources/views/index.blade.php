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
                        <a href="{{ url('/projects') }}" class="btn">Visit our Instagram!</a>
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
                        <div class="social-links">
                            <a href="https://x.com/kfrzt7sR" target="_blank" aria-label="Twitter">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z">
                                    </path>
                                </svg>
                            </a>
                            <a href="https://instagram.com/laamfy" target="_blank" aria-label="Instagram">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                </svg>
                            </a>
                        </div>
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