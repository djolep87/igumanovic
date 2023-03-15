<?php


use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'PagesController@welcome');
Route::get('/kontakt', 'PagesController@kontakt');

Route::get('/about', 'PagesController@about');
// Route::get('/dokumenta', 'PagesController@dokumenta');
Route::get('/istorijat', 'PagesController@istorijat');
Route::get('/zaposleni', 'PagesController@zaposleni');
Route::get('/savet_roditelja', 'PagesController@savet_roditelja');
Route::get('/biblioteka', 'PagesController@biblioteka');
Route::get('/letopis', 'PagesController@letopis');
Route::get('/galerija', 'PagesController@galerija');
Route::get('/vesti', 'PagesController@vesti');
Route::get('/seca_reka', 'PagesController@seca_reka');
Route::get('/razana', 'PagesController@razana');
Route::get('/drenovci', 'PagesController@drenovci');
Route::get('/zarici', 'PagesController@zarici');
Route::get('/musici', 'PagesController@musici');
Route::get('/skakavci', 'PagesController@skakavci');
Route::get('/tubici', 'PagesController@tubici');
Route::get('/brajkovici', 'PagesController@brajkovici');
Route::get('/paramun', 'PagesController@paramun');
Route::get('/radanovci', 'PagesController@radanovci');
Route::get('/termini', 'PagesController@termini');

Route::get('/kalendar', 'PagesController@kalendar');
Route::get('/zvono', 'PagesController@zvono');
Route::get('/jednosmenski', 'PagesController@jednosmenski');
Route::get('/raspored', 'PagesController@raspored');
Route::get('/rasporedimr', 'PagesController@rasporedimr');
Route::get('/rasporedisr', 'PagesController@rasporedisr');
Route::get('/projektna_nastava', 'PagesController@projektna_nastava');
Route::get('/vannastavne_aktivnosti', 'PagesController@vannastavne_aktivnosti');
Route::get('/produzeni_boravak', 'PagesController@produzeni_boravak');


Route::get('/djacki_parlament', 'PagesController@djacki_parlament');
Route::get('/zavrsni_ispit', 'PagesController@zavrsni_ispit');
Route::get('/takmicenja', 'PagesController@takmicenja');
Route::get('/ucenici_generacije', 'PagesController@ucenici_generacije');
Route::get('/upis_u_srednje_skole', 'PagesController@upis_u_srednje_skole');

Route::get('/otvorena_vrata', 'PagesController@otvorena_vrata');
Route::get('/rasporedi', 'PagesController@rasporedi');
Route::get('/rasporedikosj', 'PagesController@rasporedikosj');
Route::get('/rasporedisc', 'PagesController@rasporedisc');
Route::get('/spisak_udzbenika', 'PagesController@spisak_udzbenika');
Route::get('/upis_prvaka', 'PagesController@upis_prvaka');
Route::get('/psiholog_savetuje', 'PagesController@psiholog_savetuje');
Route::get('/pedagog_savetuje', 'PagesController@pedagog_savetuje');
Route::get('/upis', 'PagesController@upis');

Route::get('/javne_nabavke', 'PagesController@javne_nabavke');
Route::get('/zanastavnike', 'PagesController@zanastavnike');
Route::get('/skolska_dokumenta', 'PagesController@skolska_dokumenta');
Route::get('/skolski_timovi', 'PagesController@skolski_timovi');




Route::resource('/dashboard', 'DashboardController');

Route::get('/admin.letopis', 'LetopisController@index');
Route::get('/admin.letopis.create', 'LetopisController@create');
Route::post('/admin.letopis.store', 'LetopisController@store');
Route::get('/admin.letopis.show/{id}', 'LetopisController@show');
Route::get('/admin.letopis.edit/{id}', 'LetopisController@edit');
Route::put('/admin.letopis/{posts}', 'LetopisController@update');
Route::delete('/admin.letopis.destroy/{id}', 'LetopisController@destroy');
Route::post('/upload', 'LetopisController@uploadImage')->name('upload');

