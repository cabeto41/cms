<?php

use Illuminate\Support\Facades\Hash;
use cms\User\User;

class UserTableSeeder extends Seeder {

    public function run()
    {
        User::create([
            'userId'    => '72A3556E-D026-4BC1-9F24-C7EF346C5EC6',
            'firstName' => 'System',
            'lastName'  => 'Administrator',
            'username'  => 'admin',
            'email'     => 'postmaster@domain.com',
            'password'  =>  Hash::make('secret')
        ]);
    }

}
