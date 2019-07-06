<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
    		'id'		=> 1,
            'name'      => 'Javier Ricardo',
    		'lastname'		=> 'Baron Fuentes',
            'email' => 'javierbaron6@gmail.com',
            'password' => bcrypt('Qwerty9601'),
    		'phone'	=> '6387596',
    		'birthdate' => '1996-06-01',
            'gender' => 'M',
    		]);

        $user->save();
    }
}
