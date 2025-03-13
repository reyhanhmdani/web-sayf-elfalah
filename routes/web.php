<?php

use App\Http\Controllers\BlogController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class, 'index'])->name('index');

// Untuk menampilkan Semua gambar dalam satu link
Route::get('/santri/{id}/documents', function ($id) {
    $santri = Student::findOrFail($id);
    $files = is_array($santri->images) ? $santri->images : json_decode($santri->images, true);
    return view('documents', compact(   'santri', 'files'));
})->name('santri.documents');
