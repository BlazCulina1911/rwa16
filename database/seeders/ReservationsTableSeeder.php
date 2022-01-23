<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReservationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reservations')->delete();
        
        \DB::table('reservations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'result' => 1,
                'created_at' => '2022-01-23 23:09:01',
                'updated_at' => '2022-01-23 23:09:02',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'result' => 0,
                'created_at' => '2022-01-23 23:09:13',
                'updated_at' => '2022-01-23 23:09:13',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 0,
                'result' => 1,
                'created_at' => '2022-01-23 23:09:25',
                'updated_at' => '2022-01-23 23:09:26',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 2,
                'result' => 1,
                'created_at' => '2022-01-23 23:09:35',
                'updated_at' => '2022-01-23 23:09:36',
            ),
        ));
        
        
    }
}