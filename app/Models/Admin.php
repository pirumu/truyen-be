<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    protected $table = 'admin';
    protected $primaryKey = 'ma_admin';
    public $timestamps = 'false';
    protected $rememberTokenName = 'ghi_nho_dang_nhap';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'mat_khau',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'mat_khau', 'ghi_nho_dang_nhap',
    ];

    public function getAuthPassword(){
        return $this->mat_khau;
    }
}
