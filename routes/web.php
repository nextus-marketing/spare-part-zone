<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\EditorImageController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'Frontend.home')->name('home');

Route::view('/home', 'Frontend.home-1')->name('home-1');
//this is for lead page
Route::view('/thankyou-lead', 'Frontend.thankyou-lead')->name('thankyou-lead');

Route::view('/about', 'Frontend.about')->name('about');

Route::view('/contact', 'Frontend.contact')->name('contact');
//this is for common
Route::view('/thankyou', 'Frontend.thankyou')->name('thankyou');

Route::view('/privacy-policy', 'Frontend.privacy-policy')->name('privacy-policy');

Route::view('/shipping-policy', 'Frontend.shipping-policy')->name('shipping-policy');

Route::view('/terms-and-condition', 'Frontend.terms-and-condition')->name('terms-and-condition');

Route::view('/return-policy', 'Frontend.return-policy')->name('return-policy');

Route::view('/used-carparts', 'Frontend.used-carparts')->name('used-carparts');

Route::view('/used-auto-parts', 'Frontend.used-auto-parts')->name('used-auto-parts');

Route::view('/used-parts', 'Frontend.used-parts')->name('used-parts');

Route::view('/used-vehicle-parts', 'Frontend.used-vehicle-parts')->name('used-vehicle-parts');

Route::view('/premium-auto-parts', 'Frontend.premium-auto-parts')->name('premium-auto-parts');

//this is for used-carparts
Route::view('/thank-you', 'Frontend.thank-you')->name('thank-you');

//this is for used-auto-parts
Route::view('/thankyou-success', 'Frontend.thankyou-success')->name('thank-you');

Route::view('/carparts-shipping-policy', 'Frontend.carparts-shipping-policy')->name('carparts-shipping-policy');

Route::view('/carparts-return-policy', 'Frontend.carparts-return-policy')->name('carparts-return-policy');

Route::view('/used-carparts/autoparts', 'Frontend.autoparts')->name('/used-carparts/autoparts');


// NewAutoParts
Route::view('/used-carparts/car-engine', 'Frontend.NewAutoParts.car-engine')->name('/used-carparts/car-engine');

Route::view('/used-carparts/car-cylinder-head', 'Frontend.NewAutoParts.car-cylinder-head')->name('/used-carparts/car-cylinder-head');

Route::view('/used-carparts/car-camshaft', 'Frontend.NewAutoParts.car-camshaft')->name('/used-carparts/car-camshaft');

Route::view('/used-carparts/car-supercharger', 'Frontend.NewAutoParts.car-supercharger')->name('/used-carparts/car-supercharger');

Route::view('/used-carparts/car-turbocharger', 'Frontend.NewAutoParts.car-turbocharger')->name('/used-carparts/car-turbocharger');

Route::view('/used-carparts/car-intake-manifold', 'Frontend.NewAutoParts.car-intake-manifold')->name('/used-carparts/car-intake-manifold');

Route::view('/used-carparts/car-exhaust-manifold', 'Frontend.NewAutoParts.car-exhaust-manifold')->name('/used-carparts/car-exhaust-manifold');

Route::view('/used-carparts/car-throttle-body', 'Frontend.NewAutoParts.car-throttle-body')->name('/used-carparts/car-throttle-body');
//
Route::view('/used-carparts/car-engine-mount', 'Frontend.NewAutoParts.car-engine-mount')->name('/used-carparts/car-engine-mount');

Route::view('/used-carparts/car-valve-cover', 'Frontend.NewAutoParts.car-valve-cover')->name('/used-carparts/car-valve-cover');

Route::view('/used-carparts/car-fuel-pump', 'Frontend.NewAutoParts.car-fuel-pump')->name('/used-carparts/car-fuel-pump');

Route::view('/used-carparts/car-coolant-pump', 'Frontend.NewAutoParts.car-coolant-pump')->name('/used-carparts/car-coolant-pump');

Route::view('/used-carparts/car-radiator', 'Frontend.NewAutoParts.car-radiator')->name('/used-carparts/car-radiator');

Route::view('/used-carparts/car-vacuum-pump', 'Frontend.NewAutoParts.car-vacuum-pump')->name('/used-carparts/car-vacuum-pump');

