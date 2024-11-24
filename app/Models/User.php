<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements FilamentUser
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'password',
        'email',
        'Access',
        'Age',
        'Gender',
        'DateCreated',
        'LastLogin',
        'Settings',
        'RegisterAddress',
        'SocketAddress',
        'WebAddress',
        'Token',
        'Avatar'
    ];
    const CREATED_AT = 'DateCreated';
    const UPDATED_AT = 'LastLogin';
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
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return ($this->Access >= 40);
    }

    public function isAdmin(): bool
    {
        return ($this->Access >= 60);
    }

    public function isOwner(): bool
    {
        return ($this->Access >= 100);
    }

    public function getGeneratedPhotoAttribute()
    {
        return $this->Avatar != null ? asset("assets/account/{$this->id}/displays/{$this->Avatar}") : asset('/images/display/sigma.jpg');
    }

}