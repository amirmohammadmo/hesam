<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train_programm extends Model
{
    protected $table = 'train-programm';
    protected $guarded =['id'];
    public function package(){
        return $this->belongsTo(Package::class,'package_id');
    }
    use HasFactory;
}