Route::view('/used-carparts/car-catalytic-converter', 'Frontend.NewAutoParts.car-catalytic-converter')->name('/used-carparts/car-catalytic-converter');
//
Route::view('/used-carparts/car-transmission', 'Frontend.NewAutoParts.car-transmission')->name('/used-carparts/car-transmission');

Route::view('/used-carparts/car-drive-shaft', 'Frontend.NewAutoParts.car-drive-shaft')->name('/used-carparts/car-drive-shaft');

Route::view('/used-carparts/car-axle-shaft', 'Frontend.NewAutoParts.car-axle-shaft')->name('/used-carparts/car-axle-shaft');

Route::view('/used-carparts/car-floor-shifter', 'Frontend.NewAutoParts.car-floor-shifter')->name('/used-carparts/car-floor-shifter');

Route::view('/used-carparts/car-cradle', 'Frontend.NewAutoParts.car-cradle')->name('/used-carparts/car-cradle');

Route::view('/used-carparts/car-crossmember', 'Frontend.NewAutoParts.car-crossmember')->name('/used-carparts/car-crossmember');

Route::view('/used-carparts/car-subframe', 'Frontend.NewAutoParts.car-subframe')->name('/used-carparts/car-subframe');
//
Route::view('/used-carparts/car-shock-absorber', 'Frontend.NewAutoParts.car-shock-absorber')->name('/used-carparts/car-shock-absorber');


Route::view('/used-carparts/car-rack-pinion', 'Frontend.NewAutoParts.car-rack-pinion')->name('/used-carparts/car-rack-pinion');

Route::view('/used-carparts/car-control-arms', 'Frontend.NewAutoParts.car-control-arms')->name('/used-carparts/car-control-arms');

Route::view('/used-carparts/car-braker-caliper-rotors', 'Frontend.NewAutoParts.car-braker-caliper-rotors')->name('/used-carparts/car-braker-caliper-rotors');

Route::view('/used-carparts/car-power-steering-pump', 'Frontend.NewAutoParts.car-power-steering-pump')->name('/used-carparts/car-power-steering-pump');

Route::view('/used-carparts/car-steering-column', 'Frontend.NewAutoParts.car-steering-column')->name('/used-carparts/car-steering-column');

Route::view('/used-carparts/car-strut', 'Frontend.NewAutoParts.car-strut')->name('/used-carparts/car-strut');

Route::view('/used-carparts/car-ac-compressor', 'Frontend.NewAutoParts.car-ac-compressor')->name('/used-carparts/car-ac-compressor');

Route::view('/used-carparts/car-ac-condenser', 'Frontend.NewAutoParts.car-ac-condenser')->name('/used-carparts/car-ac-condenser');

Route::view('/used-carparts/car-blower-motor', 'Frontend.NewAutoParts.car-blower-motor')->name('/used-carparts/car-blower-motor');

Route::view('/used-carparts/car-ac-heater-control-system', 'Frontend.NewAutoParts.car-ac-heater-control-system')->name('/used-carparts/car-ac-heater-control-system');
//

Route::view('/used-carparts/car-alternator', 'Frontend.NewAutoParts.car-alternator')->name('/used-carparts/car-alternator');

Route::view('/used-carparts/car-starter', 'Frontend.NewAutoParts.car-starter')->name('/used-carparts/car-starter');

Route::view('/used-carparts/car-ignition-switch', 'Frontend.NewAutoParts.car-ignition-switch')->name('/used-carparts/car-ignition-switch');

Route::view('/used-carparts/car-fuse-box', 'Frontend.NewAutoParts.car-fuse-box')->name('/used-carparts/car-fuse-box');

Route::view('/used-carparts/car-instrument-cluster', 'Frontend.NewAutoParts.car-instrument-cluster')->name('/used-carparts/car-instrument-cluster');

Route::view('/used-carparts/car-wiper-motor', 'Frontend.NewAutoParts.car-wiper-motor')->name('/used-carparts/car-wiper-motor');

Route::view('/used-carparts/car-window-motor-regulator', 'Frontend.NewAutoParts.car-window-motor-regulator')->name('/used-carparts/car-window-motor-regulator');

