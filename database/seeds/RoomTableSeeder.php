<?php

use Illuminate\Database\Seeder;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert(
            [
                'name' => '101',
                'floor' => 1,
                'description' => 'Description 101',
            ]
        );
        DB::table('rooms')->insert(
            [
                'name' => '102',
                'floor' => 1,
                'description' => 'Description 102',
            ]
        );
        DB::table('rooms')->insert(
            [
                'name' => '201',
                'floor' => 2,
                'description' => 'Description 201',
            ]
        );
        DB::table('rooms')->insert(
            [
                'name' => '202',
                'floor' => 2,
                'description' => 'Description 202',
            ]
        );
    }
}
