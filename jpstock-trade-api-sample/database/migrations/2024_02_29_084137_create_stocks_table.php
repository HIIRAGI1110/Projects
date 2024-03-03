<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
  public function up(): void
  {
    Schema::create('stocks', function (Blueprint $table) {
      $table->integer('code')->unique()->primary();
      $table->string('stockname')->unique();
      $table->integer('market_id');
    });
  }
  public function down(): void
  {
    Schema::dropIfExists('stocks');
  }
};