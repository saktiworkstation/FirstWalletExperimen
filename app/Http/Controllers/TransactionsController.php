<?php

namespace App\Http\Controllers;

use App\Models\Transactions;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    public function index(){
        return view('dashboard.transaction.index',[
            'transactions' => Transactions::latest()->get(),
        ]);
    }
}
