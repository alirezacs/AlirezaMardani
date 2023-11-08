<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory, HasUlids;

    protected $table = 'skills';

    protected $fillable = [
        'name',
        'percent',
        'description',
        'is_active'
    ];
}
