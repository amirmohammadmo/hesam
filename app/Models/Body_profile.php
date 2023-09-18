<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Body_profile extends Model
{
    protected $table ='body_profile';
    protected $guarded =['id'];
public $timestamps =false;
    public function package(){
        return $this->belongsTo(Package::class,'id');
    }

    public function need_supplement(){
        switch ($this->attributes['need_supplement']){

            case '1':
                return 'بله';
                    break;
                    case '0':
                return 'خیر';
                    break;
        }

    }
    use HasFactory;
}
