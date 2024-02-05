<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use Illuminate\Http\Request;

class TopUpAndWithdrawal extends Controller
{
    public function index(){
        // halaman untuk menampilkan form top up dan withdrawl
        return view('dashboard.wallet.top-up-and-withdrawal',[
            'wallets' => Wallet::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function storeTopUp(){
        // fungsi untuk menyimpan data top up
    }

    public function storeWithdrawal(){
        // fungsi untuk menyimpan data withdrawal
    }
}
