<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{

    //uses posts table

    use SoftDeletes;
    protected $fillable = ['title', 'body', 'enabled'];
    
}
