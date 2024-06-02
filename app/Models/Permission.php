<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $fillable = [
        'model',
        'action',
    ];

    public function roles(){
        return $this->hasManyThrough(Role::class, 'role_permission');
        
    }
}