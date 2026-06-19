<?php

namespace Database\Seeders;

use App\Models\Dimension;

use Illuminate\Database\Seeder;

class DimSeeder extends Seeder
{
    public function run(): void 
    {
        Dimension::create([
            'title' => 'Overworld',
            'content' => 'The main dimension where players begin.',
            'img' => "{{ asset('img/overworld.png') }}",
            'tags' => 'vanilla',
        ]);

        Dimension::create([
            'title' => 'Nether',
            'content' => 'A dangerous fiery dimension.',
            'img' => "{{ asset('img/nether.png') }}",
            'tags' => 'vanilla',
        ]);

        Dimension::create([
            'title' => 'End',
            'content' => 'Home of the Ender Dragon.',
            'img' => "{{ asset('img/End.png') }}",
            'tags' => 'vanilla',
        ]);
    }
    }
