<?php

namespace App\Models;

use App\Models\MaklumatPemohon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Perbelanjaan extends Model
{
    use HasFactory;

    protected $table = 'perbelanjaan';

    protected $fillable = [
        'makan',
        'perubatan',
        'bil',
        'pengangkutan',
        'sewa_rumah',
        'persekolahan',
        'lain',
    ];
    
    public function pemohon()
    {
        return $this->belongsTo(MaklumatPemohon::class);
    }
}
