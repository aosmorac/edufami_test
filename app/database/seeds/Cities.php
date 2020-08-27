<?php

use Illuminate\Database\Seeder;

class Cities extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cities')->delete();

        \DB::table('cities')->insert(
            [
                [
                    'id' => 'BOG',
                    'name' => 'Bogota'
                ],
                [
                    'id' => 'MED',
                    'name' => 'Medellin'
                ],
                [
                    'id' => 'CAL',
                    'name' => 'Cali'
                ]
            ]
        );
    }
}
