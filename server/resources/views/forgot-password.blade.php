<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password | TravelWorld</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/forgot-password.css') }}">
</head>
<body>

<div class="auth-container">

    <!-- Left Side Branding -->
    <div class="auth-left">
        <div class="brand-content">
            <h1>TravelWorld ✈️</h1>
            <p>Reset your password and continue your journey with us.</p>
        </div>
    </div>

    <!-- Right Side Form -->
    <div class="auth-right">
        <div class="form-box">
            <h2>Forgot <span>Password?</span></h2>
            <p class="subtitle">Enter your email to receive a reset link</p>

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

            <form action="{{ url('/forgot-password') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" required>
                    @error('email')
                        <small class="validation">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="btn-login">Send Reset Link</button>

                <div class="bottom-text">
                    Remembered your password? <a href="{{ url('/login') }}">Login</a>
                    <br>
                    <a href="{{ url('/home') }}" class="back-home">← Back to Homepage</a>
                </div>

            </form>
        </div>
    </div>

</div>

</body>
</html>