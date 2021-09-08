<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::factory(10)->create();

        // collect([
        //     [
        //         'name' => 'septian',
        //         'email' => 'septian@gmail.com',
        //         'password' => bcrypt('password'),
        //         'email_verified_at' => now()
        //     ],
        //     [
        //         'name' => 'yoga',
        //         'email' => 'yoga@gmail.com',
        //         'password' => bcrypt('password'),
        //         'email_verified_at' => now()
        //     ],

        // ])->each(function ($user) {
        //     User::create($user);
        // });
    }
}
