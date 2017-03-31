<?php

use Illuminate\Database\Seeder;

class RestaurantSchedulesTableSeeder extends Seeder
{
	const TABLE = 'restaurant_schedules';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	[
                'restaurant_id' => '1',
                'day' => 'Monday',
                'time_open' => '14:00:00',
                'time_closed' => '20:00:00',
            ],
            [
                'restaurant_id' => '1',
                'day' => 'Tuesday',
                'time_open' => '14:00:00',
                'time_closed' => '20:00:00',
            ],
            [
                'restaurant_id' => '1',
                'day' => 'Wednesday',
                'time_open' => '14:00:00',
                'time_closed' => '20:00:00',
            ],
            [
                'restaurant_id' => '1',
                'day' => 'Thursday',
                'time_open' => '14:00:00',
                'time_closed' => '20:00:00',
            ],
            [
                'restaurant_id' => '1',
                'day' => 'Friday',
                'time_open' => '14:00:00',
                'time_closed' => '20:00:00',
            ],
            [
                'restaurant_id' => '2',
                'day' => 'Saturday',
                'time_open' => '10:00:00',
                'time_closed' => '18:00:00',
            ],
            [
                'restaurant_id' => '2',
                'day' => 'Sunday',
                'time_open' => '10:00:00',
                'time_closed' => '18:00:00',
            ],
        ];

        foreach($data as $row) {
        	DB::table(self::TABLE)->insert($row);
        }
    }
}
