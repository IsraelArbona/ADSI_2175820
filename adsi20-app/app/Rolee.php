<?php

namespace App;

use Spatie\Permission\Models\Permission;
use Illuminate\Database\Eloquent\Model;

class Rolee extends Model
{
    protected $table = 'roles';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
        'guard_name',
    ];

    public function permissions(){
        return $this->belongsToMany(
            Permission::class,
            'role_has_permissions',
            'role_id',
            'permission_id'
        );
    }
}
