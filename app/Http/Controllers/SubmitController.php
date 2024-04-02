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
        return view ('/newPemohon'); 
    }
    public function submit(Request $request)
    {   
        $validatedData = $request->validate([
            // Validation rules for pemohon
            'nama' => 'required|string',
            'ic' => 'required|numeric|digits:12|unique:maklumat_pemohon',
            'jantina' => 'required|in:Lelaki,Wanita',
            'tarikh_lahir' => 'required|date',
            'status' => 'required|string',
            'mental' => 'required|in:Waras,Tidak Waras',
            'islam' => 'required|in:Baik,Kurang Baik',
            'fizikal' => 'required|string',
            'alamat' => 'required|string',
            'poskod' => 'required|numeric',
            'bandar' => 'nullable|string',
            'nombor_rumah' => 'nullable|numeric',
            'nombor_bimbit' => 'required|numeric',
            
            // Validation rules for pasangan
            'nama_pasangan' => 'required|string',
            'ic_pasangan' => 'required|numeric|digits:12',
            'jantina_pasangan' => 'required|in:Lelaki,Wanita',
            'tarikh_lahir_pasangan' => 'required|date',
            'status_pasangan' => 'required|string',
            'mental_pasangan' => 'required|in:Waras,Tidak Waras',
            'islam_pasangan' => 'required|in:Baik,Kurang Baik',
            'fizikal_pasangan' => 'required|string',
            'alamat_pasangan' => 'required|string',
            'poskod_pasangan' => 'required|numeric',
            'bandar_pasangan' => 'nullable|string',
            'nombor_rumah_pasangan' => 'nullable|numeric',
            'nombor_bimbit_pasangan' => 'required|numeric',
            
            // Validation rules for pendapatan
            'jawatan' => 'required|string',
            'gaji' => 'required|numeric|min:0',
            'majikan' => 'required|string',
            'jawatan_psgn' => 'nullable|string',
            'gaji_psgn' => 'nullable|numeric|min:0',
            'majikan_psgn' => 'nullable|string',
            'sumbangan_anak' => 'nullable|numeric|min:0',
            'sumbangan_saudara' => 'nullable|numeric|min:0',
            'sampingan' => 'nullable|numeric|min:0',
            'sumbangan_agensi' => 'nullable|numeric|min:0',
            
            // Validation rules for perbelanjaan
            'makan' => 'required|numeric|min:0',
            'perubatan' => 'required|numeric|min:0',
            'bil' => 'required|numeric|min:0',
            'pengangkutan' => 'required|numeric|min:0',
            'sewa_rumah' => 'required|numeric|min:0',
            'persekolahan' => 'required|numeric|min:0',
            'lain' => 'required|numeric|min:0',
            
            // Validation rules for harta
            'status_kediaman' => 'required|string',
            'jenis_kediaman' => 'required|string',
            'kemudahan' => 'required|string',
            'bilik' => 'required|numeric|min:0',
            'kemudahan_tambahan' => 'nullable|string',
            'nilai_kediaman' => 'nullable|numeric|min:0',
            'bulanan' => 'nullable|numeric|min:0',
            'rumah' => 'required|numeric|min:0',
            'nilai_rumah' => 'nullable|numeric|min:0',
            'tanah' => 'required|numeric|min:0',
            'nilai_tanah' => 'nullable|numeric|min:0',
            'kenderaan' => 'required|numeric|min:0',
            'astro' => 'required|numeric|min:0',
            'nilai_astro' => 'nullable|numeric|min:0',
            'barang_kemas' => 'nullable|numeric|min:0',
            'simpanan' => 'nullable|numeric|min:0',
            'lain-lain' => 'required|numeric|min:0',
            'nilai_lain' => 'nullable|numeric|min:0',
        ]);


        try {
            $pemohon = MaklumatPemohon::create([
                'nama' => $validatedData['nama'],
                'ic' => $validatedData['ic'],
                'jantina' => $validatedData['jantina'],
                'tarikh_lahir' => $validatedData['tarikh_lahir'],
                'status' => $validatedData['status'],
                'mental' => $validatedData['mental'],
                'islam' => $validatedData['islam'],
                'fizikal' => $validatedData['fizikal'],
                'alamat' => $validatedData['alamat'],
                'poskod' => $validatedData['poskod'],
                'bandar' => $validatedData['bandar'],
                'nombor_rumah' => $validatedData['nombor_rumah'],
                'nombor_bimbit' => $validatedData['nombor_bimbit'],
            ]);
        // Create MaklumatPasangan
        MaklumatPasangan::create([
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
            'maklumat_pemohon_id' => $pemohon->id,
        ]);

        // Create Pendapatan
        Pendapatan::create([
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
        Perbelanjaan::create([
            'makan' => $validatedData['makan'],
            'perubatan' => $validatedData['perubatan'],
            'bil' => $validatedData['bil'],
            'pengangkutan' => $validatedData['pengangkutan'],
            'sewa_rumah' => $validatedData['sewa-]umah'],
            'persekolahan' => $validatedData['persekolahan'],
            'lain' => $validatedData['lain'],
            'maklumat_pemohon_id' => $pemohon->id,
        ]);

        // Create Harta
        Harta::create([
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
            'maklumat_pemohon_id' => $pemohon->id,
        ]);

        return redirect()->back()->with('success', 'Data submitted successfully.');
    } catch (\Exception $e) {
        // Handle exceptions
        return redirect()->back()->with('error', 'Failed to submit data. Please try again.');
    }
        
    }
}