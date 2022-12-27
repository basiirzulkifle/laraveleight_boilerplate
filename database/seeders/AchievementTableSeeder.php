<?php

namespace Database\Seeders;

use App\Models\Achievement;
use Illuminate\Database\Seeder;

class AchievementTableSeeder extends Seeder
{
    public function run()
    {
        $achievement = [
            [
                'id'    => 1,
                'title' => '5K SCORE',
                'desc' => 'Collect 5,000 coins',
            ],
            [
                'id'    => 2,
                'title' => '10K SCORE',
                'desc' => 'Collect 10,000 coins',
            ],
        ];

        Achievement::insert($achievement);
    }
}
