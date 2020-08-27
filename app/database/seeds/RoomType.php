<?php

use Illuminate\Database\Seeder;

class RoomType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('room_types')->delete();

        \DB::table('room_types')->insert(
            [
                [
                    'id' => '0001',
                    'name' => 'Estandar'
                ],
                [
                    'id' => '0002',
                    'name' => 'Junior'
                ],
                [
                    'id' => '0003',
                    'name' => 'Suite'
                ]
            ]
        );
    }
}
