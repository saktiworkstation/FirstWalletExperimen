<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Wallet;
use Illuminate\Http\Request;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.bill.index', [
            'bills' => Bill::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Bill $bill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bill $bill)
    {
        return view('dashboard.bill.pay-bill', [
            'bill' => $bill,
            'wallets' => Wallet::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bill $bill)
    {
        $rulesBill = [
            'amount' => 'required|numeric|min:0'
        ];
        $rulesWallet = [
            'balance' => 'numeric'
        ];

        // wallet operation
        $wallet = Wallet::find($request->id);
        $amount = $request->amount;

        $oldBalance = $wallet->balance;
        $newBalance = $oldBalance - $amount;

        // bill operation
        $bill = Bill::find($bill->id);
        $newBillAmount = $bill->amount - $request->amount;

        if($newBalance < 0){
            return redirect('/dashboard/bills/'.$bill->id.'/edit')->with('success', 'Not enough wallet money');
        } else {
            if($newBillAmount > 0){
                $validatedDataWallet = $request->validate($rulesWallet);
                $validatedDataWallet['balance'] = $newBalance;

                $validatedDataBill = $request->validate($rulesBill);
                $validatedDataBill['amount'] = $newBillAmount;

                Wallet::where('id', $request->id)->update($validatedDataWallet);
                Bill::where('id', $bill->id)->update($validatedDataBill);

                return redirect('/dashboard/bills')->with('success', 'Bill paid successfully. Not yet paid off');
            }else if ($newBillAmount == 0) {
                $validatedDataWallet = $request->validate($rulesWallet);
                $validatedDataWallet['balance'] = $newBalance;

                $validatedDataBill = $request->validate($rulesBill);
                $validatedDataBill['amount'] = $newBillAmount;

                Wallet::where('id', $request->id)->update($validatedDataWallet);
                Bill::destroy('id', $bill->id);

                return redirect('/dashboard/bills')->with('success', 'Bill paid successfully. Its paid off');
            }else if ($newBillAmount < 0) {
                return redirect('/dashboard/bills/'.$bill->id.'/edit')->with('success', 'The amount of money is too much');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bill $bill)
    {
        //
    }
}
