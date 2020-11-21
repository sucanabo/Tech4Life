<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\DateTime;
class seriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('series')->insert([
                ['title' => 'Laravel sesson 1','description' => 'All Laravel routes are defined in your route files, which are located in the routes directory.','vote' => '100','view'=>'200','user_id'=>'1','status'=>'1','remember_token'=> 0],	
                ['title' => 'Laravel sesson 2','description' => 'All Laravel routes are defined in your route files, which are located in the routes directory.','vote' => '100','view'=>'200','user_id'=>'1','status'=>'1','remember_token'=> 0],	
                ['title' => 'Laravel sesson 3','description' => 'All Laravel routes are defined in your route files, which are located in the routes directory.','vote' => '100','view'=>'200','user_id'=>'1','status'=>'1','remember_token'=> 0],	
                ['title' => 'Laravel sesson 4','description' => 'All Laravel routes are defined in your route files, which are located in the routes directory.','vote' => '100','view'=>'200','user_id'=>'1','status'=>'1','remember_token'=> 0],	
                ['title' => 'Laravel sesson 5','description' => 'All Laravel routes are defined in your route files, which are located in the routes directory.','vote' => '100','view'=>'200','user_id'=>'1','status'=>'1','remember_token'=> 0],	
                ['title' => 'Laravel sesson 6','description' => 'All Laravel routes are defined in your route files, which are located in the routes directory.','vote' => '100','view'=>'200','user_id'=>'1','status'=>'1','remember_token'=> 0],	
                ['title' => 'Laravel sesson 7','description' => 'All Laravel routes are defined in your route files, which are located in the routes directory.','vote' => '100','view'=>'200','user_id'=>'1','status'=>'1','remember_token'=> 0],	
                ['title' => 'Laravel sesson 8','description' => 'All Laravel routes are defined in your route files, which are located in the routes directory.','vote' => '100','view'=>'200','user_id'=>'1','status'=>'1','remember_token'=> 0],	
                ['title' => 'Laravel sesson 9','description' => 'All Laravel routes are defined in your route files, which are located in the routes directory.','vote' => '100','view'=>'200','user_id'=>'1','status'=>'1','remember_token'=> 0],	
        ]);
    }
}
