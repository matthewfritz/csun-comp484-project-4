<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
	const TABLE = 'users';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	[
        		'username' => 'reviewer',
        		'email' => 'reviewer@example.com',
        		'display_name' => 'Reviewer',
        		'password' => bcrypt('reviewer'),
        	],
        	[
        		'username' => 'admin',
        		'email' => 'admin@example.com',
        		'display_name' => 'Administrator',
        		'password' => bcrypt('admin'),
        	],
        ];

        foreach($data as $row) {
        	DB::table(self::TABLE)->insert($row);
        }
    }
}
