<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin as ADMIN;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [ADMIN\DashboardController::class, "index"])->name('dashboard');

        // jabatan
    Route::get('/jabatan', [ADMIN\PositionController::class, 'index'])->name('position.index');
    Route::get('/jabatan/create', [ADMIN\PositionController::class, "create"])->name('position.create');
    Route::post('/jabatan/store', [ADMIN\PositionController::class, "store"])->name('position.store');
    Route::delete('/jabatan/delete/{id}', [ADMIN\PositionController::class, "delete"])->name('position.delete');
    Route::get('/jabatan/edit/{id}', [ADMIN\PositionController::class, "edit"])->name('position.edit');
    
    // karyawan
    Route::get('/karyawan', [ADMIN\EmployeeController::class, 'index'])->name('employees.index');
    Route::get('/karyawan/create', [ADMIN\EmployeeController::class, "create"])->name('employees.create');
    Route::post('/karyawan/store', [ADMIN\EmployeeController::class, "store"])->name('employees.store');
    Route::delete('/karyawan/delete/{id}', [ADMIN\EmployeeController::class, "delete"])->name('employees.delete');
    Route::get('/karyawan/edit/{id}', [ADMIN\EmployeeController::class, "edit"])->name('employees.edit');
    
    // genre
    Route::get('/genre', [ADMIN\GenresController::class, 'index'])->name('genres.index');
    Route::get('/genre/create', [ADMIN\GenresController::class, "create"])->name('genres.create');
    Route::post('/genre/store', [ADMIN\GenresController::class, "store"])->name('genres.store');
    Route::delete('/genre/delete/{id}', [ADMIN\GenresController::class, "delete"])->name('genres.delete');
    Route::get('/genre/edit/{id}', [ADMIN\GenresController::class, "edit"])->name('genres.edit');
    
    // Buku
    Route::get('/books', [ADMIN\BooksController::class, 'index'])->name('books.index');
    Route::get('/books/create', [ADMIN\BooksController::class, "create"])->name('books.create');
    Route::post('/books/store', [ADMIN\BooksController::class, "store"])->name('books.store');
    Route::delete('/books/delete/{id}', [ADMIN\BooksController::class, "delete"])->name('books.delete');
    Route::get('/books/edit/{id}', [ADMIN\BooksController::class, "edit"])->name('books.edit');
    
    // Member
    Route::get('/members', [ADMIN\MembersController::class, 'index'])->name('members.index');
    Route::get('/members/create', [ADMIN\MembersController::class, "create"])->name('members.create');
    Route::post('/members/store', [ADMIN\MembersController::class, "store"])->name('members.store');
    Route::delete('/members/delete/{id}', [ADMIN\MembersController::class, "delete"])->name('members.delete');
    Route::get('/members/edit/{id}', [ADMIN\MembersController::class, "edit"])->name('members.edit');
    
    // Users
    Route::get('/users', [ADMIN\UsersController::class, 'index'])->name('users.index');
    Route::get('/users/create', [ADMIN\UsersController::class, "create"])->name('users.create');
    Route::post('/users/store', [ADMIN\UsersController::class, "store"])->name('users.store');
    Route::delete('/users/delete/{id}', [ADMIN\UsersController::class, "delete"])->name('users.delete');
    Route::get('/users/edit/{id}', [ADMIN\UsersController::class, "edit"])->name('users.edit');
});

// Route::prefix('/dashboard')->group(function () {
//     // jabatan
//     Route::get('/jabatan', [ADMIN\PositionController::class, 'index'])->name('position.index');
//     Route::get('/jabatan/create', [ADMIN\PositionController::class, "create"])->name('position.create');
//     Route::post('/jabatan/store', [ADMIN\PositionController::class, "store"])->name('position.store');
//     Route::delete('/jabatan/delete/{id}', [ADMIN\PositionController::class, "delete"])->name('position.delete');
//     Route::get('/jabatan/edit/{id}', [ADMIN\PositionController::class, "edit"])->name('position.edit');

//     // karyawan
//     Route::get('/karyawan', [ADMIN\EmployeeController::class, 'index'])->name('employees.index');
//     Route::get('/karyawan/create', [ADMIN\EmployeeController::class, "create"])->name('employees.create');
//     Route::post('/karyawan/store', [ADMIN\EmployeeController::class, "store"])->name('employees.store');
//     Route::delete('/karyawan/delete/{id}', [ADMIN\EmployeeController::class, "delete"])->name('employees.delete');
//     Route::get('/karyawan/edit/{id}', [ADMIN\EmployeeController::class, "edit"])->name('employees.edit');

//     // genre
//     Route::get('/genre', [ADMIN\GenresController::class, 'index'])->name('genres.index');
//     Route::get('/genre/create', [ADMIN\GenresController::class, "create"])->name('genres.create');
//     Route::post('/genre/store', [ADMIN\GenresController::class, "store"])->name('genres.store');
//     Route::delete('/genre/delete/{id}', [ADMIN\GenresController::class, "delete"])->name('genres.delete');
//     Route::get('/genre/edit/{id}', [ADMIN\GenresController::class, "edit"])->name('genres.edit');

//     // Buku
//     Route::get('/books', [ADMIN\BooksController::class, 'index'])->name('books.index');
//     Route::get('/books/create', [ADMIN\BooksController::class, "create"])->name('books.create');
//     Route::post('/books/store', [ADMIN\BooksController::class, "store"])->name('books.store');
//     Route::delete('/books/delete/{id}', [ADMIN\BooksController::class, "delete"])->name('books.delete');
//     Route::get('/books/edit/{id}', [ADMIN\BooksController::class, "edit"])->name('books.edit');

//     // Member
//     Route::get('/members', [ADMIN\MembersController::class, 'index'])->name('members.index');
//     Route::get('/members/create', [ADMIN\MembersController::class, "create"])->name('members.create')->middleware('auth', 'admin');
//     Route::post('/members/store', [ADMIN\MembersController::class, "store"])->name('members.store')->middleware('auth', 'admin');
//     Route::delete('/members/delete/{id}', [ADMIN\MembersController::class, "delete"])->name('members.delete')->middleware('auth', 'admin');
//     Route::get('/members/edit/{id}', [ADMIN\MembersController::class, "edit"])->name('members.edit')->middleware('auth', 'admin');

//     // Users
//     Route::get('/users', [ADMIN\UsersController::class, 'index'])->name('users.index');
//     Route::get('/users/create', [ADMIN\UsersController::class, "create"])->name('users.create');
//     Route::post('/users/store', [ADMIN\UsersController::class, "store"])->name('users.store');
//     Route::delete('/users/delete/{id}', [ADMIN\UsersController::class, "delete"])->name('users.delete');
//     Route::get('/users/edit/{id}', [ADMIN\UsersController::class, "edit"])->name('users.edit');
// });



require __DIR__.'/auth.php';
