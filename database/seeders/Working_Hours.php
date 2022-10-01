<?php

namespace Database\Seeders;

use App\Models\Working_Hour;
use Illuminate\Database\Seeder;

class Working_Hours extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $working_hour1 = new Working_Hour();
        $working_hour1->user_id = 1;
        $working_hour1->date = '2022-11-1';
        $working_hour1->hours = 12;
        $working_hour1->save();

        $working_hour1 = new Working_Hour();
        $working_hour1->user_id = 1;
        $working_hour1->date = '2022-11-2';
        $working_hour1->hours = 8;
        $working_hour1->save();

        $working_hour1 = new Working_Hour();
        $working_hour1->user_id = 1;
        $working_hour1->date = '2022-11-3';
        $working_hour1->hours = 12;
        $working_hour1->save();

        $working_hour1 = new Working_Hour();
        $working_hour1->user_id = 1;
        $working_hour1->date = '2022-11-4';
        $working_hour1->hours = 8;
        $working_hour1->save();

        $working_hour1 = new Working_Hour();
        $working_hour1->user_id = 1;
        $working_hour1->date = '2022-11-5';
        $working_hour1->hours = 8;
        $working_hour1->save();

        $working_hour1 = new Working_Hour();
        $working_hour1->user_id = 1;
        $working_hour1->date = '2022-11-12';
        $working_hour1->hours = 10;
        $working_hour1->save();

        $working_hour1 = new Working_Hour();
        $working_hour1->user_id = 1;
        $working_hour1->date = '2022-11-13';
        $working_hour1->hours = 14;
        $working_hour1->save();

        $working_hour1 = new Working_Hour();
        $working_hour1->user_id = 1;
        $working_hour1->date = '2022-11-15';
        $working_hour1->hours = 10;
        $working_hour1->save();

        $working_hour1 = new Working_Hour();
        $working_hour1->user_id = 1;
        $working_hour1->date = '2022-11-16';
        $working_hour1->hours = 8;
        $working_hour1->save();

        $working_hour1 = new Working_Hour();
        $working_hour1->user_id = 1;
        $working_hour1->date = '2022-11-17';
        $working_hour1->hours = 6;
        $working_hour1->save();

        $working_hour1 = new Working_Hour();
        $working_hour1->user_id = 1;
        $working_hour1->date = '2022-11-28';
        $working_hour1->hours = 10;
        $working_hour1->save();

        $working_hour1 = new Working_Hour();
        $working_hour1->user_id = 2;
        $working_hour1->date = '2022-11-1';
        $working_hour1->hours = 8;
        $working_hour1->save();

        $working_hour1 = new Working_Hour();
        $working_hour1->user_id = 2;
        $working_hour1->date = '2022-11-2';
        $working_hour1->hours = 9;
        $working_hour1->save();

        $working_hour1 = new Working_Hour();
        $working_hour1->user_id = 2;
        $working_hour1->date = '2022-11-3';
        $working_hour1->hours = 11;
        $working_hour1->save();

        $working_hour1 = new Working_Hour();
        $working_hour1->user_id = 2;
        $working_hour1->date = '2022-11-4';
        $working_hour1->hours = 12;
        $working_hour1->save();

        $working_hour1 = new Working_Hour();
        $working_hour1->user_id = 2;
        $working_hour1->date = '2022-11-5';
        $working_hour1->hours = 12;
        $working_hour1->save();

        $working_hour1 = new Working_Hour();
        $working_hour1->user_id = 2;
        $working_hour1->date = '2022-11-9';
        $working_hour1->hours = 10;
        $working_hour1->save();

        $working_hour1 = new Working_Hour();
        $working_hour1->user_id = 2;
        $working_hour1->date = '2022-11-10';
        $working_hour1->hours = 7;
        $working_hour1->save();

        $working_hour1 = new Working_Hour();
        $working_hour1->user_id = 2;
        $working_hour1->date = '2022-11-11';
        $working_hour1->hours = 12;
        $working_hour1->save();

        $working_hour1 = new Working_Hour();
        $working_hour1->user_id = 2;
        $working_hour1->date = '2022-11-12';
        $working_hour1->hours = 8;
        $working_hour1->save();

        $working_hour1 = new Working_Hour();
        $working_hour1->user_id = 2;
        $working_hour1->date = '2022-11-13';
        $working_hour1->hours = 16;
        $working_hour1->save();

        $working_hour1 = new Working_Hour();
        $working_hour1->user_id = 2;
        $working_hour1->date = '2022-11-15';
        $working_hour1->hours = 8;
        $working_hour1->save();

        $working_hour1 = new Working_Hour();
        $working_hour1->user_id = 2;
        $working_hour1->date = '2022-11-16';
        $working_hour1->hours = 12;
        $working_hour1->save();

        $working_hour1 = new Working_Hour();
        $working_hour1->user_id = 2;
        $working_hour1->date = '2022-11-27';
        $working_hour1->hours = 8;
        $working_hour1->save();

        $working_hour1 = new Working_Hour();
        $working_hour1->user_id = 2;
        $working_hour1->date = '2022-11-28';
        $working_hour1->hours = 8;
        $working_hour1->save();

        $working_hour1 = new Working_Hour();
        $working_hour1->user_id = 2;
        $working_hour1->date = '2022-11-29';
        $working_hour1->hours = 10;
        $working_hour1->save();

        $working_hour1 = new Working_Hour();
        $working_hour1->user_id = 2;
        $working_hour1->date = '2022-11-30';
        $working_hour1->hours = 14;
        $working_hour1->save();
    }
}
