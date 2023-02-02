<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
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
        return $this->belongsTo(Gender::class);
    }

    public function role() {
        return $this->belongsTo(Role::class);
    }

    public function cart() {
        return $this->HasOne(Cart::class);
    }
}
