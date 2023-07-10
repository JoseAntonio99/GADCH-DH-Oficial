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
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// to Views for the Sistem //

Route::resource('chartjs', 'App\Http\Controllers\ChartJSController');

Route::resource('flot', 'App\Http\Controllers\FlotController');

Route::resource('inline', 'App\Http\Controllers\InlineController');

Route::resource('uplot', 'App\Http\Controllers\UplotController');

Route::resource('calendar', 'App\Http\Controllers\CalendarController');

Route::resource('mailbox', 'App\Http\Controllers\MailBoxController');

Route::resource('compose', 'App\Http\Controllers\ComposeController');

Route::resource('read-mail', 'App\Http\Controllers\ReadMailController');

Route::resource('invoice', 'App\Http\Controllers\InvoiceController');

Route::resource('invoice-print', 'App\Http\Controllers\InvoicePrintController');

Route::resource('contacts', 'App\Http\Controllers\ContactsController');

Route::resource('faq', 'App\Http\Controllers\FAQController');

Route::resource('contact-us', 'App\Http\Controllers\ContactUsController');

Route::resource('simple', 'App\Http\Controllers\SimpleController');

Route::resource('simple-results', 'App\Http\Controllers\SimpleResultsController');

Route::resource('enhanced', 'App\Http\Controllers\EnhancedController');

Route::resource('enhanced-results', 'App\Http\Controllers\EnhancedResultsController');

// to CRUD for Files //

Route::resource('crhcrtcrhych8drntl', 'App\Http\Controllers\AceroHuacaretaCarahuaychu8DOrientalController');

Route::resource('cntrtcncnsltgrsgfscptrlr', 'App\Http\Controllers\ContratacionConsultoresGeofisicoPetroleroController');

Route::resource('cntrtcnscnsltrsprdcccln', 'App\Http\Controllers\ContratacionesConsultoresProduccionLineaController');

Route::resource('cnvnvrs', 'App\Http\Controllers\ConveniosVariosController');

Route::resource('dhdcmntcncmpmrgrthcy', 'App\Http\Controllers\DHDocumentacionCampoMargaritaHuacayaController');

Route::resource('dheafdcmpmrgrthcy', 'App\Http\Controllers\DHEAFDCampoMargaritaHuacayaController');

Route::resource('dctrypfbntsnfrms', 'App\Http\Controllers\DirectorioYPFBNotasInformesController');

Route::resource('dcmntcnprsntcns', 'App\Http\Controllers\DocumentacionPresentacionesController');

Route::resource('dcmntsrspldmrgrthcy', 'App\Http\Controllers\DocumentosRespaldoMargaritaHuacayaController');

Route::resource('mtds', 'App\Http\Controllers\EmitidasController');

Route::resource('stdcnts', 'App\Http\Controllers\EstadoCuentasController');

Route::resource('gsdctpntcmrg', 'App\Http\Controllers\GasoductoPuenteCamargoController');

Route::resource('idhiehd', 'App\Http\Controllers\IDHIEHDController');

Route::resource('nfrmcmpsprdctrs', 'App\Http\Controllers\InformeCamposProductoresController');

Route::resource('lyssctrhdrcrbrfrrg', 'App\Http\Controllers\LeyesSectorHidrocarburiferoEnergiaController');

Route::resource('prctcsndstrls', 'App\Http\Controllers\PracticasIndustrialesController');

Route::resource('rcbsd', 'App\Http\Controllers\RecibidasController');

Route::resource('rcbdsxtrns', 'App\Http\Controllers\RecibidasExternasController');

Route::resource('rcbdsntrns', 'App\Http\Controllers\RecibidasInternasController');

Route::resource('rgls', 'App\Http\Controllers\RegaliasController');

Route::resource('rprtsprdccn', 'App\Http\Controllers\ReportesProduccionController');

Route::resource('rslcnmnstrlcmpsmrgrthcy', 'App\Http\Controllers\ResolucionMinisterialCamposMargaritaHuacayaController');

Route::resource('rtrctvrgls', 'App\Http\Controllers\RetroactivoRegaliasController');

Route::resource('tcepboe1ro2docrpcmpnchsq', 'App\Http\Controllers\TCEPBOE1ro2doCuerpoCampoIncahuasiAquioController');

Route::resource('tcepboe3ro4tocrpcmpnchsq', 'App\Http\Controllers\TCEPBOE3ro4toCuerpoCampoIncahuasiAquioController');

Route::resource('tcepboe5to6tocrpcmpnchsq', 'App\Http\Controllers\TCEPBOE5to6toCuerpoCampoIncahuasiAquioController');

Route::resource('tcepboe7mo8vocrpcmpnchsq', 'App\Http\Controllers\TCEPBOE7mo8voCuerpoCampoIncahuasiAquioController');

Route::resource('tcepboe9no10mocrpcmpnchsq', 'App\Http\Controllers\TCEPBOE9no10moCuerpoCampoIncahuasiAquioController');

Route::resource('vrs', 'App\Http\Controllers\VariosController');
