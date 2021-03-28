<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Truyen extends Model
{
    protected $table = 'truyen';
    protected $primaryKey = 'ma_truyen';
    public $timestamps = 'false';

    protected $fillable = [
        'ten',
        'ten_url',
        'tac_gia',
        'xuat_xu',
        'anh_bia',
        'ngay_dang',
        'gioi_thieu_truyen',
        'ma_the_loai',
        'ma_danh_muc'
    ];

    public function theloai() {
        return $this->hasOne(TheLoai::class,'ma_the_loai','ma_the_loai');
    }

    public function danhmuc() {
        return $this->hasOne(DanhMuc::class,'ma_danh_muc','ma_danh_muc');
    }
    public function chuong() {
        return $this->hasMany(Chuong::class,'ma_truyen','ma_truyen');
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
