<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
  public function up(): void
  {
    Schema::create('markets', function (Blueprint $table) {
      $table->integer('market_id')->unique()->primary();
      $table->string('market')->unique();
    });
  }
  public function down(): void
  {
    Schema::dropIfExists('markets');
  }
};