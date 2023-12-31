<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boxie extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'type'];

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function groupies()
    {
        return $this->belongsToMany(Groupie::class, 'groupies_boxies');
    }
}
