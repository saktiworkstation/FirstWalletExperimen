<?php

namespace App\Http\Controllers;

use App\Models\Beneficiaries;
use App\Models\Wallet;
use Illuminate\Http\Request;

class BeneficiariesController extends Controller
{
    public function index(){
        return view('dashboard.transfer.index', [
            'wallets' => Beneficiaries::where('user_id', auth()->user()->id)->get(),
            'ownWallets' => Wallet::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    public function addWallet(){
        return view('dashboard.transfer.add-wallet-to-transfer');
    }

    public function storeWallet(Request $request){
        // menyimpan data wallet ke tabel Beneficiaries
        $validatedData = $request->validate([
            'wallet_id' => 'required'
        ]);

        $wallets = Beneficiaries::where('user_id', auth()->user()->id)->get();
        foreach ($wallets as $wallet){
            if($wallet->wallet_id == $request->wallet_id){
                return redirect('/dashboard/beneficiaries')->with('success', 'The wallet is there!');
            }else{
                $validatedData['user_id'] = auth()->user()->id;

                Beneficiaries::create($validatedData);

                return redirect('/dashboard/beneficiaries')->with('success', 'Beneficiaries Wallet has been added!');
            }
        }

    }

    public function transfer(Request $request){
        // fungsi men transfer uang ke wallet tujuan
        $rules = [
            'balance' => 'required|numeric|min:0'
        ];
        $wallet = Wallet::find($request->idW);
        $walletTF = Wallet::find($request->idTF);
        $balance = $request->balance;

        $oldBalanceW = $wallet->balance;
        $newBalanceW = $oldBalanceW - $balance;

        $oldBalanceTF = $walletTF->balance;
        $newBalanceTF = $oldBalanceTF - $balance;

        if($newBalanceW <= 0){
            return redirect('/dashboard/beneficiaries')->with('success', 'Insufficient balance to withdraw');
        } else {
            $validatedDataW = $request->validate($rules);
            $validatedDataW['balance'] = $newBalanceW;

            $validatedDataTF = $request->validate($rules);
            $validatedDataTF['balance'] = $newBalanceTF;

            Wallet::where('id', $request->idW)->update($validatedDataW);
            Wallet::where('id', $request->idTF)->update($validatedDataTF);

            return redirect('/dashboard/beneficiaries')->with('success', 'The balance has been successfully withdrawn!');
        }
    }
}
