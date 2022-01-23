<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //TODO izbrisat Žuvija i Krešu iz života...

        DB::table('users')->insert([
            'name' => 'Jurica Žuvela',
            'email' => 'zuvi91@splitsplitsplitsplit.hr',
            'phone' => '098neampojma',
            'country' => 'Croatia',
            'password' => bcrypt('testtest'),
        ]);
        DB::table('users')->insert([
            'name' => 'Krešo Kulašin',
            'email' => 'kresok@ak47.hr',
            'phone' => '+pandurijaBjezite',
            'country' => 'Croatia',
            'password' => bcrypt('testtest'),
        ]);

        echo "Žuvi i Krešo su infiltrirali bazu...\n";
    }
}
