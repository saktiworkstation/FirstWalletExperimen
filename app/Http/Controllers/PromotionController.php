<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function index(){
        return view('dashboard.promotion.index', [
            'promotions' => Promotion::latest()->get()
        ]);
    }
}
