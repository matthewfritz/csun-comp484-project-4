<?php

use Illuminate\Database\Seeder;

class UserRolesTableSeeder extends Seeder
{
	const TABLE = 'user_roles';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	[
                'user_id' => '2',
                'role' => 'admin',
            ],
            [
                'user_id' => '1',
                'role' => 'reviewer',
            ],
        ];

        foreach($data as $row) {
        	DB::table(self::TABLE)->insert($row);
        }
    }
}
