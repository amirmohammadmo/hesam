<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Face_time extends Model

{
    protected $table = 'face_time';
    protected $guarded = ['id'];
    public $timestamps =false;

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    use HasFactory;
}
