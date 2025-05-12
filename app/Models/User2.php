<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User2 extends Model
{
    use HasFactory;

    protected $primaryKey = 'numero';
    protected $table = 'user2s';
    public $incrementing = false;
    protected $keyType = 'int';
    protected $fillable = [
        'nom',
        'numero',
        'nbjour',
        'taux',
    ];

}
