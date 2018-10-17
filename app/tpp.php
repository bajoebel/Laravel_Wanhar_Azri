<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tpp extends Model
{
    //
    protected $table = 'hpp';
    protected $fillable = [
        'tpp_pegawai_id',
		'tpp_tahun',
		'tpp_bulan',
		'tpp_harikerja',
		'tpp_hadir',
		'tpp_izin',
		'tpp_cuti',
		'tpp_tanpaalasan',
		'tpp_terlambat',
		'tpp_cepatpulang',
		'tpp_uwas',
		'tpp_upacara',
		'tpp_skp',
		'tpp_pelayanan',
		'tpp_integritas',
		'tpp_komitmen',
		'tpp_disiplin',
		'tpp_kerjasama',
		'tpp_kepemimpinan'
    ];
}
