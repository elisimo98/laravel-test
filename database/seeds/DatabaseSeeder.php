<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('question')->insert([
            'question' =>'Who?',
        ]);
        DB::table('question')->insert([
            'question' =>'What?',
        ]);
        DB::table('question')->insert([
            'question' =>'Where?',
        ]);
        // $this->call(UserSeeder::class);
    }
}
