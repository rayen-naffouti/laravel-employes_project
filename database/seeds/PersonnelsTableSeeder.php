<?php

use App\Personnel;
use Illuminate\Database\Seeder;

class PersonnelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Personnel::class,10)->create();
    }
}