Route::get('/admin.galerija', 'GalerijaController@index');
Route::get('/admin.galerija.create', 'GalerijaController@create');
Route::post('/admin.galerija.store', 'GalerijaController@store');
Route::delete('/admin.galerija.destroy/{id}', 'GalerijaController@destroy');



Route::get('/admin.vesti', 'VestiController@index');
Route::get('/admin.vesti.create', 'VestiController@create');
Route::post('/admin.vesti.store', 'VestiController@store');
Route::get('/admin.vesti.show/{id}', 'VestiController@show');
Route::get('/admin.vesti.edit/{id}', 'VestiController@edit');
Route::put('/admin.vesti/{posts}', 'VestiController@update');
Route::delete('/admin.vesti.destroy/{id}', 'VestiController@destroy');
Route::post('/upload', 'VestiController@uploadImage')->name('upload');


Route::get('/admin.takmicenja', 'TakmicenjaController@index');
Route::get('/admin.takmicenja.create', 'TakmicenjaController@create');
Route::post('/admin.takmicenja.store', 'TakmicenjaController@store');
Route::get('/admin.takmicenja.show/{id}', 'TakmicenjaController@show');
Route::get('/admin.takmicenja.edit/{id}', 'TakmicenjaController@edit');
Route::put('/admin.takmicenja/{posts}', 'TakmicenjaController@update');
Route::delete('/admin.takmicenja.destroy/{id}', 'TakmicenjaController@destroy');
Route::post('/upload', 'TakmicenjaController@uploadImage')->name('upload');


Route::get('/admin.upis_prvaka', 'UpisPrvakaController@index');
Route::get('/admin.upis_prvaka.create', 'UpisPrvakaController@create');
Route::post('/admin.upis_prvaka.store', 'UpisPrvakaController@store');
Route::get('/admin.upis_prvaka.show/{id}', 'UpisPrvakaController@show');
Route::get('/admin.upis_prvaka.edit/{id}', 'UpisPrvakaController@edit');
Route::put('/admin.upis_prvaka/{posts}', 'UpisPrvakaController@update');
Route::delete('/admin.upis_prvaka.destroy/{id}', 'UpisPrvakaController@destroy');
Route::post('/upload', 'UpisPrvakaController@uploadImage')->name('upload');


Route::get('/admin.zavrsni_ispit', 'ZavrsniIspitController@index');
Route::get('/admin.zavrsni_ispit.create', 'ZavrsniIspitController@create');
Route::post('/admin.zavrsni_ispit.store', 'ZavrsniIspitController@store');
Route::get('/admin.zavrsni_ispit.show/{id}', 'ZavrsniIspitController@show');
Route::get('/admin.zavrsni_ispit.edit/{id}', 'ZavrsniIspitController@edit');
Route::put('/admin.zavrsni_ispit/{posts}', 'ZavrsniIspitController@update');
Route::delete('/admin.zavrsni_ispit.destroy/{id}', 'ZavrsniIspitController@destroy');
Route::post('/upload', 'ZavrsniIspitController@uploadImage')->name('upload');


Route::get('/admin.ucenici_generacija', 'UceniciGeneracijaController@index');
Route::get('/admin.ucenici_generacija.create', 'UceniciGeneracijaController@create');
Route::post('/admin.ucenici_generacija.store', 'UceniciGeneracijaController@store');
Route::get('/admin.ucenici_generacija.show/{id}', 'UceniciGeneracijaController@show');
Route::get('/admin.ucenici_generacija.edit/{id}', 'UceniciGeneracijaController@edit');
Route::put('/admin.ucenici_generacija/{posts}', 'UceniciGeneracijaController@update');
Route::delete('/admin.ucenici_generacija.destroy/{id}', 'UceniciGeneracijaController@destroy');
Route::post('/upload', 'UceniciGeneracijaController@uploadImage')->name('upload');


