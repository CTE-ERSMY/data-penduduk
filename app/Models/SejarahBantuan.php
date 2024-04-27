<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SejarahBantuan extends Model
{
    use HasFactory;

    protected $table = 'sejarah_bantuan';

    protected $fillable = [
        'file_name',
        'file_path',
        'nama_bantuan',
        'no_akaun',
        'tarikh_mohon',
        'tarikh_lulus',
        'tarikh_mula',
        'jumlah_lulus',
        'status_bantuan',
        'catatan',
    ];

    public function pemohon()
    {
        return $this->belongsTo(MaklumatPemohon::class);
    }
}
