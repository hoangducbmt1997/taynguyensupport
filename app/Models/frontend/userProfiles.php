<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class userProfiles extends Model
{
    use HasFactory;
     protected $table ='tbl_profiles';
    protected $primarykey ='id';
    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
