<?php
use App\Http\Controllers\DataTrainingController;
use App\Http\Controllers\DataUjiController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DataTrainingController::class, 'index']);
Route::get('/data/training', [DataTrainingController::class, 'TampilanTraining'])->name('view.training');
Route::get('/add/training', [DataTrainingController::class, 'AddTraining'])->name('training.add_data');

Route::post('/store/training', [DataTrainingController::class, 'StoredataTraining'])->name('store.data_training');

Route::get('/DataUji', [DataUjiController::class, 'index'])->name('data-uji.index');
Route::post('/DataUji/hitung', [DataUjiController::class, 'hitung']);
Route::get('/tes', function(){
    return "oke";
});
// Route::post('/DataUji/hitung', [DataUjiController::class, 'validation_form'])->name('data-uji-cuaca.hitung');

