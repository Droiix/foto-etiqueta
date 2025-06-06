<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['Naturaleza', 'Arquitectura', 'Retrato', 'Urbano', 'Animales'];
        foreach ($tags as $name) {
            Tag::create(['name' => $name]);
        }
    }
}
