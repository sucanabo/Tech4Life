<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\DateTime;
class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('category')->insert([
            ['name' => 'Laravel ','image' => 'Category1.jpg','status'=>'1','owned_by'=>'Tech4life'],	
            ['name' => 'Android ','image' => 'Category2.jpg','status'=>'1','owned_by'=>'Tech4life'],
            ['name' => 'NodeJS ','image' => 'Category3.jpg','status'=>'1','owned_by'=>'Tech4life'],
            ['name' => 'c++ ','image' => 'Category4.jpg','status'=>'1','owned_by'=>'Tech4life'],
            ['name' => 'c# ','image' => 'Category5.jpg','status'=>'1','owned_by'=>'Tech4life'],
            ['name' => 'MySQL ','image' => 'Category6.jpg','status'=>'1','owned_by'=>'Tech4life'],
            ['name' => 'JAVA ','image' => 'Category7.jpg','status'=>'1','owned_by'=>'Tech4life'],
        ]);
    }
}
