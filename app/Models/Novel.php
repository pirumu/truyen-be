<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Novel extends Model
{
    protected $primaryKey = 'novel_id';

    protected $fillable = [];

    public function usersLike() {
        return $this->belongsToMany(User::class,'users_like_novels','user_id','novel_id');
    }

    public function usersRead() {
        return $this->belongsToMany(User::class,'users_read','user_id','novel_id');
    }

//    public function usersVote() {
//        return $this->belongsToMany(User::class,'','','');
//    }

    public function chapters() {
        return $this->hasMany(Chapter::class, 'novel_id', 'novel_id');
    }
}
