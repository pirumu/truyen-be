<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DanhMuc extends Model
{
    protected $table = 'danh_muc';
    protected $primaryKey = 'ma_danh_muc';
    public $timestamps = 'false';

    protected $fillable = [
        'ten_danh_muc',
        'ten_danh_muc_url'
    ];
    public function truyen() {

        return $this->hasMany(Truyen::class,'ma_danh_muc','ma_danh_muc');
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