Route::view('/used-carparts/car-cd-player-radio', 'Frontend.NewAutoParts.car-cd-player-radio')->name('/used-carparts/car-cd-player-radio');

Route::view('/used-carparts/car-tail-light', 'Frontend.NewAutoParts.car-tail-light')->name('/used-carparts/car-tail-light');

Route::view('/used-carparts/car-headlight', 'Frontend.NewAutoParts.car-headlight')->name('/used-carparts/car-headlight');

Route::view('/used-carparts/car-fog-lamps', 'Frontend.NewAutoParts.car-fog-lamps')->name('/used-carparts/car-fog-lamps');

Route::view('/used-carparts/car-abs-unit', 'Frontend.NewAutoParts.car-abs-unit')->name('/used-carparts/car-abs-unit');
//

Route::view('/used-carparts/car-bumpers', 'Frontend.NewAutoParts.car-bumpers')->name('/used-carparts/car-bumpers');

Route::view('/used-carparts/car-fenders', 'Frontend.NewAutoParts.car-fenders')->name('/used-carparts/car-fenders');

Route::view('/used-carparts/car-hood', 'Frontend.NewAutoParts.car-hood')->name('/used-carparts/car-hood');

Route::view('/used-carparts/car-doors', 'Frontend.NewAutoParts.car-doors')->name('/used-carparts/car-doors');

Route::view('/used-carparts/car-mirrors', 'Frontend.NewAutoParts.car-mirrors')->name('/used-carparts/car-mirrors');

Route::view('/used-carparts/car-grilles', 'Frontend.NewAutoParts.car-grilles')->name('/used-carparts/car-grilles');

Route::view('/used-carparts/car-fender-flare', 'Frontend.NewAutoParts.car-fender-flare')->name('/used-carparts/car-fender-flare');

Route::view('/used-carparts/car-wheel-hub', 'Frontend.NewAutoParts.car-wheel-hub')->name('/used-carparts/car-wheel-hub');

Route::view('/used-carparts/car-wheel-rim', 'Frontend.NewAutoParts.car-wheel-rim')->name('/used-carparts/car-wheel-rim');
//////
Route::view('/used-carparts/car-seats', 'Frontend.NewAutoParts.car-seats')->name('/used-carparts/car-seats');

Route::view('/used-carparts/car-seat-belts', 'Frontend.NewAutoParts.car-seat-belts')->name('/used-carparts/car-seat-belts');

Route::view('/used-carparts/car-center-console', 'Frontend.NewAutoParts.car-center-console')->name('/used-carparts/car-center-console');

Route::view('/used-carparts/car-sun-visor', 'Frontend.NewAutoParts.car-sun-visor')->name('/used-carparts/car-sun-visor');

Route::view('/used-carparts/car-air-bag', 'Frontend.NewAutoParts.car-air-bag')->name('/used-carparts/car-air-bag');

Route::view('/used-carparts/car-steering', 'Frontend.NewAutoParts.car-steering')->name('/used-carparts/car-steering');


// Usedcarparts
Route::view('/used-carparts/engine', 'Frontend.Usedcarparts.engine')->name('/used-carparts/engine');

Route::view('/used-carparts/cylinder-head', 'Frontend.Usedcarparts.cylinder-head')->name('/used-carparts/cylinder-head');

Route::view('/used-carparts/camshaft', 'Frontend.Usedcarparts.camshaft')->name('/used-carparts/camshaft');

Route::view('/used-carparts/supercharger', 'Frontend.Usedcarparts.supercharger')->name('/used-carparts/supercharger');

Route::view('/used-carparts/turbocharger', 'Frontend.Usedcarparts.turbocharger')->name('/used-carparts/turbocharger');

Route::view('/used-carparts/intake-manifold', 'Frontend.Usedcarparts.intake-manifold')->name('/used-carparts/intake-manifold');

Route::view('/used-carparts/exhaust-manifold', 'Frontend.Usedcarparts.exhaust-manifold')->name('/used-carparts/exhaust-manifold');

