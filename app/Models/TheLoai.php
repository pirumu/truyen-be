<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
    protected $table = 'the_loai';
    protected $primaryKey = 'ma_the_loai';
    public $timestamps = 'false';

    protected $fillable = [
        'ten_the_loai',
        'ten_url'
    ];
    public function truyen() {

       return $this->hasMany(Truyen::class,'ma_the_loai','ma_the_loai');
    }

    public function setCreateddAt($value)
    {
        //Do-nothing
    }

    public function getCreatedAtColumn()
    {
        //Do-nothing
    }
    public function setUpdatedAt($value)
    {
        //Do-nothing
    }

    public function getUpdatedAtColumn()
    {
        //Do-nothing
    }
}
