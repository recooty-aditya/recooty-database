<?php

namespace Recooty\Database\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Test extends Model
{
    use HasFactory;

    protected $fillable = ['test_name'];
}
