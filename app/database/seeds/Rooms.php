<?php

use Illuminate\Database\Seeder;

class Rooms extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('rooms')->delete();

        \DB::table('rooms')->insert(
            [
                [
                    'hotel_id' => 1,
                    'room_type_id' => '0003',
                    'accommodation_id' => '0006',
                    'amount' => '7'
                ]
            ]
        );
    }
}
