<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Broudact extends Model
{
    use HasFactory;
    protected $fillable = [
        'brodact_id',
        'category_id',
        'brodact_name',
        'image',
    ];
}
