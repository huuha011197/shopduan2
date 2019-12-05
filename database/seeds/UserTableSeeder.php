<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '0981740120',
            'address' => 'Lien Chieu',
            'password' => bcrypt('dsdsds'),
            'vai_tro' => 1
        ]);

        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'phone' => '0981740120',
            'address' => 'Lien Chieu',
            'password' => bcrypt('dsdsds'),
            'vai_tro' => 0
        ]);
    }
}
