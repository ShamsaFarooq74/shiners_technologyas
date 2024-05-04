<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Team::create([
        'user_id'=>'2',
      ]);
      Team::create([
        'user_id'=>'3',
      ]);
      Team::create([
        'user_id'=>'4',
      ]);
    }
}
