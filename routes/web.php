<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanKeuanganController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\SpreadsheetController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\FinancialController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;



// ============================
// Rute Halaman Publik
// ============================
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/news', [NewsController::class, 'indexPublic'])->name('news.public');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/donation', function () {
    return view('donation');
});

Route::get('/events', function () {
    return view('events');
})->name('events');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/index', function () {
    return view('index');
});

// ============================
// Rute Halaman Admin
// ============================

Route::get('/admin2', function () {
    return view('admin2.home');
});

// ============================
// Rute Keuangan
// ============================
Route::get('/keuangan', [LaporanKeuanganController::class, 'index'])->name('keuangan.index');
Route::get('/keuangan/create', [LaporanKeuanganController::class, 'create'])->name('keuangan.create');
Route::resource('keuangan', LaporanKeuanganController::class);

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/keuangan', [LaporanKeuanganController::class, 'index'])->name('admin.keuangan.index');
});

// ============================
// Rute Berita (News)
// ============================
Route::prefix('admin')->group(function () {
    Route::resource('news', NewsController::class)->names([
        'index' => 'admin.news.index',
        'create' => 'admin.news.create',
        'store' => 'admin.news.store',
        'edit' => 'admin.news.edit',
        'update' => 'admin.news.update',
        'destroy' => 'admin.news.destroy',
    ]);
});

// ============================
// Rute Anggota (Members) dan Kategori (Category)
// ============================
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('members', MemberController::class);
});

Route::get('/admin/members', [MemberController::class, 'index'])->name('admin.members.index');

// ============================
// Rute Struktur Organisasi
// ============================
Route::get('/struktur', [StrukturController::class, 'index'])->name('struktur.index');


// ============================
// RUTE MANAJEMEN MAHASISWA
// ============================

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
    Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
    Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
    Route::get('/mahasiswa/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
    Route::put('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
    Route::delete('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');

    // ✅ Perbaikan rute updateStatus (gunakan POST, tanpa "/admin" di dalam URL)
    Route::post('/mahasiswa/update-status', [MahasiswaController::class, 'updateStatus'])
        ->name('mahasiswa.updateStatus');

    // Kirim data ke Admin 2
    Route::patch('/mahasiswa/{id}/kirim', [MahasiswaController::class, 'kirimKeAdmin2'])->name('mahasiswa.kirim');
});

// ============================
// ADMIN 2 - Verifikasi Mahasiswa
// ============================

Route::prefix('admin2')->name('admin2.')->group(function () {
    Route::get('/mahasiswa/verifikasi', [MahasiswaController::class, 'verifikasi'])->name('mahasiswa.index');
    Route::patch('/mahasiswa/{mahasiswa}/approve', [MahasiswaController::class, 'approve'])->name('mahasiswa.approve');
    Route::patch('/mahasiswa/{mahasiswa}/reject', [MahasiswaController::class, 'reject'])->name('mahasiswa.reject');
});

// spreadset
Route::get('/spreadsheet',
[SpreadsheetController::class, 'index'])->name('spreadsheet.index');


Route::get('/admin/payments', [PaymentController::class, 'index'])->name('admin.payments.index');
Route::post('/admin/payments', [PaymentController::class, 'store'])->name('admin.payments.store');
Route::get('/admin/pembayaran', [PaymentController::class, 'index'])->name('admin.payments.index');
Route::post('/admin/payments/import', [PaymentController::class, 'importFromSheet'])->name('payments.import');


Route::get('/admin/keuangan', [FinancialController::class, 'index'])->name('admin.financial.index');
Route::get('/admin/keuangan/create', [FinancialController::class, 'create'])->name('admin.financial.create');
Route::post('/admin/keuangan', [FinancialController::class, 'store'])->name('admin.financial.store');
Route::get('/admin/keuangan/{id}/edit', [FinancialController::class, 'edit'])->name('admin.financial.edit');
Route::put('/admin/keuangan/{id}', [FinancialController::class, 'update'])->name('admin.financial.update');
Route::delete('/admin/keuangan/{id}', [FinancialController::class, 'destroy'])->name('admin.financial.destroy');

Route::get('/transparansi-keuangan', [App\Http\Controllers\FinancialController::class, 'userIndex'])->name('transparansi');


// ============================
// Rute LOGIN
// ============================

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/custom-login', [AuthController::class, 'login'])->name('custom.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/logout', function () {
    session()->forget('user');
    return redirect('/');
});
