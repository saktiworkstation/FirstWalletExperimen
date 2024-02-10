<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use Illuminate\Http\Request;

class BeneficiariesController extends Controller
{
    public function index(){
        return view('dashboard.transfer.index', [
            'wallets' => Wallet::all(),
        ]);
    }

    public function addWallet(){
        return view('dashboard.transfer.add-wallet-to-transfer');
    }

    public function storeWallet(){
        // menyimpan data wallet ke tabel Beneficiaries
    }

    public function transfer(){
        // fungsi men transfer uang ke wallet tujuan
    }
}
