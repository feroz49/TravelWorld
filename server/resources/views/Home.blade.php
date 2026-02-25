<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TravelWorld</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>

<!-- Navbar -->
<header class="navbar">
    <div class="logo">
        TRAVEL<span>WORLD</span>
    </div>

    <nav>
        <a class="active" href="#">Home</a>
        <a href="/about">About Us</a>
        <a href="/tourguide">Tour Guide</a>
        <a href="/contact">Contact</a>
        <a href="/login">Login</a>
        <a class="register-btn" href="/signup">Register</a>
    </nav>
</header>

<!-- Hero Section -->
<section class="hero">

    <div class="hero-left">
        <div class="tag">Know Before You Go 🌍</div>

        <h1>
            Traveling opens the door
            to creating <span>memories</span>
        </h1>
        
        <p>Discover destinations. Create memories. Travel smart.</p>
    

         
    </div>

    <div class="hero-right">
        <img src="/images/travel1.png">
        <img src="/images/travel2.png">
        <img src="/images/travel3.png">
    </div>

</section>

    <section class="experience">

    <div class="exp-left">
        <span class="exp-tag">Experience</span>

        <h2>
            With our all experience <br>
            we will serve you
        </h2>

        
        <div class="exp-stats">

            <div class="stat">
                <h3>12k+</h3>
                <span>Successful trip</span>
            </div>

            <div class="stat">
                <h3>2k+</h3>
                <span>Regular clients</span>
            </div>

            <div class="stat">
                <h3>15</h3>
                <span>Year experience</span>
            </div>

        </div>
    </div>

    <div class="exp-right">
        <img src="/images/experience 1.jpg" alt="">
    </div>

</section>



<section class="services">
  <div class="container">
    
    <div class="left">
      <span class="subtitle">What we serve</span>
      <h2>We offer our best <br> services</h2>
    </div>

    <div class="service-cards">

      <div class="card">
        <div class="icon">☁️</div>
        <h3>Calculate Weather</h3>
        <p>Lorem ipsum dolor sit amet, adipiscing elit.</p>
      </div>

      <div class="card">
        <div class="icon">📋</div>
        <h3>Best Tour Guide</h3>
        <p>Lorem ipsum dolor sit amet, adipiscing elit.</p>
      </div>

      <div class="card">
        <div class="icon">⚙️</div>
        <h3>Customization</h3>
        <p>Lorem ipsum dolor sit amet, adipiscing elit.</p>
      </div>

    </div>
  </div>
</section>


<section class="newsletter">
    <div class="container">
        
        <div class="left-content">
            <h1>Subscribe now to get useful traveling information</h1>

            <form class="subscribe-form">
                <input type="email" placeholder="Enter your email">
                <button type="submit">Subscribe</button>
            </form>

            <p>
               Discover destinations. Create memories. Travel smart.
            </p>
        </div>

        <div class="right-image">
             
        <img src="/images/male-tourist 1.jpg" alt="">
    
        </div>

    </div>
</section>

<footer class="footer">
    <div class="footer-wrapper">

        <div class="footer-box">
            <h2 class="footer-logo">TRAVEL<span>WORLD</span></h2>
            <p>It's time to travel the world</p>
            <p>Discover destinations. Create memories. Travel smart.</p>

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
                <li>Tour Guide</li>
            </ul>
        </div>

        <div class="footer-box">
            <h3>Quick Links</h3>
            <ul>
                <li>Login</li>
                <li>Register</li>
            </ul>
        </div>

        <div class="footer-box">
            <h3>Contact</h3>
            <ul>
                <li>📍 Address :Dhaka,Bangladesh</li>
                <li>📧 Email : xyz@mail.com</li>
                <li>📞 Phone : 00022200222</li>
            </ul>
        </div>

    </div>

    <div class="footer-bottom">
        © 2024 TravelWorld. All Rights Reserved
    </div>
</footer>

<!-- FontAwesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


</div>

</body>
</html>
