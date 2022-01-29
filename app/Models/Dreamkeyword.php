<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dreamkeyword extends Model
{
    protected $table = 'dreamkeyword';
    use HasFactory;
    public function dream()
    {
        return $this->belongsTo(Dream::class);
    }
    public function keyword()
    {
        return $this->belongsTo(Keyword::class);
    }
}
