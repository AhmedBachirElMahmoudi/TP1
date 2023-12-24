<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StagiaireModel extends Model
{
    use HasFactory;

    protected $table = 'stagiaires';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'section',
        'image'
    ];


}
