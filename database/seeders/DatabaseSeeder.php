<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        // \App\Models\User::factory(10)->create();
        $this->call([userSeeder::class,]);
        $this->call([seriesSeeder::class,]);
        $this->call([postSeeder::class]);
        $this->call([categorySeeder::class]);
        $this->call([announcementSeeder::class]);
        $this->call([notificationSeeder::class]);
    }
}
