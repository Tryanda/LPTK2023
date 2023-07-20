<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    protected $fillable = [
        'name',
        'email',
        'nip',
        'place_of_birth',
        'day_of_birth',
        'status',
        'gender',
        'nidn',
        'file',
        'cabor_id',
        'university',
        'email_verified_at',
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
        'password' => 'hashed',
    ];


    public function isAdministrator(): bool
    {
        return $this->hasRole(RoleEnum::ADMINISTRATOR);
    }

    public function isVerifikator(): bool
    {
        return $this->hasRole(RoleEnum::VERIFIKATOR);
    }

    public function isManager(): bool
    {
        return $this->hasRole(RoleEnum::MANAGER);
    }
}
