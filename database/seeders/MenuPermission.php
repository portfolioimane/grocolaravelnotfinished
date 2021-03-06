<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuPermission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO permissions (role_id, menu_id, created_at, updated_at) VALUES
        (1, 8, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 9, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 1, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 27, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 31, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 26, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 25, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 24, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 7, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 15, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 16, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 17, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 18, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 20, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 28, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 23, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 22, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 21, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 19, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 6, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 5, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 29, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 30, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 4, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 36, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 33, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 14, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 37, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 3, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 32, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 34, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 35, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 13, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 12, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 11, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 10, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 2, '2020-09-09 00:41:47', '2020-09-09 00:41:47'),
        (1, 38, '2020-09-09 00:41:47', '2020-09-09 00:41:47')");
    }
}
