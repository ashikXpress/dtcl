<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'sort', 'image', 'heading', 'subheading'
    ];
}
