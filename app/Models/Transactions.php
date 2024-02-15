<?php

namespace App\Models;

use App\Models\User;
use App\Models\BillType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transactions extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function UserSender(){
        return $this->belongsTo(User::class, 'user_id_sender');
    }

    public function UserReceiver(){
        return $this->belongsTo(User::class, 'user_id_receiver');
    }

    public function BillType(){
        return $this->belongsTo(BillType::class, 'transaction_type');
    }
}
