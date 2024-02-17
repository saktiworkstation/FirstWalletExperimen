<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        return view('dashboard.service.index');
    }

    public function OnlineStore(){
        return view('dashboard.service.online-store.index');
    }

    public function BillPurchase(){
        //
    }
}
