<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrontImgModel extends Model
{
    use HasFactory;
    protected $table = 'frontimg_tbl';
    protected $fillable = ['front_title','front_file'];
}
