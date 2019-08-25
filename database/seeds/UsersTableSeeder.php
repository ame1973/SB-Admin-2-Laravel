<?php

use App\User;
use Illuminate\Database\Seeder;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        
        $data = [];
        
        for ($i = 1; $i <= 1 ; $i++) {
            array_push($data, [
                'name'     => serialize([
                    'first_name' =>  'Huan',
                    'last_name' =>  'Xiang',
                ]),
                'email'    => 'test@example.com',
                'password' => bcrypt('123456'),
            ]);
        }
        
        User::insert($data);
    }
}
