<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aventure extends Model
{
    use HasFactory;

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'description',
        'photos',
        'conseils',
        'date',
    ];

    public function images(){
        return $this->hasMany(Image::class);
    }


    public function Destination(){
        return $this->belongsTo(Destination::class);
    }

}
