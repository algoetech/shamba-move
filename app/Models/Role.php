<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Undocumented class
 *
 * @method \lluminate\Database\Eloquent\Relations\HasMany|null users()
 */
class Role extends Model
{
    use HasFactory;

    public $permissionsAll;

    protected $fillable = [
        'name',
        'guard'
    ];

    public function __construct() {
        $this->permissionsAll = $this->permissions();
    }

    /**
     * - track the users with the given role instance
     *
     * @return HasMany|null
     */
    public function users() : HasMany|null {
        return $this->hasMany(User::class);
    }

    public function permissions(){
        return $this->belongsToMany(Permission::class, 'role_permission');
    }
}