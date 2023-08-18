<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ChannelsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('channels')->insert([
                'ChannelName' => $faker->company,
                'Description' => $faker->paragraph,
                'SubscribeCount' => $faker->numberBetween(1000, 100000),
                'URL' => $faker->url,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}