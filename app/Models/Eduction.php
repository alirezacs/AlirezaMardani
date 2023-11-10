<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eduction extends Model
{
    use HasFactory, HasUlids;

    protected $table = 'eductions';

    protected $fillable = [
        'title',
        'in',
        'degree',
        'description',
        'is_active',
        'started_at',
        'ended_at'
    ];
}
