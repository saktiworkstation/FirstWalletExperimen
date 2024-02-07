<?php

namespace App\Models;

use App\Models\Bill;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BillType extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Bill(){
        return $this->hasMany(Bill::class);
    }
}
