<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $with =["aventures"];

    protected $fillable = ['photos', 'id'];

    public function aventures(){
        return $this->belongsTo(Aventure::class,'aventure_id');
    }
}