<?php

use Illuminate\Database\Seeder;

class Hotels extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('hotels')->delete();

        \DB::table('hotels')->insert(
            [
                [
                    'city_id' => 'BOG',
                    'name' => 'Hotel Abel',
                    'address' => 'Calle algo casa cuadrada',
                    'nit' => '1984',
                    'rooms' => '10'
                ]
            ]
        );
    }
}
