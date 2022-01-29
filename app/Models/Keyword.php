<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    use HasFactory;

    protected $table = 'keyword';
    protected $primaryKey = 'id';

    protected $fillable = [
        "word"
    ];

    public function dream()
    {
        return $this->belongsToMany(Dream::class, 'dreamkeyword');
    }
}
