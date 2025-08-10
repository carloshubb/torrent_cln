<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;
Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
// Schedule the command to fetch external data daily at 03:00 in Moscow
Schedule::command('app:fetch-external-data-daily')->dailyAt('03:00')->timezone('Europe/Moscow');