<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HadTanggungan extends Model
{
    use HasFactory;

    protected $table = 'had_tanggungan';

    protected $fillable = [
        'butiran_tanggungan',
        'jumlah_tanggungan',
    ];

    public function pemohon()
    {
        return $this->belongsTo(MaklumatPemohon::class);
    }
}
