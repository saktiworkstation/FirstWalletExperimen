<?php

namespace App\Models;

use App\Models\BillType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bill extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function BillType(){
        return $this->belongsTo(BillType::class, 'bill_type');
    }
}
