<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('clients')->insert(
            [
                'title' => 'Mr',
                'name' => 'John',
                'last_name' => 'Doe',
                'address' => 'Address Str 123',
                'zip_code' => '01284',
                'city' => 'Marietta',
                'state' => 'Georgia',
                'email' => 'john@doe.com',
            ]
        );
        DB::table('clients')->insert(
            [
                'title' => 'Mrs',
                'name' => 'Jane',
                'last_name' => 'Doe',
                'address' => 'Some Nice Str.',
                'zip_code' => '12453',
                'city' => 'New York City',
                'state' => 'New York',
                'email' => 'jane@doe.com',
            ]
        );
    }
}
