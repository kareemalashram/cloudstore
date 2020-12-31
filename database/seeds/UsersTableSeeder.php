<?php

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
         \App\Models\Admin::create([


            'name' =>  'admin',
            'email' =>  'super_admin@app.com',
            'password' =>  bcrypt('123456'),

        ]);

    }
}
