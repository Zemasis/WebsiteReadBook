<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Models\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\BookListController;

Route::get('/', function () {
    return redirect()->route('homepage.index');
});


//Lấy dữ liệu
Route::get('/homepage', [HomepageController::class, 'index'])->name('homepage.index');

Route::post('/auth/register', [AuthController::class, 'store'])->name('register');

// Router Admin
Route::get('/Admin',function(){
    return view('Admin', ['section' => 'dashboard']);
})->name('Admin');

//Get info book
Route::get('/Admin/ListBook', [BookListController::class, 'index' ])->name('BookList.index');

Route::get('/Admin/ListBook/{id}', [BookListController::class, 'edit'])->name('BookList.edit');

Route::get('/Admin/{section}', function ($section,Request $request) {
    $stateCRUD =$request->query('stateCRUD','default');
    return view('Admin', ['section' => $section,'stateCRUD' => $stateCRUD]);
});



//////////////
Route::post('/books', [BookController::class, 'store'])->name('books.store');

//Put info book to update
Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');

//Delete book
Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('books.destroy');

// Show book detail
Route::get('/Admin/BookDetail/{id}', [BookController::class, 'show'])->name('BookDetail.show');


// Route::get('/homepage/BookDetail', function(){
//     return view('homepage.BookDetail');
// })->name('BookDetail.show');

// Route::get('/homepage/BookDetail/{id}', [BookListController::class, 'show'])->name('BookDetail.show');


Route::get('/AdminCarvan',function(){
    return view('Admin1');
})->name('AdminCarvan');
