<?php

use Illuminate\Database\Seeder;

class RestaurantsTableSeeder extends Seeder
{
	const TABLE = 'restaurants';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	[
                'display_name' => 'Good Restaurant',
                'street' => '123 Fake Street',
                'city' => 'Faketon',
                'state' => 'CA',
                'website' => 'http://www.example.com',
            ],
            [
                'display_name' => 'Bad Restaurant',
                'street' => '345 Awful Street',
                'city' => 'Faketon',
                'state' => 'CA',
            ],
        ];

        foreach($data as $row) {
        	DB::table(self::TABLE)->insert($row);
        }
    }
}
