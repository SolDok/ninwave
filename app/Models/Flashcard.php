<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class flashcard extends Model
{
    use HasFactory;

    protected $fillable = [
        'word',
        'reading',
        'translate',
        'img_path',
    ];
}
