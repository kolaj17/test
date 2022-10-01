<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new User();
        $user1->name = 'Ana';
        $user1->surname = 'Lila';
        $user1->salary = 0;
        $user1->save();

        $user2 = new User();
        $user2->name = 'Antonela';
        $user2->surname = 'Kolaj';
        $user2->salary = 0;
        $user2->save();
    }
}
