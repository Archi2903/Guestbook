<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' =>rand(5,9),
            'email' => rand(4,100).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
//         $this->call(UsersTableSeeder::class);
//         $this->call(RecordsTableSeeder::class);
    }
}
