<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stock; // 追加
class StockController extends Controller {
  public function index() {
    return Stock::all();
  }
}