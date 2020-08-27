<?php

use Illuminate\Database\Seeder;

class Accommodation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('accommodations')->delete();

        \DB::table('accommodations')->insert(
            [
                [
                    'id' => '0001',
                    'room_type_id' => '0001',
                    'name' => 'Sencilla'
                ],
                [
                    'id' => '0002',
                    'room_type_id' => '0001',
                    'name' => 'Doble'
                ],
                [
                    'id' => '0003',
                    'room_type_id' => '0002',
                    'name' => 'Triple'
                ],
                [
                    'id' => '0004',
                    'room_type_id' => '0002',
                    'name' => 'Cuadruple'
                ],
                [
                    'id' => '0005',
                    'room_type_id' => '0003',
                    'name' => 'Sencilla'
                ],
                [
                    'id' => '0006',
                    'room_type_id' => '0003',
                    'name' => 'Doble'
                ],
                [
                    'id' => '0007',
                    'room_type_id' => '0003',
                    'name' => 'Triple'
                ]
            ]
        );
    }
}
