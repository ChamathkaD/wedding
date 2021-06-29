<?php

use App\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create super administrator
        $admin = Admin::where('email', 'superadmin@wedding.com')->first();

        if ($admin === null) {

            $admin = Admin::create([
                'name' => "Super Administrator",
                'email' => "superadmin@wedding.com",
                'password' => Hash::make('password'),
            ]);

        }
    }
}
