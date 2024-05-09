<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinical_medicineposts extends Model
{
   protected $fillable = [
        'image',
        'content',
    ];
}
