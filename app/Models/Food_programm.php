<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food_programm extends Model
{
    protected $table ='food-programm';
    protected $guarded =['id'];

    public function package(){
        return $this->belongsTo(Package::class,'package_id');
    }
    use HasFactory;
}
