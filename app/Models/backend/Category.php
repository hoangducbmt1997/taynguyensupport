<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table ='tbl_categories';
    protected $fillable = [
        'category_name', 'category_slug'
    ];
    protected $guarded=[];


}
