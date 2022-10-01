<?php

namespace Database\Seeders;

use App\Models\Off_Days;
use Illuminate\Database\Seeder;

class Off_Day extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $off_day1 = new Off_Days();
        $off_day1->date = '2022-11-28';
        $off_day1->save();

        $off_day1 = new Off_Days();
        $off_day1->date = '2022-11-29';
        $off_day1->save();
    }
}
