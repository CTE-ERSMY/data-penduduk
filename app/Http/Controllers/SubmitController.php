<?php

namespace App\Http\Controllers;

use App\Models\harta;
use App\Models\Waris;
use App\Models\Pendapatan;
use App\Models\Perbelanjaan;
use Illuminate\Http\Request;
use App\Models\MaklumatPemohon;
use App\Models\MaklumatPasangan;

class SubmitController extends Controller
{   
    public function pemohonView()
    {
        return view ('pemohonBaru'); 
    }
    public function pemohonSubmit(Request $request)
    {   
        $validatedData = $request->validate([
            // Validation rules for pemohon
            'nama' => 'required|string',
            'ic' => 'required|numeric|digits:12|',
            'jantina' => 'nullable|in:Lelaki,Wanita',
            'tarikh_lahir' => 'nullable|date',
            'status' => 'nullable|string',
            'mental' => 'nullable|in:Waras,Tidak Waras',
            'islam' => 'nullable|in:Baik,Kurang Baik',
            'fizikal' => 'nullable|string',
            'alamat' => 'nullable|string',
            'poskod' => 'nullable|numeric',
            'bandar' => 'nullable|string',
            'nombor_rumah' => 'nullable|numeric',
            'nombor_bimbit' => 'nullable|numeric',
            
            // Validation rules for pasangan
            'nama_pasangan' => 'nullable|string',
            'ic_pasangan' => 'nullable|numeric|digits:12',
            'jantina_pasangan' => 'nullable|in:Lelaki,Wanita',
            'tarikh_lahir_pasangan' => 'nullable|date',
            'status_pasangan' => 'nullable|string',
            'mental_pasangan' => 'nullable|in:Waras,Tidak Waras',
            'islam_pasangan' => 'nullable|in:Baik,Kurang Baik',
            'fizikal_pasangan' => 'nullable|string',
            'alamat_pasangan' => 'nullable|string',
            'poskod_pasangan' => 'nullable|numeric',
            'bandar_pasangan' => 'nullable|string',
            'nombor_rumah_pasangan' => 'nullable|numeric',
            'nombor_bimbit_pasangan' => 'nullable|numeric',
            
            // Validation rules for pendapatan
            'jawatan' => 'nullable|string',
            'gaji' => 'nullable|numeric|min:0',
            'majikan' => 'nullable|string',
            'jawatan_psgn' => 'nullable|string',
            'gaji_psgn' => 'nullable|numeric|min:0',
            'majikan_psgn' => 'nullable|string',
            'sumbangan_anak' => 'nullable|numeric|min:0',
            'sumbangan_saudara' => 'nullable|numeric|min:0',
            'sampingan' => 'nullable|numeric|min:0',
            'sumbangan_agensi' => 'nullable|numeric|min:0',
            
            // Validation rules for perbelanjaan
            'makan' => 'nullable|numeric|min:0',
            'perubatan' => 'nullable|numeric|min:0',
            'bil' => 'nullable|numeric|min:0',
            'pengangkutan' => 'nullable|numeric|min:0',
            'sewa_rumah' => 'nullable|numeric|min:0',
            'persekolahan' => 'nullable|numeric|min:0',
            'lain' => 'nullable|numeric|min:0',
            
            // Validation rules for harta
            'status_kediaman' => 'nullable|string',
            'jenis_kediaman' => 'nullable|string',
            'kemudahan' => 'nullable|string',
            'bilik' => 'nullable|numeric|min:0',
            'kemudahan_tambahan' => 'nullable|string',
            'nilai_kediaman' => 'nullable|numeric|min:0',
            'bulanan' => 'nullable|numeric|min:0',
            'rumah' => 'nullable|numeric|min:0',
            'nilai_rumah' => 'nullable|numeric|min:0',
            'tanah' => 'nullable|numeric|min:0',
            'nilai_tanah' => 'nullable|numeric|min:0',
            'kenderaan' => 'nullable|numeric|min:0',
            'nilai_kenderaan' => 'nullable|numeric|min:0',
            'astro' => 'nullable|numeric|min:0',
            'nilai_astro' => 'nullable|numeric|min:0',
            'barang_kemas' => 'nullable|numeric|min:0',
            'simpanan' => 'nullable|numeric|min:0',
            'lain_lain' => 'nullable|numeric|min:0',
            'nilai_lain' => 'nullable|numeric|min:0',
        ]);

            $pemohon = MaklumatPemohon::create([
                'nama' => $validatedData['nama'],
                'ic' => $validatedData['ic'],
                'jantina' => $validatedData['jantina'] ?? null,
                'tarikh_lahir' => $validatedData['tarikh_lahir'] ?? null,
                'status' => $validatedData['status'] ?? null,
                'mental' => $validatedData['mental'] ?? null,
                'islam' => $validatedData['islam'] ?? null,
                'fizikal' => $validatedData['fizikal'] ?? null,
                'alamat' => $validatedData['alamat'] ?? null,
                'poskod' => $validatedData['poskod'] ?? null,
                'bandar' => $validatedData['bandar'] ?? null,
                'nombor_rumah' => $validatedData['nombor_rumah'] ?? null,
                'nombor_bimbit' => $validatedData['nombor_bimbit'] ?? null,
            ]);

        // Create MaklumatPasangan
        if (!empty($validatedData['nama_pasangan']) || !empty($validatedData['ic_pasangan']) ) {
        $pasangan = MaklumatPasangan::create([
            'maklumat_pemohon_id' => $pemohon->id,
            'nama' => $validatedData['nama_pasangan'],
            'ic' => $validatedData['ic_pasangan'],
            'jantina' => $validatedData['jantina_pasangan'],
            'tarikh_lahir' => $validatedData['tarikh_lahir_pasangan'],
            'status' => $validatedData['status_pasangan'],
            'mental' => $validatedData['mental_pasangan'],
            'islam' => $validatedData['islam_pasangan'],
            'fizikal' => $validatedData['fizikal_pasangan'],
            'alamat' => $validatedData['alamat_pasangan'],
            'poskod' => $validatedData['poskod_pasangan'],
            'bandar' => $validatedData['bandar_pasangan'],
            'nombor_rumah' => $validatedData['nombor_rumah_pasangan'],
            'nombor_bimbit' => $validatedData['nombor_bimbit_pasangan'],
        ]);
    }

        $pendapatan = Pendapatan::create([
            'maklumat_pemohon_id' => $pemohon->id,
            'jawatan' => $validatedData['jawatan'],
            'gaji' => $validatedData['gaji'],
            'majikan' => $validatedData['majikan'],
            'jawatan_psgn' => $validatedData['jawatan_psgn'],
            'gaji_psgn' => $validatedData['gaji_psgn'],
            'majikan_psgn' => $validatedData['majikan_psgn'],
            'sumbangan_anak' => $validatedData['sumbangan_anak'],
            'sumbangan_saudara' => $validatedData['sumbangan_saudara'],
            'sampingan' => $validatedData['sampingan'],
            'sumbangan_agensi' => $validatedData['sumbangan_agensi'],
            'maklumat_pemohon_id' => $pemohon->id,
        ]);
        // Create Perbelanjaan
        $perbelanjaan = Perbelanjaan::create([
            'maklumat_pemohon_id' => $pemohon->id,
            'makan' => $validatedData['makan'],
            'perubatan' => $validatedData['perubatan'],
            'bil' => $validatedData['bil'],
            'pengangkutan' => $validatedData['pengangkutan'],
            'sewa_rumah' => $validatedData['sewa_rumah'],
            'persekolahan' => $validatedData['persekolahan'],
            'lain' => $validatedData['lain'],
            'maklumat_pemohon_id' => $pemohon->id,
        ]);

        // Create Harta
        $harta = Harta::create([
            'maklumat_pemohon_id' => $pemohon->id,
            'status_kediaman' => $validatedData['status_kediaman'],
            'jenis_kediaman' => $validatedData['jenis_kediaman'],
            'kemudahan' => $validatedData['kemudahan'],
            'bilik' => $validatedData['bilik'],
            'kemudahan_tambahan' => $validatedData['kemudahan_tambahan'],
            'nilai_kediaman' => $validatedData['nilai_kediaman'],
            'bulanan' => $validatedData['bulanan'],
            'rumah' => $validatedData['rumah'],
            'nilai_rumah' => $validatedData['nilai_rumah'],
            'tanah' => $validatedData['tanah'],
            'nilai_tanah' => $validatedData['nilai_tanah'],
            'kenderaan' => $validatedData['kenderaan'],
            'nilai_kenderaan' => $validatedData['nilai_kenderaan'],
            'astro' => $validatedData['astro'],
            'nilai_astro' => $validatedData['nilai_astro'],
            'nilai_barang_kemas' => $validatedData['barang_kemas'],
            'nilai_simpanan' => $validatedData['simpanan'],
            'lain' => $validatedData['lain_lain'],
            'nilai_lain' => $validatedData['nilai_lain'],
        ]);
        dd($harta);


        return redirect()->route('pemohon.display')->with('success', 'Data submitted successfully.');
    }
    
}