<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $guide->name }} | TravelWorld</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/guide-details.css') }}">
</head>
<body>

<div class="details-container">

    <div class="details-card">

        <!-- Guide Photo -->
        <img src="{{ asset('images/' . $guide->photo) }}" alt="{{ $guide->name }}">

        <!-- Guide Name -->
        <h1>{{ $guide->name }}</h1>

        <!-- Guide Details -->
        <p class="subtitle"><strong>About Me:</strong></p>
        <p>{{ $guide->details }}</p>

        <!-- Rating -->
        <div class="rating">
            @for ($i = 0; $i < $guide->rating; $i++)
                <span>⭐️</span>
            @endfor
        </div>

        <!-- Skills / Expertise -->
        <div class="skills">
            <div class="skill">
                <span>Local Knowledge</span>
                <div class="skill-bar"><div class="fill" style="width:90%;"></div></div>
            </div>
            <div class="skill">
                <span>Communication</span>
                <div class="skill-bar"><div class="fill" style="width:85%;"></div></div>
            </div>
            <div class="skill">
                <span>Tour Planning</span>
                <div class="skill-bar"><div class="fill" style="width:80%;"></div></div>
            </div>
        </div>

        <!-- Contact CTA -->
        <a href="mailto:{{ $guide->email }}" class="btn-contact">
            Contact Guide
        </a>

        <!-- Social Links -->
        <div class="socials">
            <a href="#"><img src="{{ asset('icons/facebook.svg') }}" alt="Facebook"></a>
            <a href="#"><img src="{{ asset('icons/instagram.svg') }}" alt="Instagram"></a>
            <a href="#"><img src="{{ asset('icons/twitter.svg') }}" alt="Twitter"></a>
            <a href="mailto:{{ $guide->email }}"><img src="{{ asset('icons/email.svg') }}" alt="Email"></a>
        </div>

        <!-- Back Button -->
        <a href="{{ route('tourguide') }}" class="btn-back">
            ← Back to Tour Guides
        </a>

    </div>
</div>

</body>
</html>