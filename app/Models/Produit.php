<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $filable = [
        'title',
        'description'
    ];
}
