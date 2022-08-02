<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\InvitedController;
use App\Models\Event;
use App\Models\Invited;
use App\Models\Response as InviRes;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Doctrine\DBAL\Events;

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
    return "Are you lost?";
});

Route::get('/dashboard', function () {
    $events = \App\Models\Event::withCount('invited', 'invitedGoing')

        ->where('created_by', auth()->id())->get();
    return Inertia::render('Dashboard', [
        'events' => $events
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::resource('events', EventController::class);
    Route::resource('invite', InvitedController::class);
});
Route::get('invitation/{invited:code}', function (Invited $invited) {
    $event = Event::with('invited')->find($invited->event_id);
    return Inertia::render('invite/Invitation', ['code' => $invited, 'event' => $event]);
});
require __DIR__ . '/auth.php';
