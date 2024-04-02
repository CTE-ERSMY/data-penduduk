<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class harta extends Model
{
    use HasFactory;

    protected $table = 'harta';

    protected $fillable = [
        'status_kediaman',
        'jenis_kediaman',
        'kemudahan',
        'bilik',
        'kemudahan_tambahan',
        'nilai_kediaman',
        'bulanan',
        'rumah',
        'nilai_rumah',
        'tanah',
        'nilai_tanah',
        'kenderaan',
        'nilai_kenderaan',
        'astro',
        'nilai_astro',
        'nilai_barang_kemas',
        'nilai_simpanan',
        'lain',
        'nilai_lain',
    ];

    public function pemohon()
    {
        return $this->belongsTo(MaklumatPemohon::class);
    }
}
