<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suivi extends Model
{
    use HasFactory;
    protected $fillable=[
        'step_1',
        'step_2',
        'step_3',
        'step_4',
        'step_5',
    ];
}
