<?php

use App\Record;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RecordSeeder::class);
        $this->call(TaskSeeder::class);
    }
}

