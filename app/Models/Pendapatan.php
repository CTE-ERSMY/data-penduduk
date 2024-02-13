<?php

namespace App\Models;

use App\Models\MaklumatPemohon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pendapatan extends Model
{
    use HasFactory;

    protected $table = 'pendapatan';

    protected $fillable = [
        'jawatan',
        'gaji',
        'majikan',
        'jawatan_psgn',
        'gaji_psgn',
        'majikan_psgn',
        'sumbangan_anak',
        'sumbangan_saudara',
        'sampingan',
        'sumbangan_agensi',
    ];

    public function pemohon()
    {
        return $this->belongsTo(MaklumatPemohon::class);
    }
}
