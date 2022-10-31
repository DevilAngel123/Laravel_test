<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', [ProductController::class,'index']);

Route::get('/products',[ProductController::class,'index']);

Route::get('/demo', function(){
    return view('products.admin.demo');
});


Route::get('getForm', function(){
    return view('postForm');
});
Route::post('postLogin',[ProductController::class,'postForm'])->name('postForm');

Route::get('uploadFile',function (){
    return view ('demo_uploadfile');
});
Route::post('postFile',[ProductController::class,'postFile']);

Route::get('createproduct', function (){
    Schema::create('product',function ($table) {
        $table ->increments('product_id');
        $table ->string('product_name');
    });
    echo "ADDed product successfully";
});

Route::get('addcolumn',function(){
    Schema:: table('product',function ($table) {
        $table ->string('product_description');
    });   
    echo "added new column";
});

Route::get('adduser',function(){
    Schema::table('user',function($table){
        $table -> integer('user_id')->unsigned();
        $table -> foreign('user_id')-> references ('user_id')->on ('product_id');
    });
    echo"added user";
});

Route::prefix('category')->group(function () {
    Route::get('/users', function () {
        // Matches The "/admin/users" URL
    });
    Route::get('/a',[CategoryController::class,'index'])->name('admin.category');
    Route::get('create',[CategoryController::class,'getCreate'])->name('admin.category.create');
    Route::post('create',[CategoryController::class,'postCreate']);
    Route::get('edit/{id}',[CategoryController::class,'getEditCate']);
    Route::post('edit/{id}',[CategoryController::class,'postEditCate']);
    Route::get('delete/{id}',[CategoryController::class,'delete']);
});