Route::view('/used-carparts/throttle-body', 'Frontend.Usedcarparts.throttle-body')->name('/used-carparts/throttle-body');

Route::view('/used-carparts/engine-mount', 'Frontend.Usedcarparts.engine-mount')->name('/used-carparts/engine-mount');

Route::view('/used-carparts/valve-cover', 'Frontend.Usedcarparts.valve-cover')->name('/used-carparts/valve-cover');

Route::view('/used-carparts/fuel-pump', 'Frontend.Usedcarparts.fuel-pump')->name('/used-carparts/fuel-pump');

Route::view('/used-carparts/coolant-pump', 'Frontend.Usedcarparts.coolant-pump')->name('/used-carparts/coolant-pump');

Route::view('/used-carparts/radiator', 'Frontend.Usedcarparts.radiator')->name('/used-carparts/radiator');

Route::view('/used-carparts/vacuum-pump', 'Frontend.Usedcarparts.vacuum-pump')->name('/used-carparts/vacuum-pump');

Route::view('/used-carparts/catalytic-converter', 'Frontend.Usedcarparts.catalytic-converter')->name('/used-carparts/catalytic-converter');

Route::view('/used-carparts/transmission', 'Frontend.Usedcarparts.transmission')->name('/used-carparts/transmission');

Route::view('/used-carparts/drive-shaft', 'Frontend.Usedcarparts.drive-shaft')->name('/used-carparts/drive-shaft');

Route::view('/used-carparts/axle-shaft', 'Frontend.Usedcarparts.axle-shaft')->name('/used-carparts/axle-shaft');

Route::view('/used-carparts/floor-shifter', 'Frontend.Usedcarparts.floor-shifter')->name('/used-carparts/floor-shifter');

Route::view('/used-carparts/cradle', 'Frontend.Usedcarparts.cradle')->name('/used-carparts/cradle');

Route::view('/used-carparts/crossmember', 'Frontend.Usedcarparts.crossmember')->name('/used-carparts/crossmember');

Route::view('/used-carparts/subframe', 'Frontend.Usedcarparts.subframe')->name('/used-carparts/subframe');

Route::view('/used-carparts/shock-absorber', 'Frontend.Usedcarparts.shock-absorber')->name('/used-carparts/shock-absorber');

Route::view('/used-carparts/rack-pinion', 'Frontend.Usedcarparts.rack-pinion')->name('/used-carparts/rack-pinion');

Route::view('/used-carparts/control-arms', 'Frontend.Usedcarparts.control-arms')->name('/used-carparts/control-arms');

Route::view('/used-carparts/braker-caliper-rotors', 'Frontend.Usedcarparts.braker-caliper-rotors')->name('/used-carparts/braker-caliper-rotors');

Route::view('/used-carparts/power-steering-pump', 'Frontend.Usedcarparts.power-steering-pump')->name('/used-carparts/power-steering-pump');

Route::view('/used-carparts/steering-column', 'Frontend.Usedcarparts.steering-column')->name('/used-carparts/steering-column');

Route::view('/used-carparts/strut', 'Frontend.Usedcarparts.strut')->name('/used-carparts/strut');

Route::view('/used-carparts/ac-compressor', 'Frontend.Usedcarparts.ac-compressor')->name('/used-carparts/ac-compressor');

Route::view('/used-carparts/ac-condenser', 'Frontend.Usedcarparts.ac-condenser')->name('/used-carparts/ac-condenser');

Route::view('/used-carparts/blower-motor', 'Frontend.Usedcarparts.blower-motor')->name('/used-carparts/blower-motor');

Route::view('/used-carparts/ac-heater-control-system', 'Frontend.Usedcarparts.ac-heater-control-system')->name('/used-carparts/ac-heater-control-system');
///////
Route::view('/used-carparts/alternator', 'Frontend.Usedcarparts.alternator')->name('/used-carparts/alternator');

Route::view('/used-carparts/starter', 'Frontend.Usedcarparts.starter')->name('/used-carparts/starter');

Route::view('/used-carparts/ignition-switch', 'Frontend.Usedcarparts.ignition-switch')->name('/used-carparts/ignition-switch');

