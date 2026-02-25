<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us | TravelWorld</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <style>
        body{ font-family:'Poppins', sans-serif; margin:0; padding:0; background:#f4f4f9; color:#333; }
        a{ text-decoration:none; color:inherit; }
/* ================= NAVBAR ================= */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 18px 70px;
    background: rgba(255, 255, 255, 0.7); /* Slightly transparent */
    backdrop-filter: blur(10px); /* Blur effect */
    position: sticky;
    top: 0;
    z-index: 1000;
}

.logo {
    font-size: 28px;
    font-weight: 800;
    color: #222;
}

.logo span {
    color: #ffa726; /* Orange accent */
}

nav a {
    margin: 0 15px;
    text-decoration: none;
    color: #222;
    font-weight: 600;
    padding: 6px 10px;
    border-radius: 6px;
    transition: 0.3s;
}

nav a:hover,
nav a.active {
    color: #fff;
    background: #ffa726; /* Orange hover */
}

.register-btn {
    background: #ffa726;
    padding: 8px 18px;
    border-radius: 20px;
    color: white;
    font-weight: 600;
    transition: 0.3s;
}

.register-btn:hover {
    background: #ffb74d; /* lighter orange hover */
    transform: translateY(-2px);
}

/* ================= RESPONSIVE ================= */
@media (max-width: 768px) {
    .navbar {
        flex-direction: column;
        padding: 15px 20px;
    }

    nav {
        display: flex;
        flex-direction: column;
        gap: 10px;
        margin-top: 10px;
        width: 100%;
    }

    nav a {
        text-align: center;
    }

    .register-btn {
        margin-top: 10px;
    }
}

        /* Header Section */
        .about-header{ text-align:center; padding:80px 20px 40px 20px; background:linear-gradient(135deg,#ff8f00,#ffc046); color:#fff; }
        .about-header h1{ font-size:48px; margin:0 0 15px 0; }
        .about-header p{ font-size:18px; margin:0; }

        /* About Content */
        .about-container{ max-width:1200px; margin:50px auto; padding:0 20px; }
        .about-content{ display:flex; flex-wrap:wrap; gap:40px; align-items:center; margin-bottom:60px; }
        .about-text{ flex:1; min-width:300px; }
        .about-text h2{ font-size:32px; color:#ff8f00; margin-bottom:20px; }
        .about-text p{ font-size:16px; line-height:1.8; margin-bottom:20px; color:#555; }
        .about-image{ flex:1; min-width:300px; }
        .about-image img{ width:100%; border-radius:15px; box-shadow:0 10px 30px rgba(0,0,0,0.15); transition:0.5s; }
        .about-image img:hover{ transform:scale(1.05); }

        /* Team Section */
        .team-section{ text-align:center; margin-bottom:60px; }
        .team-section h2{ font-size:36px; color:#ff8f00; margin-bottom:40px; }
        .team-members{ display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:30px; justify-items:center; }
        .team-member{ background:#fff; padding:20px; border-radius:15px; box-shadow:0 10px 25px rgba(0,0,0,0.1); transition:0.3s; }
        .team-member:hover{ transform:translateY(-10px); box-shadow:0 15px 30px rgba(0,0,0,0.2); }
        .team-member img{ width:120px; height:120px; border-radius:50%; margin-bottom:15px; object-fit:cover; }
        .team-member h3{ font-size:20px; margin-bottom:5px; color:#333; }
        .team-member p{ font-size:14px; color:#777; }

        /* Testimonials */
        .testimonials{ background:#fff4e5; padding:60px 20px; text-align:center; margin-bottom:60px; border-radius:15px; }
        .testimonials h2{ font-size:36px; color:#ff8f00; margin-bottom:40px; }
        .testimonial{ max-width:600px; margin:20px auto; font-size:16px; color:#555; line-height:1.6; position:relative; padding:20px; border-left:5px solid #ff8f00; }

       /* ================= CALL TO ACTION ================= */
.cta {
    background: #ff8f00;
    color: #fff;
    text-align: center;
    padding: 60px 20px;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15); /* subtle shadow */
    margin: 40px auto;
    max-width: 900px;
}

.cta h2 {
    font-size: 32px;
    margin-bottom: 25px;
    font-weight: 700;
}

.cta a {
    display: inline-block;
    background: #fff;
    color: #ff8f00;
    padding: 15px 30px;
    border-radius: 8px;
    font-weight: bold;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.cta a:hover {
    background: #ffe0b2;
    transform: translateY(-3px);
    box-shadow: 0 6px 15px rgba(0,0,0,0.15);
}

/* ================= RESPONSIVE ================= */
@media(max-width: 768px) {
    .cta h2 {
        font-size: 26px;
    }

    .cta a {
        padding: 12px 25px;
    }
}

        /* Footer */
        .footer{ background:#222; color:#bbb; padding:50px 20px 20px 20px; }
        .footer-wrapper{ display:flex; flex-wrap:wrap; justify-content:space-between; max-width:1200px; margin:0 auto; gap:30px; }
        .footer-box{ flex:1; min-width:200px; }
        .footer-box h2, .footer-box h3{ color:#fff; margin-bottom:15px; }
        .footer-box p, .footer-box ul li{ color:#bbb; font-size:14px; line-height:1.5; }
        .footer-box ul{ list-style:none; padding:0; }
        .footer-box ul li{ margin-bottom:10px; cursor:pointer; transition:0.3s; }
        .footer-box ul li:hover{ color:#ffa726; }
        .footer-social a{ display:inline-block; width:35px; height:35px; line-height:35px; text-align:center; background:#ffa726; color:#111; border-radius:50%; margin-right:8px; font-weight:bold; transition:0.3s; }
        .footer-social a:hover{ transform:scale(1.2); }
        .footer-bottom{ text-align:center; margin-top:40px; font-size:14px; color:#aaa; }

        /* Responsive */
        @media(max-width:768px){
            .navbar{ flex-direction:column; gap:15px; }
            .about-content{ flex-direction:column; text-align:center; }
            .team-members{ grid-template-columns:1fr; }
        }
    </style>
</head>
<body>

<header class="navbar">
    <div class="logo">TRAVEL<span>WORLD</span></div>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a class="active" href="/about">About Us</a>
        <a href="/tourguide">Tour Guide</a>
        <a href="/contact">Contact</a>
        <a href="/login">Login</a>
        <a class="register-btn" href="/signup">Register</a>
    </nav>
</header>

<div class="about-header">
    <h1>About TravelWorld</h1>
    <p>Explore the world with trusted guides and unforgettable experiences.</p>
</div>

<div class="about-container">
    <div class="about-content">
        <div class="about-text">
            <h2>Our Mission</h2>
            <p>Connect travelers with expert guides and create memorable journeys across the globe.</p>
            <h2>Our Vision</h2>
            <p>Be the most trusted travel platform offering personalized tours and sustainable tourism experiences.</p>
        </div>
        <div class="about-image">
            <img src="{{ asset('images/img.jpg') }}" alt="TravelWorld">
        </div>
    </div>

    <!-- Team Members -->
    <div class="team-section">
        <h2>Meet Our Team</h2>
        <div class="team-members">
            <div class="team-member">
                <img src="{{ asset('images/team1.jpg') }}" alt="Team Member">
                <h3>John Doe</h3>
                <p>Founder & CEO</p>
            </div>
            <div class="team-member">
                <img src="{{ asset('images/team2.jpg') }}" alt="Team Member">
                <h3>Jane Smith</h3>
                <p>Tour Manager</p>
            </div>
            <div class="team-member">
                <img src="{{ asset('images/team3.jpg') }}" alt="Team Member">
                <h3>Mike Lee</h3>
                <p>Marketing Head</p>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <div class="testimonials">
        <h2>What Our Travelers Say</h2>
        <div class="testimonial">"TravelWorld made my Europe trip unforgettable. The guides were excellent!" – Sarah K.</div>
        <div class="testimonial">"Amazing service and friendly tour guides. Highly recommended!" – David L.</div>
    </div>

    <!-- Call to Action -->
    <div class="cta">
        <h2>Ready to Explore?</h2>
        <a href="/tourguide">Book Your Tour Guide Now</a>
    </div>
</div>

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
        © 2026 TravelWorld. All Rights Reserved
    </div>
</footer>

</body>
</html>