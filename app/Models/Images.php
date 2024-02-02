<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $with =["post"];

    protected $fillable = ['photos', 'id'];

    public function post(){
        return $this->belongsTo(Aventure::class);
    }
}