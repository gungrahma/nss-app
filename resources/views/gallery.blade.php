@extends('layouts.app')

@section('content')
<section class="section gallery-section">
    <div class="container" style="display: flex; flex-direction: column; align-items: center;">
        <h1 class="reveal">NSS Photobook</h1>
        <p class="reveal delay-1" style="margin-bottom: 40px;">Click the pages to flip through our aviation archives.</p>

        <div class="book reveal delay-2">
            
            <div class="page" id="page-1">
                <div class="front cover">
                    <h2>Nightshot Syndicate</h2>
                    <p>Volume I</p>
                </div>
                <div class="back">
                    <p class="page-text">"Capturing the raw energy of flight."</p>
                </div>
            </div>

            <div class="page" id="page-2">
                <div class="front">
                    <img src="{{ asset('assets/picture/gallery1.jpeg') }}" alt="Aviation 1" class="gallery-img">
                </div>
                <div class="back">
                    <img src="{{ asset('assets/picture/gallery2.jpeg') }}" alt="Aviation 2" class="gallery-img">
                </div>
            </div>

            <div class="page" id="page-3">
                <div class="front">
                    <img src="{{ asset('assets/picture/gallery3.jpeg') }}" alt="Aviation 3" class="gallery-img">
                </div>
                <div class="back cover-back">
                    <h3>End of Volume I</h3>
                    <a href="{{ url('/') }}" class="back-home-btn">Back to Home</a>
                </div>
            </div>

        </div> </div>
</section>
@endsection