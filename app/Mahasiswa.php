<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table        = 'mahasiswa';
    protected $fillabel     = ['user_id', 'npm', 'tempat_lahir', 'tgl_lahir', 'gender', 'telepon', 'alamat'];
    public    $timestamps   = false;
}
