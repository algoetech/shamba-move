<?php

namespace App;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

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
    public function hasAccess($action){
        // dd(auth()->user()->role->hasPermission('User_create'), $action);
        abort_unless(auth()->user()->role->hasPermission($action), Response::HTTP_FORBIDDEN, 'You do not have permission on this');
    }
}