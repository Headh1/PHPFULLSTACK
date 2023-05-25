<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
        // \App\Models\User::factory(10)->create();
        // $cnt =0;
        // while( $cnt <= 50){
        \App\Models\Board::factory(30)->create();
        // $cnt++;
    // }
}
}
