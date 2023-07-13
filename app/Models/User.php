<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'department_name'
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Bcrypt Password
     */
    protected function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    /**
     * Filter Model for User
     */
    public function scopeFilter($query, $filter)
    {
        $query->when($filter["name"] ?? false, function ($query, $name) {
            $query->where('name', 'LIKE', '%' . $name . '%');
        });
        $query->when($filter["department_name"] ?? false, function ($query, $dep_name) {
            $query->where('department_name', $dep_name);
        });
        $query->when($filter["role"] ?? false, function ($query, $role) {
            $query->whereHas('roles', function ($q) use ($role) {
                $q->where('name', $role);
            });
        });
    }
}
