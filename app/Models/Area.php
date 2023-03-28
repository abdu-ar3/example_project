<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    public function periode()
    {
        return $this->belongsTo(Periode::class);
    }

    public function aging()
    {
        return $this->hasMany(Aging::class);
    }
}
