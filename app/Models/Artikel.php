<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikel';

    public function users(){
        return $this->belongsToMany(User::class , 'pivot' , 'artikel_id' , 'user_id');
    }

    public function getCreatedAtForHumansAttribute()
    {
        return Carbon::parse($this->created_at)->diffForHumans();
    }
    protected $fillable = [

    ];
}
