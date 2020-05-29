<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       User::truncate();

       User::create([
           'name' => 'Christoph',
           'email' => 'christoph@christoph-rumpel.com',
           'password' => bcrypt('this-is-my-password-2020')
       ]);
    }
}
