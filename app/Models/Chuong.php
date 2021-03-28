<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chuong extends Model
{
    protected $table = 'chuong';
    protected $primaryKey = 'ma_chuong';
    public $timestamps = 'false';

    protected $fillable = [
        'ten_chuong',
        'ten_url',
        'ma_truyen',
        'noi_dung'
    ];

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
