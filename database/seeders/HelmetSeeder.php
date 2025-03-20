<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Helmet;

class HelmetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Helmet::create([
            'title'       => 'Bold & Beautiful',
            'image_path'  => 'helmet1.jpg',
            'inspiration' => 'Inspired by the passion and elegance of modern motorsport.',
            'votes'       => 0,
            'is_winner'   => false,
        ]);

        Helmet::create([
            'title'       => 'Fierce & Fearless',
            'image_path'  => 'helmet2.jpg',
            'inspiration' => 'Designed to embody the fearless spirit of women racing at the front.',
            'votes'       => 0,
            'is_winner'   => false,
        ]);

        Helmet::create([
            'title'       => 'Grace Under Pressure',
            'image_path'  => 'helmet3.jpg',
            'inspiration' => 'A blend of style and performance, reflecting grace in the heat of competition.',
            'votes'       => 0,
            'is_winner'   => false,
        ]);

        Helmet::create([
            'title'       => 'Speed & Style',
            'image_path'  => 'helmet4.jpg',
            'inspiration' => 'Merging cutting-edge technology with modern aesthetics for a striking look.',
            'votes'       => 0,
            'is_winner'   => false,
        ]);
    }
}
