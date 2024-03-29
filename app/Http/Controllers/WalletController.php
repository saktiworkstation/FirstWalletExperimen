<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.wallet.index', [
            'wallets' => Wallet::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.wallet.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['balance'] = 0;

        Wallet::create($validatedData);

        return redirect('/dashboard')->with('success', 'New Wallet has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Wallet $wallet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wallet $wallet)
    {
        return view('dashboard.wallet.edit', [
            'wallet' => $wallet
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wallet $wallet)
    {
        $rules = [
            'name' => 'required|max:255'
        ];

        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;

        Wallet::where('id', $wallet->id)->update($validatedData);

        return redirect('/dashboard')->with('success', 'Wallet has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wallet $wallet)
    {
        Wallet::destroy($wallet->id);
        return redirect('/dashboard/wallets')->with('success', 'Wallets has been deleted!');
    }
}
