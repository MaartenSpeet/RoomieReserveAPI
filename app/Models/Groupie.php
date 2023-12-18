<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupie extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_groupies');
    }

    public function boxies()
    {
        return $this->belongsToMany(Boxie::class, 'groupies_boxies');
    }
}
