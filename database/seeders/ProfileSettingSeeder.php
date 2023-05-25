<?php

namespace Database\Seeders;

use App\Models\ProfileSetting;
use Illuminate\Database\Seeder;

class ProfileSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ProfileSetting::create([
            'headings' => 'PERMISSION PLEASE',
            'description' => 'Tap below to give Hoopla permission to',
            'options' => json_encode([
                '1' => 'Track Your Progress',
                '2' => 'Send Tips & Advice'
            ]),
        ]);
        ProfileSetting::create([
            'headings' => 'TELL US A BIT ABOUT YOURSELF',
            'description' => "I'm a ...",
            'options' => json_encode([
                '1' => 'Mother',
                '2' => 'Father',
                '3' => 'Babysitter',
                '4' => 'Family Member',
                '5' => 'Nanny',
                '6' => 'Teacher',
                '7' => 'Other',
            ]),
        ]);
        ProfileSetting::create([
            'headings' => 'WHAT ARE YOU MOST EXCITED TO BENEFIT FROM?',
            'description' => 'Choose as many as apply.',
            'options' => json_encode([
                '1' => 'Less Tension & Stress',
                '2' => 'Positivity',
                '3' => 'More Confidence',
                '4' => 'Better Sleep',
                '5' => 'Feeling Connected',
            ]),
        ]);
        ProfileSetting::create([
            'headings' => 'DO ANY OF THE FOLLOWING CHALLANGES APPLY TO YOU?',
            'description' => 'Choose as many as apply.',
            'options' => json_encode([
                '1' => 'Work / Life Balance',
                '2' => 'Worry',
                '3' => 'Anxiety',
                '4' => 'Stress',
                '5' => 'Burnout',
            ]),
        ]);
        ProfileSetting::create([
            'headings' => 'WHAT ARE YOU MOST EXCITED FOR YOUR CHILD TO BENEFIT FROM?',
            'description' => 'Choose as many as apply.',
            'options' => json_encode([
                '1' => 'Less Temper Tantrums',
                '2' => 'Positivity',
                '3' => 'Less Stress & Anxiety',
                '4' => 'Mindfulnesss',
                '5' => 'Better Sleep Habits',
            ]),
        ]);
        ProfileSetting::create([
            'headings' => 'DO ANY OF THE FOLLOWING CONDITIONS APPLY TO YOUR CHILD?',
            'description' => 'Choose as many as apply.',
            'options' => json_encode([
                '1' => 'Anxiety',
                '2' => 'Stress',
                '3' => 'Depression',
                '4' => 'Sensory Processing Disorder',
                '5' => 'Tantrums',
                '6' => 'Bullied',
                '7' => 'Autism',
                '8' => 'ADHD',
                '9' => 'Other',
            ]),
        ]);
    }
}
