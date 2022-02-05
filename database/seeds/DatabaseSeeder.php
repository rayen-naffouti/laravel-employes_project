<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(QualificationsTableSeeder::class);
        $this->call(NatureagentTableSeeder::class);
        $this->call(NatabseTableSeeder::class);
        $this->call(PersonnelsTableSeeder::class);
        $this->call(AbsenceTableSeeder::class);
    }
}
