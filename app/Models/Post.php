<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // $fillable when we have to tell laravel which columns we are going to fill
    // protected $fillable = ['title','description', 'is_publish' , 'is_active'];
    // guarded
    protected $guarded = [];
}
