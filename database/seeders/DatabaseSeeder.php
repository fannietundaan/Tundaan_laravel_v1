<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('products')->insert([
            'id'             =>  '1',
            'menu'           =>  'Lobster Bisque',
            'ingredients'    =>  'Lorem, deren, trataro, filede, nerada',
            'price'          =>  '$5.95',
            'image'          =>  'assets/img/menu/lobster-bisque.jpg'
        ]);
    }
}
