<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory, HasUlids;

    protected $table = 'experiences';

    protected $fillable = [
        'as',
        'at',
        'started_at',
        'ended_at',
        'description',
        'present',
        'is_active'
    ];
}
