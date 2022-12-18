<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motels extends Model
{
    use HasFactory;
     protected $table ='tbl_motels';
    protected $primarykey ='id';
    protected $guarded=[];
}
