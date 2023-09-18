<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'package';
    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function payment()
    {
        return $this->hasMany(Payment::class, 'id');
    }

    public function body_profile()
    {
        return $this->hasOne(Body_profile::class, 'package_id');
    }
    public function food_programm(){
        return $this->hasMany(Food_programm::class);
    }
    public function train_programm(){
        return $this->hasMany(Train_programm::class);
    }

    public function type_programm(){
        switch ($this->attributes['type']){
            case '1':
                return 'برنامه ی معمولی';
                break;
            case '2':
                return 'برنامه ی قهرمانی';
                break;
            case '3':
                return 'برنامه ی دیابتی';
                break;
                case '4':
                return 'برنامه ی خصوصی';
                break;
        }
    }
    public function Collection_programm(){
        switch ($this->attributes['Collection']){
            case '1':
                return 'برنامه ی غذایی';
                break;
            case '2':
                return 'برنامه ی تمرینی';
                break;
            case '3':
                return 'برنامه ی غذایی + برنامه ی تمرینی';
                break;

        }
    }



    use HasFactory;
}
