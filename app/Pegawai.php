<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    //
    protected $table = 'pegawai';
    protected $fillable = [
        'pegawai_nip', 'pegawai_nama', 'pegawai_pangkat', 'pegawai_jabatan','pegawai_tpp_maksimal'
    ];

}
