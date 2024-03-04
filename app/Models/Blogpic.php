<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogpic extends Model
{
    use HasFactory;
    protected $table = 'blogpics';
    protected $fillable = ['blog_title','blog_file','blog_detail'];
}
