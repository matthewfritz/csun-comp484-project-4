<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
	const TABLE = 'roles';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	[
                'system_name' => 'admin',
                'display_name' => 'Administrator',
            ],
            [
                'system_name' => 'reviewer',
                'display_name' => 'Restaurant Reviewer',
            ],
        ];

        foreach($data as $row) {
        	DB::table(self::TABLE)->insert($row);
        }
    }
}
