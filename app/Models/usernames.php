<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\username;

class usernames extends Model
{
    // use HasFactory;
    protected $fillable = ['firstname','lastname'];
}
