<?php

namespace App\Http\Controllers;

use App\Models\Waris;
use App\Models\Pendapatan;
use App\Models\Perbelanjaan;
use Illuminate\Http\Request;
use App\Models\MaklumatPemohon;
use App\Models\MaklumatPasangan;

class InputController extends Controller
{
    public function pemohonView()
    {
        return view('/newPemohon');
    }
    public function pemohonNew(Request $request)
    {
        $validatedData = $request->validate([
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
        ]);

        $pemohon = MaklumatPemohon::create($validatedData);

        $request->session()->flash('success', 'Data inserted successfully');

        return view('/newPasangan')->with('pemohonId', $pemohon->id);
    }
    public function pasanganView()
    {
        return view('/newPasangan');
    }
    public function pasanganNew(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'ic' => 'required|numeric|digits:12|unique:maklumat_pasangan',
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
        ]);
        $pemohonId = $request->input('maklumat_pemohon_id');

        $dataPasangan = new MaklumatPasangan($validatedData);
        $dataPasangan->maklumat_pemohon_id = $pemohonId;
        
        $dataPasangan->save();

        return view('/pendapatan')->with('pemohonId', $pemohonId);
    }
    public function pendapatanView()
    {
        return view('/pendapatan');
    }
    public function pendapatanNew(Request $request)
    {
        $validatedData = $request->validate([
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
        ]);

        $pemohonId = $request->input('maklumat_pemohon_id');

        $dataPendapatan = new Pendapatan($validatedData);
        $dataPendapatan->maklumat_pemohon_id = $pemohonId;
        
        $dataPendapatan->save();

        return view('/newPerbelanjaan')->with('pemohonId', $pemohonId);
    }
    public function perbelanjaanView()
    {
        return view('/newPerbelanjaan');
    }
    public function perbelanjaanNew(Request $request)
    {
        $validatedData = $request->validate([
            'makan' => 'required|numeric|min:0',
            'perubatan' => 'required|numeric|min:0',
            'bil' => 'required|numeric|min:0',
            'pengangkutan' => 'required|numeric|min:0',
            'sewa_rumah' => 'required|numeric|min:0',
            'persekolahan' => 'required|numeric|min:0',
            'lain' => 'required|numeric|min:0',
        ]);
        $pemohonId = $request->input('maklumat_pemohon_id');

        $perbelanjaan = new Perbelanjaan($validatedData);
        $perbelanjaan->maklumat_pemohon_id = $pemohonId;
        
        $perbelanjaan->save();

        return view('/newWaris')->with('pemohonId', $pemohonId);
    }
    public function warisView()
    {
        return view('/newWaris');
    }
    public function warisNew(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'ic' => 'required|numeric|digits:12|unique:waris',
            'umur' => 'required|numeric',
            'hubungan' => 'required|string',
            'status' => 'required|in:Sekolah,Bekerja,Tidak Bekerja',
            'kerja' => 'required|string',
            'fizikal' => 'required|string',
            'mental' => 'required|in:Waras,Tidak Waras',
            'pendapatan' => 'required|numeric',
        ]);
        $pemohonId = $request->input('maklumat_pemohon_id');

        $dataWaris = new Waris($validatedData);
        $dataWaris->maklumat_pemohon_id = $pemohonId;
        
        $dataWaris->save();

        return view('/newWaris')->with('pemohonId', $pemohonId);
    }
}
