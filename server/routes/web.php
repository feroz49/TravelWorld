<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TourGuideController;
Route::get('/', function () {
    return view('welcome');
});

// Root URL → Home page
Route::get('/', function () {
    return redirect()->route('home');
});
// Home Page
Route::get('/home', function () {
    return view('home');
})->name('home');

// About Page
Route::get('/about', function () {
    return view('about');
})->name('about');






// Forgot Password
Route::get('/forgot-password', function () {
    return view('forgot-password');
});

// Reset Password
Route::get('/reset-password', function () {
    return view('reset-password');
});





Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);
Route::get('/signup', function () {
    return view('signup');
})->name('signup');
Route::post('/signup', [AuthController::class, 'signup']);

Route::get('/dashboard', [AuthController::class, 'dashboard']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/', function () {
    return view('home'); // Homepage
});


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

# Contact Form Submit (POST)
Route::post('/contact', function (Request $request) {

    // Validation
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    // এখানে চাইলে Database এ save করতে পারো

    return back()->with('success', 'Your message has been sent successfully!');
});




Route::get('/tourguide', [TourGuideController::class, 'index'])->name('tourguide');
Route::get('/tourguide/{id}', [TourGuideController::class, 'show'])->name('tourguide.show');


Route::get('/tourguide/{id}', [TourGuideController::class, 'show'])->name('guide.details');

use App\Http\Controllers\ProfileController;

// PROFILE ROUTE
Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');

// OPTIONAL: Profile Edit Route
Route::get('/profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile/{id}/update', [ProfileController::class, 'update'])->name('profile.update');