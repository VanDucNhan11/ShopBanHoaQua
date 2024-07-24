<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

// ADMIN
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Admin\ProductController;

// USER
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\Registered_USERController;
use App\Http\Controllers\Frontend\AuthenticatedSessionController;
use App\Http\Controllers\Frontend\UserEmailVerificationNotificationController;
use App\Http\Controllers\Frontend\UserEmailVerificationPromptController;
use App\Http\Controllers\Frontend\UserVerifyEmailController;
use App\Http\Controllers\Frontend\SearchController;
use App\Http\Controllers\Frontend\PaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Change the default route to redirect to the user index page
Route::get('/', [UserController::class, 'index'])->name('user_index');

// ADMIN ROUTES
Route::group([
    'prefix' => 'admin', 
    'namespace' => 'Admin',
    'middleware' => 'checkadmin',
], function () {
    Route::get('/index', [AdminController::class, 'index'])->middleware(['auth'])->name('admin_index');

    // PROFILE
    Route::get('/profile', [AdminController::class, 'profile'])->middleware(['auth'])->name('admin_profile');
    Route::post('/profile', [AdminController::class, 'update'])->middleware(['auth'])->name('upload.handle');

    // CATEGORY
    Route::get('/category', [CategoryController::class, 'index'])->middleware(['auth'])->name('admin_category');
    Route::get('/category/add', [CategoryController::class, 'create'])->middleware(['auth'])->name('add.category');
    Route::post('/category/add', [CategoryController::class, 'store'])->middleware(['auth'])->name('store.category');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->middleware(['auth']);
    Route::post('/category/edit/{id}', [CategoryController::class, 'update'])->middleware(['auth']);
    Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->middleware(['auth']);

    // BLOG
    Route::get('/blog', [BlogController::class, 'index'])->middleware(['auth'])->name('admin_blog');
    Route::get('/blog/add', [BlogController::class, 'create'])->middleware(['auth']);
    Route::post('/blog/add', [BlogController::class, 'store'])->middleware(['auth'])->name('addblog.handle');
    Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->middleware(['auth']);
    Route::post('/blog/edit/{id}', [BlogController::class, 'update'])->middleware(['auth']);
    Route::get('/blog/delete/{id}', [BlogController::class, 'destroy'])->middleware(['auth']);

    // TYPE
    Route::get('/type', [TypeController::class, 'index'])->middleware(['auth'])->name('admin_type');
    Route::get('/type/add', [TypeController::class, 'create'])->middleware(['auth'])->name('add.type');
    Route::post('/type/add', [TypeController::class, 'store'])->middleware(['auth'])->name('store.type');
    Route::get('/type/edit/{id}', [TypeController::class, 'edit'])->middleware(['auth']);
    Route::post('/type/edit/{id}', [TypeController::class, 'update'])->middleware(['auth'])->name('edit.type');
    Route::get('/type/delete/{id}', [TypeController::class, 'destroy'])->middleware(['auth']);

    // PRODUCT
    Route::get('/product', [ProductController::class, 'index'])->middleware(['auth'])->name('admin_product');
    Route::get('/product/add', [ProductController::class, 'create'])->middleware(['auth'])->name('add.product');
    Route::post('/product/add', [ProductController::class, 'store'])->middleware(['auth'])->name('store.product');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->middleware(['auth']);
    Route::post('/product/edit/{id}', [ProductController::class, 'update'])->middleware(['auth'])->name('edit.product');
    Route::get('/product/delete/{id}', [ProductController::class, 'destroy'])->middleware(['auth']);
});

// USER ROUTES
Route::group([
    'prefix' => 'user', 
    'middleware' => 'checkuser',
], function () {
    // LOGIN
    Route::get('/login', [AuthenticatedSessionController::class, 'create']);
    Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('user_login_haha');
    
    // REGISTER
    Route::get('/register', [Registered_USERController::class, 'create']);
    Route::post('/user/register', [Registered_USERController::class, 'store'])->name('user_store');
});

Route::group([
    'prefix' => 'user', 
    'middleware' => 'checklogin',
], function () {
    // INDEX (this route does not require auth middleware)
    Route::get('/index', [UserController::class, 'index'])->name('user_index');

    // PROFILE
    Route::get('/profile', [UserController::class, 'profile'])->middleware(['auth']);
    Route::post('/profile', [UserController::class, 'update'])->middleware(['auth'])->name('user.update');

    // PRODUCT
    Route::get('/product', [App\Http\Controllers\Frontend\ProductController::class, 'index'])->name('user_product');
    Route::get('/product/{id}', [App\Http\Controllers\Frontend\ProductController::class, 'detail_pr']);

    // BLOG
    Route::get('/blog', [App\Http\Controllers\Frontend\BlogController::class, 'index'])->name('user_blog');
    Route::get('/blog/{id}', [App\Http\Controllers\Frontend\BlogController::class, 'detail_blog']);

    // AJAX
    Route::post('/add-to-cart', [App\Http\Controllers\Frontend\ProductController::class, 'addToCart'])->name('add.to.cart');
    Route::post('/update-cart', [App\Http\Controllers\Frontend\ProductController::class, 'updateCart']);
    Route::post('/remove-cart', [App\Http\Controllers\Frontend\ProductController::class, 'removeCart']);
    Route::post('/comment', [App\Http\Controllers\Frontend\ProductController::class, 'comment']);

    // SEARCH
    Route::get('/search', [SearchController::class, 'index']);
    Route::post('/live_search', [SearchController::class, 'liveSearch']);

    // CART
    Route::get('/cart', [App\Http\Controllers\Frontend\ProductController::class, 'cart'])->name('user_cart');
    // Route::get('/deletesession', [App\Http\Controllers\Frontend\ProductController::class, 'deleteSession']);

    // LOG OUT
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('user_logout')->middleware(['auth']);

    // EMAIL
    Route::post('email/verification-notification', [UserEmailVerificationNotificationController::class, 'store'])
                ->name('user.verification.send')->middleware(['auth']);
    Route::get('verify-email', [UserEmailVerificationPromptController::class, '__invoke'])
                ->name('user.verification.notice')->middleware(['auth']);
    Route::get('verify-email/{id}/{hash}', [UserVerifyEmailController::class, '__invoke'])
                ->name('user.verification.verify')->middleware(['auth']);

    // CHECKOUT
    Route::get('/checkout', [PaymentController::class, 'index'])->middleware(['auth']);
    Route::get('/thank', [PaymentController::class, 'thank'])->middleware(['auth']);
    Route::post('/vnpay_payment', [PaymentController::class, 'vnpay_payment'])->middleware(['auth']);
});

require __DIR__.'/auth.php';
