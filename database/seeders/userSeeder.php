<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\DateTime;
class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 1; $i <= 9;$i++)
        {
        	DB::table('users')->insert(
	        	[
                    'username' => 'User_'.$i,
                    'password' => bcrypt('123456'),
                    'email' => 'user_'.$i.'@mymail.com',
                    'phone_number'=>'097976971'.$i,
                    'display_name'=>'Xuân Lộc',
                    'avatar'=>$i.'.jpg',
                    'view'=>'100',
                    'gender'=>'0',
                    'status'=>'1',
                    'permission'=>'1',
	            	'remember_token'=> 0,	
	        	]
        	);
        }
    }
}
