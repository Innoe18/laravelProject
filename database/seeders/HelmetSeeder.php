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
        Helmet::firstOrCreate(
            ['title' => 'Bold & Beautiful'],
            [
                'image_path'  => 'helmet1.jpg',
                'inspiration' => 'Inspired by the passion and elegance of modern motorsport.',
                'votes'       => 0,
                'is_winner'   => false,
            ]
        );

        Helmet::firstOrCreate(
            ['title' => 'Fierce & Fearless'],
            [
                'image_path'  => 'helmet2.jpg',
                'inspiration' => 'Designed to embody the fearless spirit of women racing at the front.',
                'votes'       => 0,
                'is_winner'   => false,
            ]
        );

        Helmet::firstOrCreate(
            ['title' => 'Grace Under Pressure'],
            [
                'image_path'  => 'helmet3.jpg',
                'inspiration' => 'A blend of style and performance, reflecting grace in the heat of competition.',
                'votes'       => 0,
                'is_winner'   => false,
            ]
        );

        Helmet::firstOrCreate(
            ['title' => 'Speed & Style'],
            [
                'image_path'  => 'helmet4.jpg',
                'inspiration' => 'Merging cutting-edge technology with modern aesthetics for a striking look.',
                'votes'       => 0,
                'is_winner'   => false,
            ]
        );

        Helmet::firstOrCreate(
            ['title' => 'Radiant Racer'],
            [
                'image_path'  => 'helmet5.jpg',
                'inspiration' => 'Shining bright on and off the track with unmatched determination.',
                'votes'       => 0,
                'is_winner'   => false,
            ]
        );

        Helmet::firstOrCreate(
            ['title' => 'Lightning Chic'],
            [
                'image_path'  => 'helmet6.jpg',
                'inspiration' => 'A spark of style and speed, perfectly capturing the thrill of the race.',
                'votes'       => 0,
                'is_winner'   => false,
            ]
        );

        Helmet::firstOrCreate(
            ['title' => 'Dynamic Diva'],
            [
                'image_path'  => 'helmet7.jpg',
                'inspiration' => 'Combining power and grace to make every lap a statement.',
                'votes'       => 0,
                'is_winner'   => false,
            ]
        );

        Helmet::firstOrCreate(
            ['title' => 'Elegant Velocity'],
            [
                'image_path'  => 'helmet8.jpg',
                'inspiration' => 'Where elegance meets high-speed performance on the race track.',
                'votes'       => 0,
                'is_winner'   => false,
            ]
        );

        Helmet::firstOrCreate(
            ['title' => 'Passionate Pursuit'],
            [
                'image_path'  => 'helmet9.jpg',
                'inspiration' => 'Driven by passion, powered by determination, and racing towards excellence.',
                'votes'       => 0,
                'is_winner'   => false,
            ]
        );
    }
}
