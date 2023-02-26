<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\{
    DashboardController,
    CategoryController,
    BrandController,
    ColorController,
    ProductController,
    BlogController,
    SliderController,
    AdController,
    CartController,
    CouponController,
    OrderController,
    SettingController,


};
use App\Http\Controllers\frontend\{
    HomeController,
    checkoutControlle,
    OrderControlle,
};

use App\Http\Controllers\AuthController;

// Login Register











// Frontend

Route::get("/",[HomeController::class,"HomePageShow"])->name("home-page");
Route::get("/cart",[CartController::class,"CartPageShow"])->name("cart-page");
// cart Item delete
Route::get("/cart/delete/{id}",[CartController::class,"cartItemDelete"])->name("cart.item.delete");
Route::get("/shop",[HomeController::class,"ShopPageShow"])->name("shop-page");
// Fetch Category Shop
Route::get("/categories/products/{slug}",[HomeController::class,"categoriesProducts"])->name("categories.products");
// Checkout
Route::get("/checkout",[checkoutControlle::class,"checkoutPageShow"])->name("checkout-page");
// place order
Route::post("/place-order",[OrderControlle::class,"placeOrder"])->name("place.order");
Route::get("/order-succss",[OrderControlle::class,"orderSuccess"])->name("order.success");

// payment Amar Pay
Route::post('/success',[OrderControlle::class,"success"])->name('success');
Route::post('/fail',[OrderControlle::class,"fail"])->name('fail');

// backernd order
Route::get("/order/list",[OrderController::class,"index"])->name("order.index");

Route::get("/products/{slug}",[HomeController::class,"singleProductPage"])->name("single-page");
Route::get("/wishlist",[HomeController::class,"wishlistPage"])->name("wishlist-page");
// User Login
Route::get("/login",[AuthController::class,"userLogin"])->name("user.login")->middleware("guest");
Route::post("/login",[AuthController::class,"userLoginStore"])->name("user.login.store");
// User Register
Route::get("/register",[AuthController::class,"userRegister"])->name("user.register")->middleware("guest");
Route::post("/register",[AuthController::class,"userRegisterStore"])->name("user.register.store");
Route::get("/registration/verify/{token}/{email}",[AuthController::class,"userRegisterverify"])->name("user.register.verify");
// Forgot Password
Route::get("/forgot-password",[AuthController::class,"userForgotPass"])->name("user.forgot.password")->middleware("guest");
Route::post("/forgot-user-password",[AuthController::class,"userForgotPassStore"])->name("user.forgot.password.store")->middleware("guest");
Route::get("/reset-password/{token}/{email}",[AuthController::class,"userResetPassword"])->name("user.reset.password")->middleware("guest");
Route::post("/user-reset-pass-store",[AuthController::class,"userResetPasswordStore"])->name("user.reset.password.store")->middleware("guest");
// User Account
Route::get("/user-logout",[AuthController::class,"userLogout"])->name("user.logout")->middleware("auth");
Route::get("/account",[AuthController::class,"userAcoount"])->name("user.account")->middleware("auth");

Route::post("/add-to-cart/{product_id}",[CartController::class,"addToCart"])->name("add-to-cart");

// Coupon Apply
Route::post("/coupon-apply",[CartController::class,"couponApply"])->name("coupon.apply");
Route::get("/coupon-distry",[CartController::class,"couponDistroy"])->name("coupon.distroy");


// Blog
Route::get("/blogs",[BlogController::class,"blogPageShow"])->name("blog.page");
Route::get("/blogs/{slug}",[BlogController::class,"singleBlogPageShow"])->name("single.blog");



// Backend
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('admin');
    Route::get("/admin-logout",[AuthController::class,"userLogout"])->name("admin.logout")->middleware("admin");
    // Category
    Route::prefix('category')->group(function () {
        Route::get('/index', [CategoryController::class, 'index'])->name('category.index');
        Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/edit/{slug}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::post('/update/{slug}', [CategoryController::class, 'update'])->name('category.update');
        Route::get('/delete/{slug}', [CategoryController::class, 'delete'])->name('category.delete');
    });
    // Brand
    Route::prefix('brand')->group(function () {
        Route::get('/index', [BrandController::class, 'index'])->name('brand.index');
        Route::post('/store', [BrandController::class, 'store'])->name('brand.store');
        Route::get('/edit/{slug}', [BrandController::class, 'edit'])->name('brand.edit');
        Route::post('/update/{slug}', [BrandController::class, 'update'])->name('brand.update');
        Route::get('/delete/{slug}', [BrandController::class, 'delete'])->name('brand.delete');
    });
    // Color
    Route::prefix('color')->group(function () {
        Route::get('/index', [ColorController::class, 'index'])->name('color.index');
        Route::post('/store', [ColorController::class, 'store'])->name('color.store');
        Route::get('/edit/{slug}', [ColorController::class, 'edit'])->name('color.edit');
        Route::post('/update/{slug}', [ColorController::class, 'update'])->name('color.update');
        Route::get('/delete/{slug}', [ColorController::class, 'delete'])->name('color.delete');
    });
    // Product
    Route::prefix('product')->group(function () {
        Route::get('/index', [ProductController::class, 'index'])->name('product.index');
        Route::get('/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/store', [ProductController::class, 'store'])->name('product.store');
        Route::get('/edit/{slug}', [ProductController::class, 'edit'])->name('product.edit');
        Route::post('/update/{slug}', [ProductController::class, 'update'])->name('product.update');
        Route::get('/delete/{slug}', [ProductController::class, 'delete'])->name('product.delete');
    });
    // Blogs
    Route::prefix('blog')->group(function () {
        Route::get('/index', [BlogController::class, 'index'])->name('blog.index');
        Route::post('/store', [BlogController::class, 'store'])->name('blog.store');
        Route::get('/edit/{slug}', [BlogController::class, 'edit'])->name('blog.edit');
        Route::post('/update/{slug}', [BlogController::class, 'update'])->name('blog.update');
        Route::get('/delete/{slug}', [BlogController::class, 'delete'])->name('blog.delete');
    });
    // slider
    Route::prefix('slider')->group(function () {
        Route::get('/index', [SliderController::class, 'index'])->name('slider.index');
        Route::post('/store', [SliderController::class, 'store'])->name('slider.store');
        Route::get('/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
        Route::post('/update/{id}', [SliderController::class, 'update'])->name('slider.update');
        Route::get('/delete/{id}', [SliderController::class, 'delete'])->name('slider.delete');
    });
    // Ads
    Route::prefix('ads')->group(function () {
        Route::get('/index', [AdController::class, 'index'])->name('ads.index');
        Route::post('/store', [AdController::class, 'store'])->name('ads.store');
        Route::get('/edit/{id}', [AdController::class, 'edit'])->name('ads.edit');
        Route::post('/update/{id}', [AdController::class, 'update'])->name('ads.update');
        Route::get('/delete/{id}', [AdController::class, 'delete'])->name('ads.delete');
    });
    // coupon
    Route::prefix('coupon')->group(function () {
        Route::get('/index', [CouponController::class, 'index'])->name('coupon.index');
        Route::post('/store', [CouponController::class, 'store'])->name('coupon.store');
        Route::get('/edit/{id}', [CouponController::class, 'edit'])->name('coupon.edit');
        Route::post('/update/{id}', [CouponController::class, 'update'])->name('coupon.update');
        Route::get('/delete/{id}', [CouponController::class, 'delete'])->name('coupon.delete');
    });

    // settings
    Route::get('/settings/index',[SettingController::class,'index'])->name('settings.index');
    Route::post('/settings/update',[SettingController::class,'update'])->name('settings.update');
});