Route::view('/used-carparts/fuse-box', 'Frontend.Usedcarparts.fuse-box')->name('/used-carparts/fuse-box');

Route::view('/used-carparts/instrument-cluster', 'Frontend.Usedcarparts.instrument-cluster')->name('/used-carparts/instrument-cluster');

Route::view('/used-carparts/wiper-motor', 'Frontend.Usedcarparts.wiper-motor')->name('/used-carparts/wiper-motor');

Route::view('/used-carparts/window-motor-regulator', 'Frontend.Usedcarparts.window-motor-regulator')->name('/used-carparts/window-motor-regulator');

Route::view('/used-carparts/cd-player-radio', 'Frontend.Usedcarparts.cd-player-radio')->name('/used-carparts/cd-player-radio');

Route::view('/used-carparts/tail-light', 'Frontend.Usedcarparts.tail-light')->name('/used-carparts/tail-light');

Route::view('/used-carparts/headlight', 'Frontend.Usedcarparts.headlight')->name('/used-carparts/headlight');

Route::view('/used-carparts/fog-lamps', 'Frontend.Usedcarparts.fog-lamps')->name('/used-carparts/fog-lamps');

Route::view('/used-carparts/abs-unit', 'Frontend.Usedcarparts.abs-unit')->name('/used-carparts/abs-unit');
///////
Route::view('/used-carparts/bumper', 'Frontend.Usedcarparts.bumper')->name('/used-carparts/bumper');

Route::view('/used-carparts/fenders', 'Frontend.Usedcarparts.fenders')->name('/used-carparts/fenders');

Route::view('/used-carparts/hood', 'Frontend.Usedcarparts.hood')->name('/used-carparts/hood');

Route::view('/used-carparts/doors', 'Frontend.Usedcarparts.doors')->name('/used-carparts/doors');

Route::view('/used-carparts/mirrors', 'Frontend.Usedcarparts.mirrors')->name('/used-carparts/mirrors');

Route::view('/used-carparts/grilles', 'Frontend.Usedcarparts.grilles')->name('/used-carparts/grilles');

Route::view('/used-carparts/fender-flare', 'Frontend.Usedcarparts.fender-flare')->name('/used-carparts/fender-flare');

Route::view('/used-carparts/wheel-hub', 'Frontend.Usedcarparts.wheel-hub')->name('/used-carparts/wheel-hub');

Route::view('/used-carparts/wheel-rim', 'Frontend.Usedcarparts.wheel-rim')->name('/used-carparts/wheel-rim');
///////
Route::view('/used-carparts/seats', 'Frontend.Usedcarparts.seats')->name('/used-carparts/seats');

Route::view('/used-carparts/seat-belts', 'Frontend.Usedcarparts.seat-belts')->name('/used-carparts/seat-belts');

Route::view('/used-carparts/center-console', 'Frontend.Usedcarparts.center-console')->name('/used-carparts/center-console');

Route::view('/used-carparts/sun-visor', 'Frontend.Usedcarparts.sun-visor')->name('/used-carparts/sun-visor');

Route::view('/used-carparts/air-bag', 'Frontend.Usedcarparts.air-bag')->name('/used-carparts/air-bag');

Route::view('/used-carparts/steering', 'Frontend.Usedcarparts.steering')->name('/used-carparts/steering');

// Auto Parts route


Route::view('/engine-parts/engine', 'Frontend.AutoParts.engine')->name('/engine-parts/engine');

Route::view('/engine-parts/cylinder-head', 'Frontend.AutoParts.cylinder-head')->name('/engine-parts/cylinder-head');

Route::view('/engine-parts/camshaft', 'Frontend.AutoParts.camshaft')->name('/engine-parts/camshaft');

Route::view('/engine-parts/turbocharger', 'Frontend.AutoParts.turbocharger')->name('/engine-parts/turbocharger');

Route::view('/engine-parts/supercharger', 'Frontend.AutoParts.supercharger')->name('/engine-parts/supercharger');

Route::view('/engine-parts/intake-manifold', 'Frontend.AutoParts.intake-manifold')->name('/engine-parts/intake-manifold');

Route::view('/engine-parts/exhaust-manifold', 'Frontend.AutoParts.exhaust-manifold')->name('/engine-parts/exhaust-manifold');

