<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $user = new User();
        $user->name = "admin";
        $user->password = "admin";
        $user->email = "admin@gmail.com";
        $user->save();

        $user1 = new User();
        $user1->name = "superadmin";
        $user1->password = "superadmin";
        $user1->email = "superadmin@gmail.com";
        $user1->save();

        $user3 = new User();
        $user3->nam = "invitado";
        $user3->password = "invitado";
        $user3->email = "invitado@gmail.com";
        $user3->save();

    }
}
