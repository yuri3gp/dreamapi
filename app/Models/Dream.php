<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dream extends Model
{
    use HasFactory;

    protected $table = 'dream';

    protected $fillable = [
        "title","dream"
    ];

    public function keyword()
    {
        return $this->belongsToMany(Keyword::class, 'dreamkeyword');
    }
    public function design()
    {
        return $this->hasMany(Design::class);
    }
}
