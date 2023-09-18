<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    const SUCCESS=1;
    const UNSUCCESS=0;

    protected $table = 'user_payment';
    protected $guarded = ['id'];

    public function package()
    {
        return $this->belongsTo(Package::class,'payment_package_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'payment_user_id');
    }


    use HasFactory;
}
