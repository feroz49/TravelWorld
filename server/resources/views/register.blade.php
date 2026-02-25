<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - TravelWorld</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

<div style="display:flex; width:100%; max-width:1200px; gap:40px; align-items:flex-start; margin-top:60px; position:relative;">

    <!-- LEFT SIDE -->
    <div style="flex:1;">

        <div class="brand" style="text-align:left; font-size:32px; margin-bottom:20px;">
            Travel<span>World</span>
        </div>

        <footer class="footer">
            <div class="footer-wrapper">

                <div class="footer-box">
                    
                    <p>It's time to travel the world</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                   
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

    </div>

    <!-- RIGHT SIDE -->
    <div class="login-container">

        <h2>Register</h2>

        @if ($errors->any())
            <div style="color:red; margin-bottom:15px; text-align:center;">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="input-group">
                <input type="text" name="name" placeholder="Enter Full Name" required>
            </div>

            <div class="input-group">
                <input type="email" name="email" placeholder="Enter Email" required>
            </div>

            <div class="input-group">
                <input type="password" name="password" placeholder="Enter Password" required>
            </div>

            <div class="input-group">
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            </div>

            <button type="submit" class="login-btn">Register</button>
        </form>

        <div class="switch">
            Already have an account?
            <a href="{{ route('login') }}">Login</a>
        </div>

        <!-- RETURN BUTTON -->
        <div style="text-align:center; margin-top:20px;">
            <a href="{{ route('home') }}" 
               style="display:inline-block; padding:10px 20px; background:#fff; color:#000; border-radius:20px; text-decoration:none; font-weight:bold;">
                ← Return to Home
            </a>
        </div>

    </div>

</div>

</body>
</html>
