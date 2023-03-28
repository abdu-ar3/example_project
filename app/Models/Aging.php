<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aging extends Model
{
    use HasFactory;

    public function areas()
    {
        return $this->belongsTo(Area::class);
    }
}
