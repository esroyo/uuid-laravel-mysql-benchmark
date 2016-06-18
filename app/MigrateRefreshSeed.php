<?php

namespace App;

use Artisan;

require_once __DIR__ . '/../bootstrap/app.php';

class MigrateRefreshSeed
{
    public function generateUsers()
    {
        Artisan::call('migrate:refresh');
        Artisan::call('db:seed', ['--class' => 'UserTableSeeder']);
    }

    public function generateTusers()
    {
        Artisan::call('migrate:refresh');
        Artisan::call('db:seed', ['--class' => 'TuserTableSeeder']);
    }
}
