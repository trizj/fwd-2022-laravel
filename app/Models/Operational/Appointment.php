<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    //use HasFactory;
    use SoftDeletes;

    //declare table
    public $table="Appointment";

    // this field must type date yyyy-mm-dd hh:mm:ss
     protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable fields
    protected $fillable = [
        'doctor_id',
        'user_id',
        'consultation_id',
        'level',
        'date',
        'time',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    //one to many
    public function Doctor()
    {
        //3 parameter(path models,fiels foreign key)
        return  $this->belongTo('app\Models\Operational\doctor'.'doctor_id'.'id');
    }

    //one to many
    public function Consultion()
    {
        //3 parameter(path models,fiels foreign key)
        return  $this->belongTo('app\Models\Masterdata\Consultation'.'consultation_id'.'id');
    }

    //one to many
    public function User()
    {
        //3 parameter(path models,fiels foreign key)
        return  $this->belongTo('app\Models\User'.'user_id','id');
    }


    // one to many
    public function transaction()
    {
        return $this->hasOney('App\Models\Operational\Transaction', 'appointment_id');
    }
}
