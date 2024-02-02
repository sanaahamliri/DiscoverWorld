<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aventure extends Model
{
    protected $fillable = ['description', 'conseils', 'destination_id', 'photos'];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}

