<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JumlahKifayah extends Model
{
    use HasFactory;

    protected $table = 'jumlah_kifayah';

    protected $fillable = [
        'maklumat_pemohon_id',
        'jumlah_tanggungan',
        'jumlah_penambahan',
        'jumlah_penolakan',
        'jumlah_kifayah',
        'keputusan',
    ];

    public function pemohon()
    {
        return $this->belongsTo(MaklumatPemohon::class);
    }

}
