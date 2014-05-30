<?php

class UserTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'name'		=> 'Agus Cahyono',
			'username'	=> 'admin',
			'password'	=> Hash::make('admin'),
			'email'		=> 'cahyo.mamen@gmail.com'
		));
	}
}