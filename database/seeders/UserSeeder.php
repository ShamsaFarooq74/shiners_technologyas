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
    User::create([
      'name' => 'admin',
      'email' => 'admin@gmail.com',
      'email_verified_at' => now(),
      'password' => bcrypt('password'), // password

  ])->assignRole('writer','admin');

    User::create(
      [
        'name' => 'Faisal',
        'email' => 'faisal@gmail.com',
        'email_verified_at' => now(),
        'password' => bcrypt('password'), // password
      ],
    );

    User::create([  
      'name' => 'Awais',
      'email' => 'awais@gmail.com',
      'email_verified_at' => now(),
      'password' => bcrypt('password'), // password

    ]);
    User::create([
      'name' => 'Bilal',
      'email' => 'bilal@gmail.com',
      'email_verified_at' => now(),
      'password' => bcrypt('password'), // password

    ]);
  }
}
