<?php

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

<?php

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
    $titolo = "Home";
    $sottotitolo = "Benvenuti";
    return view('pages.layout',compact('titolo','sottotitolo'));
});

Route::get('/chi-siamo', function () {
    $titolo = "Chi Siamo";
    $sottotitolo = "scopri chi siamo";
    return view('pages.layout',compact('titolo','sottotitolo'));
});

Route::get('/dettaglio-servizi', function () {
    $titolo = "I nostri servizi";
    $sottotitolo = "clicca e vedi i nostri servizi";
    return view('pages.layout',compact('titolo','sottotitolo'));
});

Route::get('/dettaglio-servizi', function () {

    $servizi = [
       1=> [
            'id'=>1,
            'service' => 'Servizio 1',
            'txt' => 'Testo Servizio 1'
        ],
       2=> [
            'id'=>2,
            'service' => 'Servizio 2',
            'txt' => 'Testo Servizio 2'
        ],
       3=> [
            'id'=>3,
            'service' => 'Servizio 3',
            'txt' => 'Testo Servizio 3'
        ]
    ];
    

return view('nostriServizi',compact('servizi'));
})->name('servizi');

Route::get('/servizio/{id}', function ($id) {

    $servizi = [
       1=> [
            'service' => 'Servizio 1',
            'txt' => 'Testo Servizio 1'
        ],
       2=> [
            'service' => 'Servizio 2',
            'txt' => 'Testo Servizio 2'
        ],
       3=> [
            'service' => 'Servizio 3',
            'txt' => 'Testo Servizio 3'
        ]
    ];
    


if(array_key_exists($id,$servizi)){
    $servizio = $servizi[$id];
    return view('servizio',compact('servizio'));
 }else{
    abort(404); 
 }
})->name('servizio');