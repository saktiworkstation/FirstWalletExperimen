<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiaries extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Wallet(){
        return $this->belongsTo(Wallet::class, 'wallet_id');
    }
}
