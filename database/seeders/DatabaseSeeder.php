<?php

namespace Database\Seeders;

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
        \App\Models\Category::insert([
            [
            'id'=>1,
            'name' => 'chakra',
        ],
        [
            'id'=>2,
            'name' => 'sachin',    
        ],
        [
            'id'=>3,
            'name' => 'Ashmita'    
        ],
        [
            'id'=>4,
            'name' => 'hikmat',    
        ],
        [
            'id'=>5,
            'name' => 'shilpa',    
        ],
        [
            'id'=>6,
            'name' => 'devanshu',    
        ],
          
    ]);
    }
}
