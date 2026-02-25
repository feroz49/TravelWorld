<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us | TravelWorld</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
</head>
<body>

<div class="contact-container">

    <!-- LEFT SIDE -->
    <div class="contact-left">
        <h1>Contact TravelWorld ✈️</h1>
        <p>Have questions about destinations, bookings or tour guides?  
        We're here to help you plan your perfect journey.</p>

        <div class="contact-info">
            📧 Email: support@travelworld.com <br>
            📞 Phone: +880 1234-567890 <br>
            📍 Location: Dhaka, Bangladesh
        </div>

        <a href="{{ url('/') }}" class="btn-home">← Back to Homepage</a>
    </div>

    <!-- RIGHT SIDE -->
    <div class="contact-right">
        <div class="form-box">
            <h2>Send Us a Message</h2>
            <p>We’ll get back to you as soon as possible.</p>

            {{-- Success Message --}}
            @if(session('success'))
                <div class="alert success">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Error Message --}}
            @if(session('error'))
                <div class="alert error">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ url('/contact') }}">
                @csrf

                <div class="form-group">
                    <label>Your Name</label>
                    <input type="text" name="name" required>
                </div>

                <div class="form-group">
                    <label>Your Email</label>
                    <input type="email" name="email" required>
                </div>

                <div class="form-group">
                    <label>Your Message</label>
                    <textarea name="message" required></textarea>
                </div>

                <button type="submit" class="btn-submit">Send Message</button>
            </form>

        </div>
    </div>

</div>

</body>
</html>