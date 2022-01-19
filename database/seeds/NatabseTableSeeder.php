<?php

use App\Natabse;
use Illuminate\Database\Seeder;

class NatabseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Natabse::class,10)->create();
    }
}
