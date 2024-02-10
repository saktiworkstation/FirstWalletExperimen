<?php

namespace App\Models;

use App\Models\Beneficiaries;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wallet extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getRouteKeyName()
    {
        return 'name';
    }

    public function Owner(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Beneficiaries() {
        return $this->hasMany(Beneficiaries::class);
    }
}
