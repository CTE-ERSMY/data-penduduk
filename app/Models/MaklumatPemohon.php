<?php

namespace App\Models;

use App\Models\Waris;
use App\Models\Pendapatan;
use App\Models\Perbelanjaan;
use App\Models\SejarahBantuan;
use App\Models\MaklumatPasangan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MaklumatPemohon extends Model
{
    use HasFactory;

    protected $table = 'maklumat_pemohon';

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
    public function pasangan()
    {
        return $this->hasOne(MaklumatPasangan::class);
    }
    public function pendapatan()
    {
        return $this->hasOne(Pendapatan::class);
    }
    public function waris()
    {
        return $this->hasMany(Waris::class);
    }
    public function perbelanjaan()
    {
        return $this->hasOne(Perbelanjaan::class);
    }
    public function harta()
    {
        return $this->hasOne(harta::class);
    }
    public function hadTanggungan()
    {
        return $this->hasMany(HadTanggungan::class);
    }
    public function hadPenolakan()
    {
        return $this->hasOne(HadPenolakan::class);
    }
    public function hadPenambahan()
    {
        return $this->hasOne(HadPenambahan::class);
    }
    public function JumlahKifayah()
    {
        return $this->hasOne(JumlahKifayah::class);
    }
    public function SejarahBantuan()
    {
        return $this->hasOne(SejarahBantuan::class);
    }
}
