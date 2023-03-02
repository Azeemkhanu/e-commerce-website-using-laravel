<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert(
        ['name'=>'Samsung Galaxy A03',
        'price'=>'200000',
        'category'=>'Mobiles',
        'description'=>'a smartphone with 16gb ram and 16 megapixel camera and much more features.',
        'gallery'=>'https://www.pakmobizone.pk/wp-content/uploads/2022/04/Samsung-Galaxy-A03-Blue-1.jpg'
        ]
    );
    }
}
