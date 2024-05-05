<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HadPenambahan extends Model
{
    use HasFactory;

    protected $table = 'had_penambahan';

    protected $fillable = [
        'int_kos_kronik',
        'int_cacat_semulajadi',
        'int_cacat_mendatang',
        'int_ibu_bapa',
        'int_ibu_tinggal',
        'int_masalah_keluarga',
        'int_ibu_tunggal',
        'kos_kronik',
        'cacat_semulajadi',
        'cacat_mendatang',
        'ibu_bapa',
        'ibu_tinggal',
        'masalah_keluarga',
        'ibu_tunggal',
    ];

    public function pemohon()
    {
        return $this->belongsTo(MaklumatPemohon::class);
    }}
