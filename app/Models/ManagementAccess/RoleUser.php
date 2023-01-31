<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class RoleUser extends Model
{
    //use HasFactory;
    use SoftDeletes;

    //declare table
    public $table="RoleUser";

    // this field must type date yyyy-mm-dd hh:mm:ss
     protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable fields
    protected $fillable = [
        'role_id',
        'user_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    //one to many
    public function type_user()
    {
        //3 parameter(path models,fiels foreign key,filed primary key from table hasmany/hasone)
        return  $this->belongTo('app\Models\User'.'user_id'.'id');
    }

    //one to many
    public function Role()
    {
        //3 parameter(path models,fiels foreign key,filed primary key from table hasmany/hasone)
        return  $this->belongTo('app\Models\ManagementAccess\Role'.'Role_id'.'id');
    }
}
