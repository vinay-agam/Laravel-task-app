<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Description;

class Task extends Model
{
    protected $fillable = ['title', 'description'];
}
