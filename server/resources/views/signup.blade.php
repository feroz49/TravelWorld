<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up | TravelWorld</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
</head>
<body>

<div class="auth-container">

    <div class="auth-left">
        <div class="brand-content">
            <h1>TravelWorld ✈️</h1>
            <p>Discover destinations. Create memories. Travel smart.</p>
        </div>
    </div>

    <div class="auth-right">
        <div class="form-box">
            <h2>Create Account</h2>
            <p class="subtitle">Join TravelWorld and start your journey</p>

            @if(session('error'))
                <div class="alert error">
                    {{ session('error') }}
                </div>
            @endif

            <!-- Form -->
            <form id="signupForm" method="POST" action="{{ url('/signup') }}">
                @csrf

                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" required>
                </div>

                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" value="{{ old('email') }}" required>
                </div>

                <div class="form-group password-group">
                    <label>Password</label>
                    <input type="password" name="password" id="password" required>
                    <span class="toggle-password" onclick="togglePassword()">👁</span>
                </div>

                <div class="form-group password-group">
                    <label>Confirm Password</label>
                    <input type="password" name="password_confirmation" id="confirm_password" required>
                    <span class="toggle-password" onclick="toggleConfirmPassword()">👁</span>
                </div>

                <button type="submit" class="btn-login">Sign Up</button>
            </form>

            <div class="bottom-text">
                Already have an account?
                <a href="{{ route('login') }}">Login</a>
            </div>

        </div>
    </div>

</div>

<script>
    // Show/Hide Password
    function togglePassword() {
        const pass = document.getElementById("password");
        pass.type = pass.type === "password" ? "text" : "password";
    }
    function toggleConfirmPassword() {
        const pass = document.getElementById("confirm_password");
        pass.type = pass.type === "password" ? "text" : "password";
    }

    // Password Match Validation
    document.addEventListener('DOMContentLoaded', function(){
        const form = document.getElementById('signupForm');

        form.addEventListener('submit', function(e){
            const password = document.getElementById('password').value.trim();
            const confirmPassword = document.getElementById('confirm_password').value.trim();

            if(password !== confirmPassword){
                e.preventDefault(); // stop form submit
                alert("Password and Confirm Password do not match!");
                return false;
            }
        });
    });
</script>

</body>
</html>