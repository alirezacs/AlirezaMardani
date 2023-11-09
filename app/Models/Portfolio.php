<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory, HasUlids;

    protected $table = 'portfolios';

    protected $fillable = [
        'title',
        'image',
        'technology',
        'link',
        'description',
        'is_active'
    ];
}