Route::get('/admin.psiholog', 'PsihologController@index');
Route::get('/admin.psiholog.create', 'PsihologController@create');
Route::post('/admin.psiholog.store', 'PsihologController@store');
Route::get('/admin.psiholog.show/{id}', 'PsihologController@show');
Route::get('/admin.psiholog.edit/{id}', 'PsihologController@edit');
Route::put('/admin.psiholog/{posts}', 'PsihologController@update');
Route::delete('/admin.psiholog.destroy/{id}', 'PsihologController@destroy');
Route::post('/upload', 'PsihologController@uploadImage')->name('upload');


Route::get('/admin.pedagog', 'PedagogController@index');
Route::get('/admin.pedagog.create', 'PedagogController@create');
Route::post('/admin.pedagog.store', 'PedagogController@store');
Route::get('/admin.pedagog.show/{id}', 'PedagogController@show');
Route::get('/admin.pedagog.edit/{id}', 'PedagogController@edit');
Route::put('/admin.pedagog/{posts}', 'PedagogController@update');
Route::delete('/admin.pedagog.destroy/{id}', 'PedagogController@destroy');
Route::post('/upload', 'PedagogController@uploadImage')->name('upload');

Route::get('/admin.seca_reka', 'SecaRekaController@index');
Route::get('/admin.seca_reka.create', 'SecaRekaController@create');
Route::post('/admin.seca_reka.store', 'SecaRekaController@store');
Route::get('/admin.seca_reka.show/{id}', 'SecaRekaController@show');
Route::get('/admin.seca_reka.edit/{id}', 'SecaRekaController@edit');
Route::put('/admin.seca_reka/{posts}', 'SecaRekaController@update');
Route::delete('/admin.seca_reka.destroy/{id}', 'SecaRekaController@destroy');
Route::post('/upload', 'SecaRekaController@uploadImage')->name('upload');

Route::get('/admin.razana', 'RazanaController@index');
Route::get('/admin.razana.create', 'RazanaController@create');
Route::post('/admin.razana.store', 'RazanaController@store');
Route::get('/admin.razana.show/{id}', 'RazanaController@show');
Route::get('/admin.razana.edit/{id}', 'RazanaController@edit');
Route::put('/admin.razana/{posts}', 'RazanaController@update');
Route::delete('/admin.razana.destroy/{id}', 'RazanaController@destroy');
Route::post('/upload', 'RazanaController@uploadImage')->name('upload');

Route::get('/admin.drenovci', 'DrenovciController@index');
Route::get('/admin.drenovci.create', 'DrenovciController@create');
Route::post('/admin.drenovci.store', 'DrenovciController@store');
Route::get('/admin.drenovci.show/{id}', 'DrenovciController@show');
Route::get('/admin.drenovci.edit/{id}', 'DrenovciController@edit');
Route::put('/admin.drenovci/{posts}', 'DrenovciController@update');
Route::delete('/admin.drenovci.destroy/{id}', 'DrenovciController@destroy');
Route::post('/upload', 'DrenovciController@uploadImage')->name('upload');

Route::get('/admin.zarici', 'ZariciController@index');
Route::get('/admin.zarici.create', 'ZariciController@create');
Route::post('/admin.zarici.store', 'ZariciController@store');
Route::get('/admin.zarici.show/{id}', 'ZariciController@show');
Route::get('/admin.zarici.edit/{id}', 'ZariciController@edit');
Route::put('/admin.zarici/{posts}', 'ZariciController@update');
Route::delete('/admin.zarici.destroy/{id}', 'ZariciController@destroy');
Route::post('/upload', 'ZariciController@uploadImage')->name('upload');

Route::get('/admin.musici', 'MusiciController@index');
Route::get('/admin.musici.create', 'MusiciController@create');
Route::post('/admin.musici.store', 'MusiciController@store');
Route::get('/admin.musici.show/{id}', 'MusiciController@show');
Route::get('/admin.musici.edit/{id}', 'MusiciController@edit');
Route::put('/admin.musici/{posts}', 'MusiciController@update');
Route::delete('/admin.musici.destroy/{id}', 'MusiciController@destroy');
Route::post('/upload', 'MusiciController@uploadImage')->name('upload');

