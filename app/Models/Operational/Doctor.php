<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    //use HasFactory;
    use SoftDeletes;

    //declare table
    public $table="Doctor";

    // this field must type date yyyy-mm-dd hh:mm:ss
     protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable fields
    protected $fillable = [
        'specialist_id',
        'user_id',
        'name',
        'fee',
        'photo',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    //one to many
     public function Specialist()
    {
        //3 parameter(path models,fiels foreign key)
        return  $this->belongTo('app\Models\Masterdata\specialist'.'specialist_id'.'id');
    }

     
    // one to many
    public function appointment()
    {
        return $this->hasMany('App\Models\Operational\appointment', 'doctor_id');
    }

}
