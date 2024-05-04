<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $tags = [
      [
        'title' => "Management",
      ],
      [
        'title' => "Backup & Recovery",
      ],
      [
        'title' => "Transfer",
      ],
      [
        'title' => "Storage",
      ],
      [
        'title' => "Hosting & VPS",
      ],
      [
        'title' => "Strategy",
      ],
      [
        'title' => "Consultation",
      ],
      [
        'title' => "Infrastructure",
      ],
      [
        'title' => "Ecommerce",
      ],
      [
        'title' => "Landing Page",
      ],
      [
        'title' => "CMS",
      ],
      [
        'title' => "Plugin",
      ],
      [
        'title' => "VR/AR",
      ],
      [
        'title' => "IOS & Android",
      ],
    ];
    if (!empty($tags)) {
      DB::table('tags')->insert($tags);
    }
  }
}