Route::view('/engine-parts/throttle-body', 'Frontend.AutoParts.throttle-body')->name('/engine-parts/throttle-body');

Route::view('/engine-parts/engine-mount', 'Frontend.AutoParts.engine-mount')->name('/engine-parts/engine-mount');

Route::view('/engine-parts/valve-cover', 'Frontend.AutoParts.valve-cover')->name('/engine-parts/valve-cover');

Route::view('/engine-parts/fuel-pump', 'Frontend.AutoParts.fuel-pump')->name('/engine-parts/fuel-pump');

Route::view('/engine-parts/coolant-pump', 'Frontend.AutoParts.coolant-pump')->name('/engine-parts/coolant-pump');

Route::view('/engine-parts/radiator', 'Frontend.AutoParts.radiator')->name('/engine-parts/radiator');

Route::view('/engine-parts/vacuum-pump', 'Frontend.AutoParts.vacuum-pump')->name('/engine-parts/vacuum-pump');

Route::view('/engine-parts/catalytic-converter', 'Frontend.AutoParts.catalytic-converter')->name('/engine-parts/catalytic-converter');

// Transmission

Route::view('/transmission-parts/transmission', 'Frontend.Transmission.transmission')->name('/transmission-parts/transmission');

Route::view('/transmission-parts/drive-shaft', 'Frontend.Transmission.drive-shaft')->name('/transmission-parts/drive-shaft');

Route::view('/transmission-parts/axle-shaft', 'Frontend.Transmission.axle-shaft')->name('/transmission-parts/axle-shaft');

Route::view('/transmission-parts/floor-shifter', 'Frontend.Transmission.floor-shifter')->name('/transmission-parts/floor-shifter');

Route::view('/transmission-parts/cradle', 'Frontend.Transmission.cradle')->name('/transmission-parts/cradle');

Route::view('/transmission-parts/crossmember', 'Frontend.Transmission.crossmember')->name('/transmission-parts/crossmember');

Route::view('/transmission-parts/subframe', 'Frontend.Transmission.subframe')->name('/transmission-parts/subframe');

//Suspension

Route::view('/suspension-parts/shock-absorber', 'Frontend.Suspension.shock-absorber')->name('/suspension-parts/shock-absorber');

Route::view('/suspension-parts/rack-pinion', 'Frontend.Suspension.rack-pinion')->name('/suspension-parts/rack-pinion');

Route::view('/suspension-parts/control-arms', 'Frontend.Suspension.control-arms')->name('/suspension-parts/control-arms');

Route::view('/suspension-parts/braker-caliper-rotors', 'Frontend.Suspension.braker-caliper-rotors')->name('/suspension-parts/braker-caliper-rotors');

Route::view('/suspension-parts/power-steering-pump', 'Frontend.Suspension.power-steering-pump')->name('/suspension-parts/power-steering-pump');

Route::view('/suspension-parts/steering-column', 'Frontend.Suspension.steering-column')->name('/suspension-parts/steering-column');

Route::view('/suspension-parts/strut', 'Frontend.Suspension.strut')->name('/suspension-parts/strut');

Route::view('/suspension-parts/ac-compressor', 'Frontend.Suspension.ac-compressor')->name('/suspension-parts/ac-compressor');

Route::view('/suspension-parts/ac-condenser', 'Frontend.Suspension.ac-condenser')->name('/suspension-parts/ac-condenser');

Route::view('/suspension-parts/blower-motor', 'Frontend.Suspension.blower-motor')->name('/suspension-parts/blower-motor');

Route::view('/suspension-parts/ac-heater-control-system', 'Frontend.Suspension.ac-heater-control-system')->name('/suspension-parts/ac-heater-control-system');


//Electrical

Route::view('/electrical-parts/alternator', 'Frontend.Electrical.alternator')->name('/electrical-parts/alternator');

Route::view('/electrical-parts/starter', 'Frontend.Electrical.starter')->name('/electrical-parts/starter');

Route::view('/electrical-parts/ignition-switch', 'Frontend.Electrical.ignition-switch')->name('/electrical-parts/ignition-switch');

