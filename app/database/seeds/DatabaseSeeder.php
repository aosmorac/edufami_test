<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Cities::class);
        $this->call(RoomType::class);
        $this->call(Accommodation::class);
        $this->call(Hotels::class);
        $this->call(Rooms::class);
    }
}
