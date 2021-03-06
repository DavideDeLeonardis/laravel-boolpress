<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $newUser = new User();
        $newUser->name = 'admin';
        $newUser->email = 'admin@admin';
        $newUser->password = Hash::make('adadadad');

        $newUser->save();

        $newUser = new User();
        $newUser->name = 'guest';
        $newUser->email = 'guest@guest';
        $newUser->password = Hash::make('adadadad');

        $newUser->save();

        for ($i = 0; $i < 5; $i++) {
            $newUser = new User();
            $newUser->name = $faker->name();
            $newUser->email = $faker->email();
            $newUser->password = Hash::make('123_789_IT');

            $newUser->save();
        }
    }
}
