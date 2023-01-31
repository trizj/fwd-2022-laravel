<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
    //use HasFactory;
    use SoftDeletes;

    //declare table
    public $table="detail_user";

    // this field must type date yyyy-mm-dd hh:mm:ss
     protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable fields
    protected $fillable = [
        'user_id',
        'type_user_id',
        'contact',
        'address',
        'photo',
        'gender',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    //one to many
    public function type_user()
    {
        //3 parameter(path models,fiels foreign key,filed primary key from table hasmany/hasone)
        return  $this->belongTo('app\Models\Masterdata\TypeUser'.'type_user_id'.'id');
    }

    //one to many
    public function user()
    {
        //3 parameter(path models,fiels foreign key,filed primary key from table hasmany/hasone)
        return  $this->belongTo('app\Models\User'.'user_id'.'id');
    }
}
