<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuperAdmin\UserController;
use App\Http\Controllers\Admin\Peraturan\FaqController;
use App\Http\Controllers\Admin\Peraturan\SopController;
use App\Http\Controllers\Admin\Profilweb\VisiController;
use App\Http\Controllers\Admin\Profilweb\JanjiController;
use App\Http\Controllers\Admin\Publikasi\IklanController;
use App\Http\Controllers\Admin\Publikasi\VideoController;
use App\Http\Controllers\Admin\Profilweb\ProfilController;
use App\Http\Controllers\Admin\Publikasi\BeritaController;
use App\Http\Controllers\Admin\Profilweb\WilayahController;
use App\Http\Controllers\Admin\Profilweb\MaklumatController;
use App\Http\Controllers\Admin\Profilweb\StrukturController;
use App\Http\Controllers\Admin\Profilweb\KomposisiController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\Profil\ProfilwebController;
use App\Http\Controllers\Client\Profil\VisiwebController;
use App\Http\Controllers\Client\Profil\StrukturwebController;
use App\Http\Controllers\Client\Profil\KomposisiwebController;
use App\Http\Controllers\Client\Profil\WilayahwebController;
use App\Http\Controllers\Client\Profil\JanjiwebController;
use App\Http\Controllers\Client\Profil\MaklumatwebController;
use App\Http\Controllers\Client\Publikasi\BeritawebController;
use App\Http\Controllers\Client\Publikasi\VideowebController;
use App\Http\Controllers\Client\Peraturan\SopwebController;
use App\Http\Controllers\Admin\Peraturan\DirektoriController;
use App\Http\Controllers\Admin\Diagram\DiagramController;
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

