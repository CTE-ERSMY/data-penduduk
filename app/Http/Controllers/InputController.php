<?php

namespace App\Http\Controllers;

use App\Models\harta;
use App\Models\Waris;
use App\Models\Pendapatan;
use App\Models\Perbelanjaan;
use Illuminate\Http\Request;
use App\Models\HadTanggungan;
use App\Models\SejarahBantuan;
use App\Models\MaklumatPemohon;
use App\Models\MaklumatPasangan;
use Illuminate\Support\Facades\Session;

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
            'umur' => 'required|numeric|min:0',
            'hubungan' => 'required|string',
            'status' => 'required|string',
            'kerja' => 'required|string',
            'fizikal' => 'required|string',
            'mental' => 'required|in:Waras,Tidak Waras',
            'pendapatan' => 'required|numeric|min:0',
        ]);
        // Initialize an array to store all entered data
        $pemohonId = $request->input('maklumat_pemohon_id');

        // Create a new Waris model instance and fill it with validated data
        $waris = new Waris();
        $waris->fill($validatedData);
        $waris->maklumat_pemohon_id = $pemohonId;
    
        // Save the model to the database
        $waris->save();
    
        // Retrieve all existing Waris data for the current pemohonId
        $allWarisData = Waris::where('maklumat_pemohon_id', $pemohonId)->get();

    // Pass the pemohonId and allWarisData to the view
    return view('/newWaris', compact('pemohonId', 'allWarisData'));
    }
    public function hartaView (Request $request)
    {
        return view('/newHarta');
    }
    public function hartaNew (Request $request)
    {
        $validatedData = $request->validate([
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
            'nilai_barang_kemas' => 'nullable|numeric|min:0',
            'nilai_simpanan' => 'nullable|numeric|min:0',
            'lain' => 'required|numeric|min:0',
            'nilai_lain' => 'nullable|numeric|min:0',
        ]);
        $pemohonId = $request->input('maklumat_pemohon_id');

        $dataHarta = new harta($validatedData);
        $dataHarta->maklumat_pemohon_id = $pemohonId;
        
        $dataHarta->save();

        return view('/hadTanggungan')->with('pemohonId', $pemohonId);
    }
    public function hadTanggunganView()
    {
        return view('/hadTanggungan');
    }
    public function hadTanggunganNew(Request $request)
    {
        $pemohonId = $request->input('maklumat_pemohon_id');
        $butiran_tanggungan = $request->butiran_tanggungan;
        $jumlah_tanggungan = $request->jumlah_tanggungan;

        $validatedData = $request->validate([
            'butiran_tanggungan.*' => 'required|string',
            'jumlah_tanggungan.*' => 'required|numeric|min:0',
        ]);

        foreach ($butiran_tanggungan as $key => $butiran) { 
            $datasave = [
                'maklumat_pemohon_id' => $pemohonId,
                'butiran_tanggungan' => $butiran,
                'jumlah_tanggungan' => $jumlah_tanggungan[$key],
            ];
            $pemohon = MaklumatPemohon::find($pemohonId);
            $hadTanggungan = new HadTanggungan($datasave);
            $pemohon->hadTanggungan()->save($hadTanggungan);
        }
        Session::put('success', "Data Berjaya dimasukkan");
        return view('/hadPenambahan')->with('pemohonId', $pemohonId);
    }
    public function hadPenambahanView ()
    {
        return view ('/hadPenambahan');
    }
    public function hadPenambahanNew (Request $request)
    {
        $validatedData = $request->validate([
            'int_kos_kronik' => 'required|numeric|min:0',
            'int_cacat' => 'required|numeric|min:0',
            'int_cacat_semulajadi' => 'nullable|numeric|min:0',
            'int_cacat_mendatang' => 'nullable|numeric|min:0',
            'int_ibu_bapa' => 'required|numeric|min:0',
            'int_ibu_tinggal' => 'nullable|numeric|min:0',
            'int_masalah_keluarga' => 'required|numeric|min:0',
            'int_ibu_tunggal' => 'nullable|numeric|min:0',
            'kos_kronik' => 'required|numeric|min:0',
            'cacat_semulajadi' => 'required|numeric|min:0',
            'cacat_mendatang' => 'nullable|numeric|min:0',
            'ibu_bapa' => 'nullable|numeric|min:0',
            'ibu_tinggal' => 'nullable|numeric|min:0',
            'masalah_keluarga' => 'required|numeric|min:0',
            'ibu_tunggal' => 'nullable|numeric|min:0',
        ]);
        $pemohonId = $request->input('maklumat_pemohon_id');

        $hadPenambahan = new hadPenambahan($validatedData);
        $hadPenambahan->maklumat_pemohon_id = $pemohonId;
        
        $hadPenambahan->save();

        return view('/hadPenolakan')->with('pemohonId', $pemohonId);
    }
    public function hadPenolakanView()
    {
        return view('/hadPenolakan');
    }
    public function hadPenolakanNew(Request $request)
    {
        $validatedData = $request->validate([
            'int_kereta_mahal' => 'required|numeric|min:0',
            'int_kereta_murah' => 'required|numeric|min:0',
            'int_telefon_bimbit' => 'nullable|numeric|min:0',
            'int_emas' => 'nullable|numeric|min:0',
            'int_astro' => 'required|numeric|min:0',
            'int_aircond' => 'nullable|numeric|min:0',
            'int_simpanan' => 'required|numeric|min:0',
            'int_home_theater' => 'nullable|numeric|min:0',
            'int_perokok' => 'required|numeric|min:0',
            'kereta_mahal' => 'required|numeric|min:0',
            'kereta_murah' => 'nullable|numeric|min:0',
            'telefon_bimbit' => 'nullable|numeric|min:0',
            'emas' => 'nullable|numeric|min:0',
            'astro' => 'required|numeric|min:0',
            'aircond' => 'nullable|numeric|min:0',
            'radio' => 'nullable|numeric|min:0',
            'simpanan' => 'nullable|numeric|min:0',
            'home_theater' => 'nullable|numeric|min:0',
            'perokok' => 'nullable|numeric|min:0',
        ]);
        $pemohonId = $request->input('maklumat_pemohon_id');

        $hadPenolakan = new hadPenolakan($validatedData);
        $hadPenolakan->maklumat_pemohon_id = $pemohonId;
        
        $hadPenolakan->save();

        return view('/sejarahBantuan')->with('pemohonId', $pemohonId);
    }
    public function sejarahBantuanView()
    {
        return view ('/sejarahBantuan');
    }
    public function sejarahBantuanNew(Request $request)
    {
        $request->validate([
            'file' => 'required|max:3072',
            'nama_bantuan' => 'nullable|string',
            'no_akaun' => 'nullable|string',
            'tarikh_mohon' => 'nullable|date',
            'tarikh_lulus' => 'nullable|date',
            'tarikh_mula' => 'nullable|date',
            'jumlah_lulus' => 'nullable|numeric',
            'status_bantuan' => 'nullable|string',
            'catatan' => 'nullable|text',
        ]);
        $pemohonId = $request->input('maklumat_pemohon_id');

        $fileName = time().'.'.$request->image->extension();

        $request->image->move(public_path('files'), $fileName);

        $file = new SejarahBantuan();
        $file->filename = $fileName;
        $file->path = 'files/' . $fileName;
        $file->nama_bantuan = $request->nama_bantuan;
        $file->no_akaun = $request->no_akaun;
        $file->tarikh_mohon = $request->tarikh_mohon;
        $file->tarikh_lulus = $request->tarikh_lulus;
        $file->tarikh_mula = $request->tarikh_mula;
        $file->jumlah_lulus = $request->jumlah_lulus;
        $file->status_bantuan = $request->status_bantuan;
        $file->catatan = $request->catatan;
        $file->maklumat_pemohon_id = $pemohonId;
        $file->save();

        return view('/sejarahBantuan')->with('pemohonId', $pemohonId);
    }
}
