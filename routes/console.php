<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('ashik', function () {
    $this->comment('Ashik khan');
})->describe('Display an inspiring quote');

Artisan::command('khan', function (){
    $this->comment('Welcome to new artisan command');
});
