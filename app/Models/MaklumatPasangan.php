<?php

namespace App\Models;

use App\Models\MaklumatPemohon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MaklumatPasangan extends Model
{
    use HasFactory;

    protected $table = 'maklumat_pasangan';

    protected $fillable = [
        'nama',
        'ic',
        'jantina',
        'tarikh_lahir',
        'status',
        'mental',
        'islam',
        'fizikal',
        'alamat',
        'poskod',
        'bandar',
        'nombor_rumah',
        'nombor_bimbit',
    ];

    public function pemohon()
    {
        return $this->belongsTo(MaklumatPemohon::class);
    }
}
