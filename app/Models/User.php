<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\RoleFilterHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
// use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

/**
 * @class \App\Models\User
 * - User model class for accessing users in database
 *
 * @property string $name
 * @property string $email
 * @property string|null $firt_name
 * @property string|null $last_name
 * @property string|null $bio
 * @property string $profile_picture
 *
 * @method \Illuminate\Database\Eloquent\Relations\HasMany posts()
 * @method \Illuminate\Database\Eloquent\Relations\BelongsTo role()
 *
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;



    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'first_name',
        'last_name',
        'bio',
        'role_id',
        'profile_picture',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    /**
     * Get the attributes that should be cast.
     *
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function withRoleRelation()
    {
        return $this->load('role');
    }


    public function posts() : HasMany {
        return $this->hasMany(Post::class);
    }

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function hasRole($roles)
    {
        $userRole = $this->role->name;
        if (is_array($roles)) {
            return in_array($userRole, $roles);
        }

        return $userRole === $roles;
    }

    public function hasAccess($action){
        if ($this->role->hasPermission($action)) {
            return true;
        }
        return false;
    }


 }