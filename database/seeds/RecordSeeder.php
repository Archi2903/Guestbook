<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('records')->insert([
            ['name' => 'Arthur', 'email' => 'arthur.li@mail.ru', 'message' => 'Hello'],
            ['name' => 'Maria', 'email' => Str::random(5) . '@gmail.com', 'message' => 'Hello from Maria'],
            ['name' => 'Anton', 'email' => Str::random(5) . '@gmail.com', 'message' => 'Hello from Anton'],
            ['name' => 'Paul', 'email' => Str::random(5) . '@gmail.com', 'message' => 'Hello from Paul'],
        ]);
    }
}
