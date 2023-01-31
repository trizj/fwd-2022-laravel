<?php

namespace App\Models\Masterdata;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeUser extends Model
{
    //use HasFactory;
    use SoftDeletes;

    //declare table
    public $table="TypeUser";

    // this field must type date yyyy-mm-dd hh:mm:ss
     protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable fields
    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    
    //one to many
    public function detail_user()
    {
        //2parameter(path models,fiels foreign key);
        return $this->hasMany('App\Models\ManagementAccess\DetailUser','type_user_id');
    }
}
