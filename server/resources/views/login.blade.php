<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | TravelWorld</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

<div class="auth-container">

    <!-- Left Side Branding -->
    <div class="auth-left">
        <div class="brand-content">
            <h1>TravelWorld ✈️</h1>
            <p>Discover destinations. Create memories. Travel smart.</p>
        </div>
    </div>

    <!-- Right Side Form -->
    <div class="auth-right">
        <div class="form-box">
            <h2>Welcome Back</h2>
            <p class="subtitle">Login to continue your journey</p>

            {{-- Success / Error Messages --}}
            @if(session('success'))
                <div class="alert success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert error">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ url('/login') }}">
                @csrf

                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <small class="validation">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group password-group">
                    <label>Password</label>
                    <input type="password" name="password" id="password" required>
                    <span class="toggle-password" onclick="togglePassword()">👁</span>
                    @error('password')
                        <small class="validation">{{ $message }}</small>
                    @enderror
                </div>

                <div class="options">
                    <label class="remember">
                        <input type="checkbox" name="remember">
                        Remember Me
                    </label>
                    <a href="forgot-password" class="forgot">Forgot Password?</a>
                </div>

                <button type="submit" class="btn-login">Login</button>
            </form>

            <div class="bottom-text">
                Don’t have an account? 
                <a href="{{ route('signup') }}">Sign Up</a>
                <br>
                <a href="{{ url('/home') }}" class="back-home">← Back to Homepage</a>
            </div>
        </div>
    </div>

</div>

<script>
function togglePassword() {
    const pass = document.getElementById("password");
    pass.type = pass.type === "password" ? "text" : "password";
}
</script>

</body>
</html>