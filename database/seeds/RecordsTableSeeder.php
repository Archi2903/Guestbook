<?php

use Illuminate\Database\Seeder;

class RecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('records')->insert([
            'name' =>rand(['a-z']),(10),
            'email' => rand(4,100).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
