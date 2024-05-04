<?php

namespace Database\Seeders;

use App\Models\Component;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $components=[
        [
          'title'=>'WordPress',
        ],
        [
          'title'=>'Php',
        ],
        [
          'title'=>'Laravel',
        ],
        [
          'title'=>'Bootstrap',
        ],
        [
          'title'=>'Css',
        ],
        [
          'title'=>'JavaScript',
        ],
        [
          'title'=>'Figma',
        ],
        [
          'title'=>'Tailwind'
        ]
        ];
        Component::insert($components);
    }
}
