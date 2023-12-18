<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'owner_id',
        'boxie_id',
        'bestbefore'
    ];

    // Your item model definition
    public function boxie()
    {
        return $this->belongsTo(Boxie::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
