<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => config('seeds.users.name'),
            'sex' => config('seeds.users.sex'),
            'age' => config('seeds.users.age'),
            'height' => config('seeds.users.height'),
            'weight' => config('seeds.users.weight'),
            'email' => config('seeds.users.email'),
            'email_verified_at' => config('seeds.users.email_verified_at'),
            'password' => config('seeds.users.password'),
            'remember_token' => config('seeds.users.remember_token'),
        ]);

        factory(User::class, config('factories.user.number'))->create();
    }
}
