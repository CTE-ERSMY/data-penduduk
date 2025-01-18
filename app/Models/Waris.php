<?php

namespace App\Models;

use App\Models\MaklumatPemohon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Waris extends Model
{
    use HasFactory;

    protected $table = 'waris';

    protected $fillable = [
        'maklumat_pemohon_id',
        'nama',
        'ic',
        'umur',
        'hubungan',
        'status',
        'kerja',
        'fizikal',
        'mental',
        'pendapatan',
        'serumah'
    ];

    public function pemohon()
    {
        return $this->belongsTo(MaklumatPemohon::class);
    }
}

