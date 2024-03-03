<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
  public function up(): void
  {
    Schema::create('trades', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->integer('code');
      $table->integer('shares');
      $table->float('price');
      $table->string('buy_sell');
      $table->timestamp('trading_date');
    });
  }
  public function down(): void
  {
    Schema::dropIfExists('dealings');
  }
};