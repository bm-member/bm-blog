<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'mgmg';
        $user->email = 'mgmg@bm.com';
        $user->password = bcrypt('12345678');
        $user->save();
    }
}
