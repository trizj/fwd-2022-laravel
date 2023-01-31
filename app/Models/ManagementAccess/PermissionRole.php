<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermissionRole extends Model
{
    //use HasFactory;
    use SoftDeletes;

    //declare table
    public $table="PermissionRole";

    // this field must type date yyyy-mm-dd hh:mm:ss
     protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable fields
    protected $fillable = [
        'permission_id',
        'role_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    //one to many
    public function permission()
    {
        //3 parameter(path models,fiels foreign key,filed primary key from table hasmany/hasone)
        return  $this->belongTo('app\Models\ManagementAccess\Permission'.'permission_id'.'id');
    }

    //one to many
    public function Role()
    {
        //3 parameter(path models,fiels foreign key,filed primary key from table hasmany/hasone)
        return  $this->belongTo('app\Models\ManagementAccess\Role'.'Role_id'.'id');
    }
}
