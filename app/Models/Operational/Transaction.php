<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    //use HasFactory;
    use SoftDeletes;

    //declare table
    public $table="Transaction";

    // this field must type date yyyy-mm-dd hh:mm:ss
     protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable fields
    protected $fillable = [
        'appointment_id',
        'transaction_code',
        'fee_doctor',
        'fee_specialist',
        'fee_hospital',
        'sub_total',
        'vat',
        'total',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

}
