<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('Nitro>=%20'),
                'phone'=>'016000000',
                'role'=>'admin',
                'address'=>'None',
                'area'=>1,

            ]
        );
    }
}
