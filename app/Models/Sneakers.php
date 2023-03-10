<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sneakers extends Model
{
    use HasFactory;
    protected $fillable = [
        'model',
        'color',
        'releaseYear'
    ];

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
