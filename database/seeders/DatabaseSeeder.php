<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Component;
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
    $this->call(RoleAndPermissionSeeder::class);
    $this->call(UserSeeder::class);
    $this->call(TeamSeeder::class);
    $this->call(ServiceSeeder::class);
    $this->call(TagsSeeder::class);
    $this->call(ComponentSeeder::class);
  }
}
