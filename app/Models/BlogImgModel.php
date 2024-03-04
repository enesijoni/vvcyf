<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogImgModel extends Model
{
    use HasFactory;
    protected $table = 'blog_img_tbl';
    protected $fillable = ['blog_title','blog_file','blog_detail'];
}
