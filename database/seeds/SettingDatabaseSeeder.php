<?php

use Illuminate\Database\Seeder;
class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Setting::setMany([
            'default_locale' => 'ar',
            'default_timezone' => 'Palestine/Gaza',
            'reviews_enabled' => true,
            'auto_approve_reviews' => true,
            'supported_currencies' => ['USD','LE','SAR'],
            'default_currency' => 'USD',
            'store_email' => 'admin@gmail.com',
            'search_engine' => 'mysql',
            'local_shipping_cots' => 0,
            'outer_shipping_cots' => 0,
            'free_shipping_cots' => 0,
            'translatable' => [
                'store_name' => 'FleetCart',
                'free_shipping_label' => 'Free Shipping',
                'local_label' => 'Local Shipping',
                'outer_label' => 'outer Shipping',
            ],

        ]);


    }
}
