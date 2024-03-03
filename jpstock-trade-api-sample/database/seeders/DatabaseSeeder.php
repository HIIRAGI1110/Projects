<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
  public function run(): void
  {
    $this->call(MarketSeeder::class);
    $this->call(StockSeeder::class);
  }
}