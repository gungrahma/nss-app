@extends('layouts.app')
@section('content')

    <main>
        <section id="home" class="hero">
            <div class="container">
                <div class="hero-content">
                    <h1 id="Typewritter"></h1>
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
                        <p>NSS represents the convergence of SOS, Flora, and Ian: three specialists dedicated to
                            capturing the nightshot photography. We specialize in freezing the motion of aviation at its most
                            dramatic hours and building the digital backbone to share those moments globally.</p>
                        <p>As an ever-evolving project, we constantly update our craft and code to deliver world-class
                            nightshot visuals from any corner of the globe.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="section">
            <div class="container contact-container">
                <h2>Let's talk.</h2>
                <p>Wanna collab with us? contact this email!</p>
                <div style="margin-top: 40px;">
                    <a href="mailto:nss.nss0.nss1@gmail.com" class="contact-email">nssteam@gmail.com</a>
                </div>
            </div>
        </section>
    </main>
@endsection