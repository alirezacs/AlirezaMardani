<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory, HasUlids;

    protected $table = 'comments';

    protected $fillable = [
        'name',
        'avatar',
        'description',
        'position',
        'is_active'
    ];
}