Route::get('/admin.skakavci', 'SkakavciController@index');
Route::get('/admin.skakavci.create', 'SkakavciController@create');
Route::post('/admin.skakavci.store', 'SkakavciController@store');
Route::get('/admin.skakavci.show/{id}', 'SkakavciController@show');
Route::get('/admin.skakavci.edit/{id}', 'SkakavciController@edit');
Route::put('/admin.skakavci/{posts}', 'SkakavciController@update');
Route::delete('/admin.skakavci.destroy/{id}', 'SkakavciController@destroy');
Route::post('/upload', 'SkakavciController@uploadImage')->name('upload');

Route::get('/admin.tubici', 'TubiciController@index');
Route::get('/admin.tubici.create', 'TubiciController@create');
Route::post('/admin.tubici.store', 'TubiciController@store');
Route::get('/admin.tubici.show/{id}', 'TubiciController@show');
Route::get('/admin.tubici.edit/{id}', 'TubiciController@edit');
Route::put('/admin.tubici/{posts}', 'TubiciController@update');
Route::delete('/admin.tubici.destroy/{id}', 'TubiciController@destroy');
Route::post('/upload', 'TubiciController@uploadImage')->name('upload');

Route::get('/admin.brajkovici', 'BrajkoviciController@index');
Route::get('/admin.brajkovici.create', 'BrajkoviciController@create');
Route::post('/admin.brajkovici.store', 'BrajkoviciController@store');
Route::get('/admin.brajkovici.show/{id}', 'BrajkoviciController@show');
Route::get('/admin.brajkovici.edit/{id}', 'BrajkoviciController@edit');
Route::put('/admin.brajkovici/{posts}', 'BrajkoviciController@update');
Route::delete('/admin.brajkovici.destroy/{id}', 'BrajkoviciController@destroy');
Route::post('/upload', 'BrajkoviciController@uploadImage')->name('upload');

Route::get('/admin.paramun', 'ParamunController@index');
Route::get('/admin.paramun.create', 'ParamunController@create');
Route::post('/admin.paramun.store', 'ParamunController@store');
Route::get('/admin.paramun.show/{id}', 'ParamunController@show');
Route::get('/admin.paramun.edit/{id}', 'ParamunController@edit');
Route::put('/admin.paramun/{posts}', 'ParamunController@update');
Route::delete('/admin.paramun.destroy/{id}', 'ParamunController@destroy');
Route::post('/upload', 'ParamunController@uploadImage')->name('upload');

Route::get('/admin.radanovci', 'RadanovciController@index');
Route::get('/admin.radanovci.create', 'RadanovciController@create');
Route::post('/admin.radanovci.store', 'RadanovciController@store');
Route::get('/admin.radanovci.show/{id}', 'RadanovciController@show');
Route::get('/admin.radanovci.edit/{id}', 'RadanovciController@edit');
Route::put('/admin.radanovci/{posts}', 'RadanovciController@update');
Route::delete('/admin.radanovci.destroy/{id}', 'RadanovciController@destroy');
Route::post('/upload', 'RadanovciController@uploadImage')->name('upload');

Route::get('/admin.projektna_nastava', 'ProjektnaNastavaController@index');
Route::get('/admin.projektna_nastava.create', 'ProjektnaNastavaController@create');
Route::post('/admin.projektna_nastava.store', 'ProjektnaNastavaController@store');
Route::get('/admin.projektna_nastava.show/{id}', 'ProjektnaNastavaController@show');
Route::get('/admin.projektna_nastava.edit/{id}', 'ProjektnaNastavaController@edit');
Route::put('/admin.projektna_nastava/{posts}', 'ProjektnaNastavaController@update');
Route::delete('/admin.projektna_nastava.destroy/{id}', 'ProjektnaNastavaController@destroy');
Route::post('/upload', 'ProjektnaNastavaController@uploadImage')->name('upload');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
