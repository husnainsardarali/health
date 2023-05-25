<?php

namespace Database\Seeders;

use App\Models\Subscription;
use Illuminate\Database\Seeder;

class SubscriptionPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Subscription::create([
            'name' => 'Annual',
            'details' => json_encode([
                '1' => 'Reduces stress & anxiety with immediate result.',
                '2' => 'Library of 80+ calming tools & parent-child activities.',
                '3' => 'Limits screen time.',
                '4' => 'Rewards, discounts & special offers.'
            ]),
            'duration' => '12',
            'key_value' => 'annual',
            'currency' => 'AED',
            'price' => '270.00',
        ] );
    Subscription::create(
    [
        'name' => 'Monthly',
        'details' => json_encode([
            '1' => 'Reduces stress & anxiety with immediate result.',
            '2' => 'Library of 80+ calming tools & parent-child activities.',
            '3' => 'Limits screen time.',
            '4' => 'Rewards, discounts & special offers.'
        ]),
        'duration' => '1',
        'key_value' => 'monthly',
        'currency' => 'AED',
        'price' => '40.00',
    ]);
    Subscription::create([
        'name' => 'Lifetime',
        'details' => json_encode([
            '1' => 'Reduces stress & anxiety with immediate result.',
            '2' => 'Library of 80+ calming tools & parent-child activities.',
            '3' => 'Limits screen time.',
            '4' => 'Rewards, discounts & special offers.'
        ]),
        'duration' => '0',
        'key_value' => 'lifetime',
        'currency' => 'AED',
        'price' => '733.00',
    ]);
    }
}
