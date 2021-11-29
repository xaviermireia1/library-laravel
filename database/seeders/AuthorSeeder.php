<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 100; $i++) { 
            DB::table('authors')->insert([
                'name' => 'author'.$i,
                'email' => 'email'.$i.'@gmail.com',
            ]);
        }
    }
}
