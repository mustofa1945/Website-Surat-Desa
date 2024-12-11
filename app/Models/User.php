<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Role;
use App\Models\Artikel;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

   use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    
    public function artikels(){
        return $this->belongsToMany(Artikel::class , 'pivot' , 'user_id' , 'artikel_id');
    }
    public function hasRole($role_id){
        return $this->role_id === $role_id;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'departement',
        'phone_number'
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


}
