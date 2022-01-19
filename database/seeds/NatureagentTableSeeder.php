<?php
use App\Natureagent;
use Illuminate\Database\Seeder;

class NatureagentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Natureagent::class,10)->create();
    }
}
