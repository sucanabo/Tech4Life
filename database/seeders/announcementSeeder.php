<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\DateTime;
class announcementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('announcement')->insert([
            ['title' => 'You have new message from system ','content' => 'Your post has been successfully moderated'],
            ['title' => 'You have new message from system ','content' => 'Your post has been successfully moderated'],	
            ['title' => 'You have new message from system ','content' => 'Your post has been successfully moderated'],	
            ['title' => 'You have new message from system ','content' => 'Your post has been successfully moderated'],	
            ['title' => 'You have new message from system ','content' => 'Your post has been successfully moderated'],		
            
        ]);
    }
}
