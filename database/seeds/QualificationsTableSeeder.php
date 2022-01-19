<?php

use App\Qualification;
use Illuminate\Database\Seeder;

class QualificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Qualification::class,10)->create();
    }
}
