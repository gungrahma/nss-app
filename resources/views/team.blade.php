@extends('layouts.app')
@section('content')

    <main>
        <section id="team" class="section reveal delay-3">
            <div class="container">
                <h2>Meet our team!</h2>
                <p>We are the three-person team behind the NSS project, capturing
                    and deploying world-class night aviation visuals.</p>
                <div class="team-grid-detailed">

                    <div class="team-card-detailed box-style">
                        <div class="team-portrait-frame">
                            <img src="{{ asset('assets/picture/team1.jpeg') }}" alt="SOS Portrait"
                                class="team-portrait">
                        </div>
                        <div class="team-bio">
                            <h3>SOS</h3>
                            <p class="team-role">Collaborator</p>
                            <p class="team-desc">Visual specialist focused on aviation and night photography. Capturing
                                the raw energy and precise geometry of flight.</p>
                            <div class="team-links">
                                <a href="https://www.instagram.com/sayaoranqsini" target="instagram">Instagram</a>
                                <a href="https://www.jetphotos.com/photographer/401083" target="JetPhotos">JetPhotos</a>
                            </div>
                        </div>
                    </div>

                    <div class="team-card-detailed box-style">
                        <div class="team-portrait-frame">
                            <img src="{{ asset('assets/picture/team2.jpg') }}" alt="Flora Portrait" class="team-portrait">
                        </div>
                        <div class="teamBio">
                            <h3>Flora</h3>
                            <p class="team-role">Collaborator</p>
                            <p class="team-desc">Capturing visual narratives through photography while engineering
                                high-scale full-stack architectures for NSS digital ecosystems.</p>
                            <div class="team-links">
                                <a href="https://www.jetphotos.com/photographer/317115" target="JetPhotos">JetPhotos</a>
                                <a href="" target="instagram">Instagram</a>
                                <a href="https://github.com/gungrahma" target="github">Github</a>
                            </div>
                        </div>
                    </div>

                    <div class="team-card-detailed box-style">
                        <div class="team-portrait-frame">
                            <img src="{{ asset('assets/picture/team3.jpeg') }}" alt="SB Portrait" class="team-portrait">
                        </div>
                        <div class="teamBio">
                            <h3>Ian</h3>
                            <p class="team-role">Collaborator</p>
                            <p class="team-desc">Strategist and creative director, ensuring synergy across all projects
                                and maintaining the Syndicate’s core vision.</p>
                            <div class="team-links">
                                <a href="https://www.jetphotos.com/photographer/317115" target="JetPhotos">JetPhotos</a>
                                <a href="" target="instagram">Instagram</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection