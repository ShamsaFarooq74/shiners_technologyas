<?php

namespace Database\Seeders;
use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
  $services=[
      [
        'title' => 'IT Consultation',
        'description'=>'Al-Burraq is renowned software development company in USA. We offer custom software development services at affordable prices. Let’s visit us today!',
        'long_description'=>'Al-Burraq Technologies as a top Software development company in USA provide custom',
        'image'=>'1678441453.png',
        'tags'=>'["Management","Strategy","Consultation","Infrastructure"]',
      ],
      [
        'title' => 'Data Security',
        'description'=>'Al-Burraq is renowned software development company in USA. We offer custom software development services at affordable prices. Let’s visit us today!',
        'long_description'=>'Al-Burraq Technologies as a top Software development company in USA provide custom',
        'image'=>'1678441884.png',
        'tags'=>'["Management","Backup & Recovery","Transfer","Storage","Hosting & VPS"]',
      ],
      [
        'title' => 'Software Development',
        'description'=>'Al-Burraq is renowned software development company in USA. We offer custom software development services at affordable prices. Let’s visit us today!',
        'long_description'=>'Al-Burraq Technologies as a top Software development company in USA provide custom',
        'image'=>'1678442421.png',
        'tags'=>'["Ecommerce","Landing Page","CMS","Plugin","VR/AR","IOS & Android"]',
      ],
      [
        'title' => 'UI/UX Design',
        'description'=>'Al-Burraq is renowned software development company in USA. We offer custom software development services at affordable prices. Let’s visit us today!',
        'long_description'=>'Al-Burraq Technologies as a top Software development company in USA provide custom',
        'image'=>'1678445079.png',
        'tags'=>'["Landing Page","CMS","Plugin","VR/AR","IOS & Android"]',
      ],
      [
        'title' => 'Cloud Service',
        'description'=>'Al-Burraq is renowned software development company in USA. We offer custom software development services at affordable prices. Let’s visit us today!',
        'long_description'=>'Al-Burraq Technologies as a top Software development company in USA provide custom',
        'image'=>'1678445224.png',
        'tags'=>'["Landing Page","CMS","Plugin","VR/AR","IOS & Android"]',
      ],
      [
        'title' => 'Game Development',
        'description'=>'Al-Burraq is renowned software development company in USA. We offer custom software development services at affordable prices. Let’s visit us today!',
        'long_description'=>'Al-Burraq Technologies as a top Software development company in USA provide custom',
        'image'=>'1678445343.jfif',
        'tags'=>'["Landing Page","CMS","Plugin","VR/AR","IOS & Android"]',
      ],


    ];
    Service::insert($services);
  }
}