// login
Route::get('login', [AuthController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('login', [AuthController::class, 'loginproses']);
Route::get('logout', [AuthController::class, 'logout']);


// Tampilan Admin
Route::prefix('data-manager')->middleware('auth')->group(function () {
    //Dashboard
    Route::get('/', [HomeController::class, 'showDashboardAdmin']);
    Route::get('dashboard-admin', [HomeController::class, 'showDashboardAdmin']);
    // Profil
    Route::get('profil', [ProfilController::class, 'index']);
    Route::get('profil/create', [ProfilController::class, 'create']);
    Route::post('profil', [ProfilController::class, 'store']);
    Route::get('profil/{profil}', [ProfilController::class, 'show']);
    Route::get('profil/{profil}/edit', [ProfilController::class, 'edit']);
    Route::put('profil/{profil}', [ProfilController::class, 'update']);
    Route::delete('profil/{profil}', [ProfilController::class, 'destroy']);

    // Berita
    Route::get('berita', [BeritaController::class, 'index']);
    Route::get('berita/create', [BeritaController::class, 'create']);
    Route::post('berita', [BeritaController::class, 'store']);
    Route::get('berita/{berita}', [BeritaController::class, 'show']);
    Route::get('berita/{berita}/edit', [BeritaController::class, 'edit']);
    Route::put('berita/{berita}', [BeritaController::class, 'update']);
    Route::delete('berita/{berita}', [BeritaController::class, 'destroy']);

    // Video
    Route::get('video', [VideoController::class, 'index']);
    Route::get('video/create', [VideoController::class, 'create']);
    Route::post('video', [VideoController::class, 'store']);
    Route::get('video/{video}', [VideoController::class, 'show']);
    Route::get('video/{video}/edit', [VideoController::class, 'edit']);
    Route::put('video/{video}', [VideoController::class, 'update']);
    Route::delete('video/{video}', [VideoController::class, 'destroy']);

    // Iklan
    Route::get('iklan', [IklanController::class, 'index']);
    Route::get('iklan/create', [IklanController::class, 'create']);
    Route::post('iklan', [IklanController::class, 'store']);
    Route::get('iklan/{iklan}', [IklanController::class, 'show']);
    Route::get('iklan/{iklan}/edit', [IklanController::class, 'edit']);
    Route::put('iklan/{iklan}', [IklanController::class, 'update']);
    Route::delete('iklan/{iklan}', [IklanController::class, 'destroy']);

    // Faqs
    Route::get('faq', [FaqController::class, 'index']);
    Route::get('faq/create', [FaqController::class, 'create']);
    Route::post('faq', [FaqController::class, 'store']);
    Route::get('faq/{faq}', [FaqController::class, 'show']);
    Route::get('faq/{faq}/edit', [FaqController::class, 'edit']);
    Route::put('faq/{faq}', [FaqController::class, 'update']);
    Route::delete('faq/{faq}', [FaqController::class, 'destroy']);

    // SOP
    Route::get('sop', [SopController::class, 'index']);
    Route::get('sop/create', [SopController::class, 'create']);
    Route::post('sop', [SopController::class, 'store']);
    Route::get('sop/{sop}', [SopController::class, 'show']);
    Route::get('sop/{sop}/edit', [SopController::class, 'edit']);
    Route::put('sop/{sop}', [SopController::class, 'update']);
    Route::delete('sop/{sop}', [SopController::class, 'destroy']);

    // Maklumat
    Route::get('maklumat', [MaklumatController::class, 'index']);
    Route::get('maklumat/create', [MaklumatController::class, 'create']);
    Route::post('maklumat', [MaklumatController::class, 'store']);
    Route::get('maklumat/{maklumat}/edit', [MaklumatController::class, 'edit']);
    Route::put('maklumat/{maklumat}', [MaklumatController::class, 'update']);
    Route::delete('maklumat/{maklumat}', [MaklumatController::class, 'destroy']);

    // Wilayah
    Route::get('wilayah', [WilayahController::class, 'index']);
    Route::get('wilayah/create', [WilayahController::class, 'create']);
    Route::post('wilayah', [WilayahController::class, 'store']);
    Route::get('wilayah/{wilayah}/edit', [WilayahController::class, 'edit']);
    Route::put('wilayah/{wilayah}', [WilayahController::class, 'update']);
    Route::delete('wilayah/{wilayah}', [WilayahController::class, 'destroy']);

    // Struktur Organisasi
    Route::get('struktur', [StrukturController::class, 'index']);
    Route::get('struktur/create', [StrukturController::class, 'create']);
    Route::post('struktur', [StrukturController::class, 'store']);
    Route::get('struktur/{struktur}', [StrukturController::class, 'show']);
    Route::get('struktur/{struktur}/edit', [StrukturController::class, 'edit']);
    Route::put('struktur/{struktur}', [StrukturController::class, 'update']);
    Route::delete('struktur/{struktur}', [StrukturController::class, 'destroy']);

    // Janji
    Route::get('janji', [JanjiController::class, 'index']);
    Route::get('janji/create', [JanjiController::class, 'create']);
    Route::post('janji', [JanjiController::class, 'store']);
    Route::get('janji/{janji}', [JanjiController::class, 'show']);
    Route::get('janji/{janji}/edit', [JanjiController::class, 'edit']);
    Route::put('janji/{janji}', [JanjiController::class, 'update']);
    Route::delete('janji/{janji}', [JanjiController::class, 'destroy']);
    // Visi
    Route::get('visi', [VisiController::class, 'index']);
    Route::get('visi/create', [VisiController::class, 'create']);
    Route::post('visi', [VisiController::class, 'store']);
    Route::get('visi/{visi}', [VisiController::class, 'show']);
    Route::get('visi/{visi}/edit', [VisiController::class, 'edit']);
    Route::put('visi/{visi}', [VisiController::class, 'update']);
    Route::delete('visi/{visi}', [VisiController::class, 'destroy']);

    // Komposisi
    Route::get('komposisi', [KomposisiController::class, 'index']);
    Route::get('komposisi/create', [KomposisiController::class, 'create']);
    Route::post('komposisi', [KomposisiController::class, 'store']);
    Route::get('komposisi/{komposisi}', [KomposisiController::class, 'show']);
    Route::get('komposisi/{komposisi}/edit', [KomposisiController::class, 'edit']);
    Route::put('komposisi/{komposisi}', [KomposisiController::class, 'update']);
    Route::delete('komposisi/{komposisi}', [KomposisiController::class, 'destroy']);

    // Diagram
    Route::get('diagram', [DiagramController::class, 'index']);
    Route::get('diagram/create', [DiagramController::class, 'create']);
    Route::post('diagram', [DiagramController::class, 'store']);
    Route::get('diagram/{diagram}', [DiagramController::class, 'show']);
    Route::get('diagram/{diagram}/edit', [DiagramController::class, 'edit']);
    Route::put('diagram/{diagram}', [DiagramController::class, 'update']);
    Route::delete('diagram/{diagram}', [DiagramController::class, 'destroy']);

    // Direktori
    Route::get('direktori', [DirektoriController::class, 'index']);
    Route::get('direktori/create', [DirektoriController::class, 'create']);
    Route::post('direktori', [DirektoriController::class, 'store']);
    Route::get('direktori/{direktori}', [DirektoriController::class, 'show']);
    Route::get('direktori/{direktori}/edit', [DirektoriController::class, 'edit']);
    Route::put('direktori/{direktori}', [DirektoriController::class, 'update']);
    Route::delete('direktori/{direktori}', [DirektoriController::class, 'destroy']);
});

// Tampilan Super Admin
Route::prefix('master-data')->middleware('auth')->group(function () {
    // Dashboard
    Route::get('/', [HomeController::class, 'showDashboardSuperAdmin']);
    Route::get('dashboard-super-admin', [HomeController::class, 'showDashboardSuperAdmin']);

    // User
    Route::get('user', [UserController::class, 'index']);
    Route::get('user/create', [UserController::class, 'create']);
    Route::post('user', [UserController::class, 'store']);
    Route::get('user/{user}', [UserController::class, 'show']);
    Route::get('user/{user}/edit', [UserController::class, 'edit']);
    Route::put('user/{user}', [UserController::class, 'update']);
    Route::delete('user/{user}', [UserController::class, 'destroy']);
});


// client
Route::get('home', [ClientController::class, 'showHome']);
Route::get('hubungi', [ContactController::class, 'showContact']);
// client profil
Route::get('profil/profil', [ProfilwebController::class, 'showProfil']);
Route::get('profil/visi', [VisiwebController::class, 'showVisi']);
Route::get('profil/struktur', [StrukturwebController::class, 'showStruktur']);
Route::get('profil/komposisi', [KomposisiwebController::class, 'showKomposisi']);
Route::get('profil/wilayah', [WilayahwebController::class, 'showWilayah']);
Route::get('profil/janji', [JanjiwebController::class, 'showJanji']);
Route::get('profil/maklumat', [MaklumatwebController::class, 'showMaklumat']);
// client berita
Route::get('publikasi/berita', [BeritawebController::class, 'showBerita']);
Route::post('berita/filter', [BeritawebController::class, 'filter']);
Route::get('publikasi/video', [VideowebController::class, 'showVideo']);
Route::get('berita/detail/{berita}', [BeritawebController::class, 'showwebBerita']);
// peraturan
Route::get('peraturan/sop', [SopwebController::class, 'showSop']);
Route::get('peraturan/faq', [SopwebController::class, 'showFaq']);
