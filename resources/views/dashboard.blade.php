->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');