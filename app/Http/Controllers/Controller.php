<?php

namespace App\Http\Controllers;

use App\RoleFilterHelper;

abstract class Controller
{
    use RoleFilterHelper;
    //

    public function show(string $any){
        return redirect()->route('dashboard')->with('message', "{$any} can not be shown!");
     }
}