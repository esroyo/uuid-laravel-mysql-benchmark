<?php

use Illuminate\Database\Seeder;

class TuserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Tuser::class, 10000)->create();
    }
}
