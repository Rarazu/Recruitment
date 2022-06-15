<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * Misalkan nama model: User (bentuk tunggal)
 * Berarti tabel yang dimaksud: users (bentuk jamak)
 * 
 * Misalkan nama model: Product (bentuk tunggal)
 * Berarti tabel yang dimaksud: products (bentuk jamak)
 * 
 * Misalkan nama model: FlightTime (bentuk tunggal)
 * Berarti tabel yang dimaksud: flight_times (bentuk jamak)
 * 
 * Misalkan nama model: PasswordReset (bentuk tunggal)
 * Berarti tabel yang dimaksud: password_resets (bentuk jamak)
 */

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
