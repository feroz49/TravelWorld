<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tour Guides | TravelWorld</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/Tourguide.css') }}">
</head>
<body>

<!-- Navbar -->
<header class="navbar">
    <div class="logo">
        TRAVEL<span>WORLD</span>
    </div>

    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="/about">About Us</a>
        <a class="active" href="/tourguide">Tour Guide</a>
        <a href="/contact">Contact</a>
        <a href="/login">Login</a>
        <a class="register-btn" href="/signup">Register</a>
    </nav>
</header>

<div class="tourguide-container">

    <!-- Left side: Branding / Info -->
    <div class="tourguide-left">
        <div class="brand-content">
            <h1>Meet Our Tour Guides</h1>
            <p>Explore destinations with the experts who know them best.</p>
        </div>
    </div>

    <!-- Right side: Tour Guide Cards -->
    <div class="tourguide-right">
       <div class="cards-container">
        @foreach($guides as $guide)
            <div class="tour-card">
                <img src="{{ asset('images/' . $guide->photo) }}" alt="{{ $guide->name }}">
                <h3>{{ $guide->name }}</h3>
                <p>{{ $guide->description }}</p>

                <div class="rating">
                    {!! str_repeat('⭐️', $guide->rating) !!}
                </div>

                <a href="{{ route('guide.details', $guide->id) }}" 
                   class="btn-contact">
                    Details
                </a>
            </div>
        @endforeach
       </div>
    </div>

</div>

<!-- Footer -->
<footer class="footer">
    <div class="footer-wrapper">

        <div class="footer-box">
            <h2 class="footer-logo">TRAVEL<span>WORLD</span></h2>
            <p>It's time to travel the world</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

            <div class="footer-social">
                <a href="#">Y</a>
                <a href="#">T</a>
                <a href="#">F</a>
                <a href="#">I</a>
            </div>
        </div>

        <div class="footer-box">
            <h3>Discover</h3>
            <ul>
                <li>Home</li>
                <li>About</li>
                <li>Tours</li>
            </ul>
        </div>

        <div class="footer-box">
            <h3>Quick Links</h3>
            <ul>
                <li>Gallery</li>
                <li>Login</li>
                <li>Register</li>
            </ul>
        </div>

        <div class="footer-box">
            <h3>Contact</h3>
            <ul>
                <li>📍 Address : Lorem</li>
                <li>📧 Email : xyz@mail.com</li>
                <li>📞 Phone : 00022200222</li>
            </ul>
        </div>

    </div>

    <div class="footer-bottom">
        © 2024 TravelWorld. All Rights Reserved
    </div>
</footer>

</body>
</html>