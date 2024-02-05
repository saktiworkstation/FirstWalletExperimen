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

    public function storeTopUp(Request $request){
        // fungsi untuk menyimpan data top up
        $rules = [
            'balance' => 'required|numeric|min:0'
        ];
        $wallet = Wallet::find($request->id);
        $balance = $request->balance;

        $oldBalance = $wallet->balance;
        $newBalance = $oldBalance + $balance;

        $validatedData = $request->validate($rules);

        $validatedData['balance'] = $newBalance;

        Wallet::where('id', $request->id)->update($validatedData);

        return redirect('/dashboard')->with('success', 'Balance has been added successfully!');
    }

    public function storeWithdrawal(){
        // fungsi untuk menyimpan data withdrawal
    }
}
