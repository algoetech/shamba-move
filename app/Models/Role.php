<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Permission\Models\Role as ModelsRole;
use Spatie\Permission\Traits\HasPermissions;

/**
 * Undocumented class
 *
 * @method \lluminate\Database\Eloquent\Relations\HasMany|null users()
 */
class Role extends ModelsRole
{

    use HasFactory, HasPermissions;

    public function perms(){
        return $this->hasMany(Permission::class);
    }

    public function hasPermission($p){
        return $this->hasAnyPermission($p);
    }

}