Route::view('/electrical-parts/fuse-box', 'Frontend.Electrical.fuse-box')->name('fuse-box');

Route::view('/electrical-parts/instrument-cluster', 'Frontend.Electrical.instrument-cluster')->name('/electrical-parts/instrument-cluster');

Route::view('/electrical-parts/wiper-motor', 'Frontend.Electrical.wiper-motor')->name('/electrical-parts/wiper-motor');

Route::view('/electrical-parts/window-motor-regulator', 'Frontend.Electrical.window-motor-regulator')->name('/electrical-parts/window-motor-regulator');

Route::view('/electrical-parts/cd-player-radio', 'Frontend.Electrical.cd-player-radio')->name('/electrical-parts/cd-player-radio');

Route::view('/electrical-parts/tail-light', 'Frontend.Electrical.tail-light')->name('/electrical-parts/tail-light');

Route::view('/electrical-parts/headlight', 'Frontend.Electrical.headlight')->name('/electrical-parts/headlight');

Route::view('/electrical-parts/fog-lamps', 'Frontend.Electrical.fog-lamps')->name('/electrical-parts/fog-lamps');

Route::view('/electrical-parts/abs-unit', 'Frontend.Electrical.abs-unit')->name('/electrical-parts/abs-unit');


//Exterior

Route::view('/exterior-parts/bumpers', 'Frontend.Exterior.bumpers')->name('/exterior-parts/bumpers');

Route::view('/exterior-parts/fenders', 'Frontend.Exterior.fenders')->name('/exterior-parts/fenders');

Route::view('/exterior-parts/hood', 'Frontend.Exterior.hood')->name('/exterior-parts/hood');

Route::view('/exterior-parts/doors', 'Frontend.Exterior.doors')->name('/exterior-parts/doors');

Route::view('/exterior-parts/mirrors', 'Frontend.Exterior.mirrors')->name('/exterior-parts/mirrors');

Route::view('/exterior-parts/grilles', 'Frontend.Exterior.grilles')->name('/exterior-parts/grilles');

Route::view('/exterior-parts/fender-flare', 'Frontend.Exterior.fender-flare')->name('/exterior-parts/fender-flare');

Route::view('/exterior-parts/wheel-rim', 'Frontend.Exterior.wheel-rim')->name('/exterior-parts/wheel-rim');

Route::view('/exterior-parts/wheel-hub', 'Frontend.Exterior.wheel-hub')->name('/exterior-parts/wheel-hub');

//Interior

Route::view('/interior-parts/seats', 'Frontend.Interior.seats')->name('/interior-parts/seats');

Route::view('/interior-parts/seat-belts', 'Frontend.Interior.seat-belts')->name('/interior-parts/seat-belts');

Route::view('/interior-parts/center-console', 'Frontend.Interior.center-console')->name('/interior-parts/center-console');

Route::view('/interior-parts/sun-visor', 'Frontend.Interior.sun-visor')->name('/interior-parts/sun-visor');

Route::view('/interior-parts/air-bag', 'Frontend.Interior.air-bag')->name('/interior-parts/air-bag');

Route::view('/interior-parts/steering', 'Frontend.Interior.steering')->name('/interior-parts/steering');

//Categories

Route::view('/engine-parts', 'Frontend.Categories.engine-parts')->name('engine-parts');

Route::view('/transmission-parts', 'Frontend.Categories.transmission-parts')->name('transmission-parts');

Route::view('/suspension-parts', 'Frontend.Categories.suspension-parts')->name('suspension-parts');

Route::view('/electrical-parts', 'Frontend.Categories.electrical-parts')->name('electrical-parts');

Route::view('/exterior-parts', 'Frontend.Categories.exterior-parts')->name('exterior-parts');

Route::view('/interior-parts', 'Frontend.Categories.interior-parts')->name('interior-parts');


Route::fallback(function () {
    return response()->view('Error.404', [], 404);
});


Route::post('/editor-image-upload', [EditorImageController::class, 'upload'])
    ->name('editor.image.upload');


require __DIR__ . '/auth.php';
require __DIR__ . '/backend.php';
require __DIR__ . '/frontend.php';
