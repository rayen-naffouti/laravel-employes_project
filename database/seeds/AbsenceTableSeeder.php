<?php

use App\Absence;
use Illuminate\Database\Seeder;

class AbsenceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Absence::class,60)->create();
    }
}
