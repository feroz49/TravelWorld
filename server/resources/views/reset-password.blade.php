<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password - TravelWorld</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/reset-password.css') }}">
</head>
<body>

<div class="container">
    
    <div class="card">

        <h2>Reset <span>Password</span></h2>

        <form action="#" method="POST">
            @csrf

            <!-- Hidden token (Laravel এর জন্য দরকার হবে) -->
            <input type="hidden" name="token" value="{{ request()->route('token') }}">

            <div class="input-group">
                <input type="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="input-group">
                <input type="password" name="password" placeholder="New Password" required>
            </div>

            <div class="input-group">
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            </div>

            <button type="submit">Reset Password</button>

            <div class="back-link">
                <a href="/login">Back to Login</a>
            </div>

        </form>

    </div>

</div>

</body>
</html>

