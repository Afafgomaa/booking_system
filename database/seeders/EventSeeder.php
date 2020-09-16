<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \DB::table('events')->insert(array(
       	   0 => 
            array (
                'name' => 'event 1',
                'description' => 'AED',
                'from_date' => '2020/10/10',
                'to_date' => '2020/10/11'
            ),
            1 => 
            array (
                'name' => 'event 2',
                'description' => 'AFN',
                'from_date' => '2020/10/10',
                 'to_date' => '2020/10/11'
            ),
            2 => 
            array (
                'name' => 'event 3',
                'description' => 'ALL',
                'from_date' => '2020/10/10',
                 'to_date' => '2020/10/11'
            )


           ));
    }
}
