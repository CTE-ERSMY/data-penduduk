<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HadPenolakan extends Model
{
    use HasFactory;

    protected $table = 'had_penolakan';

    protected $fillable = [
        'int_kereta_mahal',
        'int_kereta_murah',
        'int_telefon_bimbit',
        'int_emas',
        'int_astro',
        'int_aircond',
        'int_radio',
        'int_simpanan',
        'int_home_theater',
        'int_perokok',
        'kereta_mahal',
        'kereta_murah',
        'telefon_bimbit',
        'emas',
        'astro',
        'aircond',
        'radio',
        'simpanan',
        'home_theater',
        'perokok',
    ];

    public function pemohon()
    {
        return $this->belongsTo(MaklumatPemohon::class);
    }
}
