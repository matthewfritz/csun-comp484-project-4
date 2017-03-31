<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
	const TABLE = 'reviews';

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
                'user_id' => '1',
                'rating' => '4',
                'tagline' => 'Fantastic restaurant',
                'body' => 'Great food at great prices',
            ],
            [
                'restaurant_id' => '1',
                'user_id' => '1',
                'rating' => '5',
                'tagline' => 'An even better experience than before',
            ],
            [
                'restaurant_id' => '1',
                'user_id' => '1',
                'rating' => '5',
                'tagline' => 'Just gets better',
                'body' => 'I would rate this restaurant even higher if I could',
            ],
            [
                'restaurant_id' => '2',
                'user_id' => '1',
                'rating' => '3',
                'tagline' => 'Meh',
                'body' => 'Not great but not bad',
            ],
            [
                'restaurant_id' => '2',
                'user_id' => '1',
                'rating' => '3',
                'tagline' => 'The quality went down a bit',
            ],
            [
                'restaurant_id' => '2',
                'user_id' => '1',
                'rating' => '2',
                'tagline' => 'Unhygenic',
                'body' => 'The cook was scratching himself with the spatula',
            ],
            [
                'restaurant_id' => '2',
                'user_id' => '1',
                'rating' => '1',
                'tagline' => 'Call the Health Inspector',
                'body' => 'Something crawled out of the kitchen and I think it was supposed to be in the food',
            ],
        ];

        foreach($data as $row) {
        	DB::table(self::TABLE)->insert($row);
        }
    }
}
