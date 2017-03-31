<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
	const TABLE = 'menus';

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
                'item_name' => 'Good Item 1',
                'item_description' => 'This is a good item',
                'item_price' => '5',
            ],
            [
                'restaurant_id' => '1',
                'item_name' => 'Good Item 2',
                'item_description' => 'This is a good item also',
                'item_price' => '7',
            ],
            [
                'restaurant_id' => '1',
                'item_name' => 'Good Item 3',
                'item_description' => 'This is a really good item',
                'item_price' => '9',
            ],
            [
                'restaurant_id' => '2',
                'item_name' => 'Bad Item 1',
                'item_price' => '3',
            ],
            [
                'restaurant_id' => '2',
                'item_name' => 'Bad Item 2',
                'item_description' => 'This item is awful',
                'item_price' => '7',
            ],
            [
                'restaurant_id' => '2',
                'item_name' => 'Bad Item 3',
                'item_price' => '6',
            ],
            [
                'restaurant_id' => '2',
                'item_name' => 'Bad Item 4',
                'item_description' => 'Do not buy this thing',
                'item_price' => '5',
            ],
        ];

        foreach($data as $row) {
        	DB::table(self::TABLE)->insert($row);
        }
    }
}
