<?php
use App\Http\Controllers\OrderController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Order;
use App\Http\Controllers\ProfileController;

Route::view('/', 'home');

Route::view('/login', 'auth.login');
Route::view('/register', 'auth.register');




Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products', [ProductController::class, 'store']);
Route::get('/products/{id}/edit', [ProductController::class, 'edit']);
Route::post('/products/{id}/update', [ProductController::class, 'update']);
Route::get('/products/{id}/delete', [ProductController::class, 'destroy']);
Route::get('/add-to-cart/{id}', [ProductController::class, 'addToCart']);
Route::get('/cart', [ProductController::class, 'cart']);
Route::get('/checkout', [ProductController::class, 'checkout']);
Route::post('/order', [OrderController::class, 'store']);
Route::get('/admin', [ProductController::class, 'admin']);
Route::get('/admin/orders', [OrderController::class, 'index']);
Route::get('/home', function () {
    return view('home');
});
Route::get('/rate/{id}/{value}', [ProductController::class, 'rate']);
Route::get('/invoice/{id}', [OrderController::class, 'invoice']);

Route::get('/', function () {
    return view('home');
});

Route::get('/delivery', function () {
    return view('delivery');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::view('/settings','settings');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

/*
| REGISTER PAGE
*/
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

/*
| SHOW REGISTER PAGE
*/
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

/*
| HANDLE REGISTER (IMPORTANT)
*/
Route::post('/register', function (Request $request) {

    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    return redirect('/login');
});

/*
| SHOW LOGIN PAGE
*/
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

/*
| HANDLE LOGIN (IMPORTANT)
*/
Route::post('/login', function (Request $request) {

    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect('/');
    }

    return back()->withErrors([
        'email' => 'Email or password incorrect',
    ]);
});

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', function () {

    $orders = [];
    $menus = [];
    $todaySales = 0;

    return view('dashboard', compact('orders', 'menus', 'todaySales'));

})->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/* ✅ Breeze Auth */
require __DIR__.'/auth.php';
Route::get('/menu/search', [FoodController::class, 'search'])->name('menu.search');



