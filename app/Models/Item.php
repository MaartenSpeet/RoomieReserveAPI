<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

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
