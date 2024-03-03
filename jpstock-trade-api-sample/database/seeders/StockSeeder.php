<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockSeeder extends Seeder
{
    public function run()
    {
        // 以下を追加
        $stocks = [
            [
                'code' => 7201,
                'stockname' => '日産自動車',
                'market_id' => 1,
            ],
            [
                'code' => 9984,
                'stockname' => 'ソフトバンクグループ',
                'market_id' => 1,
            ],
        ];

        foreach ($stocks as $stock) {
            DB::table('stocks')->insert($stock);
        }
    }
}
