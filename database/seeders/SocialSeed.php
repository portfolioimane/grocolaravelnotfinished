<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //for development
      DB::insert("INSERT INTO social_creadentials (id, provider, app_id, app_secret, status, live_status, created_at, updated_at) VALUES
        (1, 'facebook', '355044810029125', 'b8a6138a408d6a18f4668a325a7f2f5f', 1, 1, '2020-04-11 16:09:55', '2020-04-24 23:09:28'),
        (2, 'google', '813185455671-gd20upj3u5l2ofuokl9il08ek4fch2qv.apps.googleusercontent.com', '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', 1, 1, '2020-04-11 16:09:57', '2020-04-24 23:09:32'),
        (3, 'twitter', 'your_twitter_app_id', 'your_twitter_app_secret', 0, 0, '2020-04-11 16:10:01', '2020-06-01 08:43:41')");

        // for production 
       // DB::insert("INSERT INTO social_creadentials (id, provider, app_id, app_secret, status, live_status, created_at, updated_at) VALUES
        //(1, 'facebook', '559536299076582', 'faa762cf8ac16e1534bd49d22c4e85aa', 1, 1, '2020-04-11 16:09:55', '2020-04-24 23:09:28'),
        //(2, 'google', '133190283406-7d47hq6sleinb1l50m993cg0i2052nue.apps.googleusercontent.com', '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', 1, 1, '2020-04-11 16:09:57', '2020-04-24 23:09:32'),
        //(3, 'twitter', 'your_twitter_app_id', 'your_twitter_app_secret', 0, 0, '2020-04-11 16:10:01', '2020-06-01 08:43:41')");
    }
}
