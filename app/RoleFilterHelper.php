<?php

namespace App;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


/**
 * Undocumented trait
 *
 * @method bool hasAccess($action)
 */
trait RoleFilterHelper
{

    public $modelName = __CLASS__;

    /**
     * Undocumented function
     *
     * @param string $action
     * @return boolean
     */
    public function hasAccess($model, $action){
        $role = Role::where('id', '=', Auth::user()->role_id)->with('permissions')->get();
        dd($role->permissions);
        if (Auth::check() && $role->permissions->action == $action && Auth::user()->role->permission->model == $model) {
            return true;
        }
        return false;
    }
}