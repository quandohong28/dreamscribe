<?php

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
    return view('pages.hello');
});

Route::get('/logout', function () {
    return view('shared.login');
})->name('auth.logout');

Route::get('/login', function () {
    return view('shared.login');
})->name('auth.login');

Route::get('/register', function () {
    return view('shared.register');
})->name('auth.register');

Route::get('/forgot', function () {
    return view('shared.forgotPassword');
})->name('auth.forgot');

Route::get('/lock', function () {
    return view('shared.lock');
})->name('auth.lock');

Route::get('/invoice', function () {
    return view('shared.invoice');
});

Route::prefix('/admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::prefix('/books')->group(function () {
        Route::get('/', function () {
            return view('admin.books.list');
        })->name('book.list');

        Route::get('/add', function () {
            return 'edit book';
        })->name('book.add');

        Route::post('/add', function () {
            return 'edit book';
        })->name('book.add');

        Route::get('/{id}', function ($id) {
            return $id;
        })->name('book.edit');

        Route::get('/edit/{id}', function ($id) {
            return $id;
        })->name('book.edit');

        Route::put('/edit/{id}', function ($id) {
            return $id;
        })->name('book.edit');

        Route::delete('/delete/{id}', function ($id) {
            return $id;
        })->name('book.delete');
    });

    Route::prefix('/category')->group(function () {
        Route::get('/list', function () {
            return view('admin.categories.list');
        })->name('category.list');
    });

    Route::prefix('/author')->group(function () {
        Route::get('/list', function () {
            return 123;
        })->name('author.list');
    });

    Route::prefix('/country')->group(function () {
        Route::get('/list', function () {
            return 123;
        })->name('country.list');
    });

    Route::prefix('/rank')->group(function () {
        Route::get('/list', function () {
            return 123;
        })->name('rank.list');
    });

    Route::prefix('/currency')->group(function () {
        Route::get('/list', function () {
            return 123;
        })->name('currency.list');
    });

    Route::prefix('/wallet')->group(function () {
        Route::get('/list', function () {
            return 123;
        })->name('wallet.list');
    });

    Route::prefix('/voucher')->group(function () {
        Route::get('/list', function () {
            return 123;
        })->name('voucher.list');
    });

    Route::prefix('/invoice')->group(function () {
        Route::get('/list', function () {
            return 123;
        })->name('invoice.list');
    });

    Route::get('/users', function () {
        return view('admin.users.list');
    })->name('user.list');

    Route::get('/profile', function () {
        return view('admin.profile');
    })->name('admin.profile');

    Route::get('/feedback', function () {
        return view('admin.feedback');
    })->name('admin.feedback');

    Route::get('/setting', function () {
        return view('admin.setting');
    })->name('admin.setting');
});
