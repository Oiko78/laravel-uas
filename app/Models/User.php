<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [
        'role_id', 'gender_id', 'first_name', 'last_name', 'email', 'password', 'display_picture'
    ];

    protected $hidden = [
        'password',
    ];

    public function gender() {
        return $this->hasOne(Gender::class);
    }

    public function role() {
        return $this->hasOne(Role::class);
    }
}
