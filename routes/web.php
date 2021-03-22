<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\StudentPostController;
use App\Http\Controllers\viewController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});




//crud
Route::get('/Edit/{id}',[viewController::class,'editStudentData']);
Route::post('/addRecord',[StudentPostController::class,'submit'])->name('StudentPostController.submit');
Route::get('/addRecord',[viewController::class,'AddRecord']);
Route::get('/Delete/{id}',[StudentPostController::class,'deleteRecord'])->name('StudentPostController.deleteRecord');
Route::post('/update',[StudentPostController::class,'updateRecord'])->name('StudentPostController.updateRecord');
//crud end


//Ajax CRUD

// Resource Route for article.
Route::resource('articles', ArticleController::class);
// Route for get articles for yajra post request.
Route::get('get-articles', [ArticleController::class, 'getArticles'])->name('get-articles');


//Ajax Crud End

//test
Route::get('/ajax',function() {
    return view('test');
 });
 Route::post('/getmsg',[AjaxController::class,'index']);


//test end



Route::get('/index',[viewController::class,'index']);

Route::get('/charts',[viewController::class,'charts']);
Route::get('/tables',[viewController::class,'tables']);
Route::get('/staticLayout',[viewController::class,'layoutStatic']);
Route::get('/lightLayout',[viewController::class,'layoutSideNavLight']);
Route::get('/401',[viewController::class,'Unauthorized_401']);
Route::get('/404',[viewController::class,'Not_Found_404']);
Route::get('/500',[viewController::class,'Internal_Server_Error_500']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
