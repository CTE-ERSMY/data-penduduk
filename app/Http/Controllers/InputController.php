<?php

namespace App\Http\Controllers;

use App\Models\harta;
use App\Models\Waris;
use App\Models\Pendapatan;
use App\Models\HadPenolakan;
use App\Models\Perbelanjaan;
use Illuminate\Http\Request;
use App\Models\HadPenambahan;
use App\Models\HadTanggungan;
use App\Models\JumlahKifayah;
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
            'ic' => 'required|numeric|digits:12',
            'jantina' => 'nullable|in:Lelaki,Perempuan',
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
        ]);

        $pemohon = MaklumatPemohon::create($validatedData);

        if (in_array($validatedData['bandar'], ['JOHOR BAHRU', 'BATU PAHAT'])) {
            HadTanggungan::create([
                'maklumat_pemohon_id' => $pemohon->id,
                'butiran_tanggungan' => 'Ketua Keluarga - Bandar',
                'jumlah_tanggungan' => 665,
            ]);
        } else {
            HadTanggungan::create([
                'maklumat_pemohon_id' => $pemohon->id,
                'butiran_tanggungan' => 'Ketua Keluarga - Luar Bandar',
                'jumlah_tanggungan' => 615,
            ]);
        }
        // $excludedStatuses = [
        //     'Bujang',
        //     'Duda(Kematian Isteri)',
        //     'Duda(Bercerai)',
        //     'Janda(Kematian Suami)',
        //     'Janda(Bercerai)',
        // ];
    
        // // Only create MaklumatPasangan if the status is not excluded
        // if (!in_array($validatedData['status'], $excludedStatuses)) {
        //     MaklumatPasangan::create([
        //         'maklumat_pemohon_id' => $pemohon->id,
        //         // Add other default values if required
        //     ]);
        //     HadTanggungan::create([
        //         'maklumat_pemohon_id' => $pemohon->id,
        //         'butiran_tanggungan' => 'Pasangan',
        //         'jumlah_tanggungan' => 210,
        //     ]);
        // }
    
        // Create related records for other models
        Pendapatan::create(['maklumat_pemohon_id' => $pemohon->id]);
        Perbelanjaan::create(['maklumat_pemohon_id' => $pemohon->id]);
        Harta::create(['maklumat_pemohon_id' => $pemohon->id]);
        SejarahBantuan::create(['maklumat_pemohon_id' => $pemohon->id]);
        // HadTanggungan::create(['maklumat_pemohon_id' => $pemohon->id]);
        HadPenambahan::create(['maklumat_pemohon_id' => $pemohon->id]); 
        HadPenolakan::create(['maklumat_pemohon_id' => $pemohon->id]);
        JumlahKifayah::create(['maklumat_pemohon_id' => $pemohon->id]);
        
        // Set a success message
        $request->session()->flash('success', 'Data and related records inserted successfully');
    
        // Redirect to the pemohonDetails page with the new record's ID
        return redirect()->route('pemohon.details', ['id' => $pemohon->id]);
    }
    public function pasanganView()
    {
        return view('/newPasangan');
    }
    public function pasanganNew(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'nullable|string',
            'ic' => 'nullable|numeric|digits:12|unique:maklumat_pasangan',
            'jantina' => 'nullable|in:Lelaki,Perempuan',
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
        ]);
        $pemohonId = $request->input('maklumat_pemohon_id');

        $dataPasangan = new MaklumatPasangan($validatedData);
        $dataPasangan->maklumat_pemohon_id = $pemohonId;
        
        $dataPasangan->save();

        HadTanggungan::create([
                'maklumat_pemohon_id' => $pemohonId,
                'butiran_tanggungan' => 'Pasangan',
                'jumlah_tanggungan' => 210,
            ]);

        return redirect()->back()->with('success', 'Maklumat Pasangan berjaya ditambah!');
    }
    public function pendapatanView()
    {
        return view('/pendapatan');
    }
    public function pendapatanNew(Request $request)
    {
        $validatedData = $request->validate([
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
            'makan' => 'nullable|numeric|min:0',
            'perubatan' => 'nullable|numeric|min:0',
            'bil' => 'nullable|numeric|min:0',
            'pengangkutan' => 'nullable|numeric|min:0',
            'sewa_rumah' => 'nullable|numeric|min:0',
            'persekolahan' => 'nullable|numeric|min:0',
            'lain' => 'nullable|numeric|min:0',
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
            'fizikal' => 'nullable|string',
            'serumah' => 'nullable|string',
            'mental' => 'nullable|in:Waras,Tidak Waras',
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

        $butiranTanggungan = null;
        $jumlahTanggungan = 0;
    
        if (in_array($waris->hubungan, ['Isteri 1', 'Isteri 2', 'Isteri 3', 'Isteri 4'])) {
            $butiranTanggungan = 'Pasangan';
            $jumlahTanggungan = 210;
        } elseif ($waris->status === 'Sekolah' && $waris->umur > 12) {
            $butiranTanggungan = 'Anak Sekolah Menengah 13 - 17 Tahun';
            $jumlahTanggungan = 260;
        } elseif ($waris->status === 'Sekolah' && $waris->umur > 6 && $waris->umur <= 12) {
            $butiranTanggungan = 'Anak Sekolah Rendah 7 - 12 Tahun';
            $jumlahTanggungan = 210;
        } elseif (in_array($waris->status, ['Sekolah', 'Tidak bersekolah']) && $waris->umur <= 6) {
            $butiranTanggungan = 'Anak 6 Tahun ke Bawah';
            $jumlahTanggungan = 170;
        } elseif ($waris->status === 'IPTA/S') {
            $butiranTanggungan = 'Anak Menuntut di IPTA/S';
            $jumlahTanggungan = 150;
        } elseif ($waris->status === 'Tidak sekolah' && $waris->umur >= 6 && $waris->umur <= 17) {
            $butiranTanggungan = 'Anak Tidak Bersekolah (Bawah 17 Tahun)';
            $jumlahTanggungan = 110;
        } elseif ($waris->umur > 17) {
            $butiranTanggungan = 'Dewasa (18 tahun ke atas/tidak bekerja)';
            $jumlahTanggungan = 210;
        }
    
        // If conditions are met, create a new HadTanggungan entry
        if ($butiranTanggungan) {
            $hadTanggungan = new HadTanggungan();
            $hadTanggungan->maklumat_pemohon_id = $pemohonId;
            $hadTanggungan->butiran_tanggungan = $butiranTanggungan;
            $hadTanggungan->jumlah_tanggungan = $jumlahTanggungan;
            $hadTanggungan->save();
        }
    

    // Pass the pemohonId and allWarisData to the view
    return redirect()->back()->with('success', 'Maklumat Waris dan Tanggungan berjaya ditambah!');
    }
    public function hartaView($pemohonId)
    {
    // Example: Fetch data related to this $pemohonId from the database
    $hartaData = harta::where('maklumat_pemohon_id', $pemohonId)->get();

    // Pass the $pemohonId and $hartaData to the view
    return view('/newHarta', compact('pemohonId', 'hartaData'));
    }
    public function hartaNew (Request $request)
    {
        $validatedData = $request->validate([
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
            'astro' => 'nullable|numeric|min:0',
            'nilai_astro' => 'nullable|numeric|min:0',
            'nilai_barang_kemas' => 'nullable|numeric|min:0',
            'nilai_simpanan' => 'nullable|numeric|min:0',
            'lain' => 'nullable|numeric|min:0',
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
            'butiran_tanggungan.*' => 'nullable|string',
            'jumlah_tanggungan.*' => 'nullable|numeric|min:0',
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
  
        return view('/hadPenambahan')->with('pemohonId', $pemohonId);
    }
    public function hadPenambahanView ()
    {
        return view ('/hadPenambahan');
    }
    public function hadPenambahanNew (Request $request)
    {
        $validatedData = $request->validate([
            'int_kos_kronik' => 'nullable|numeric|min:0',
            'int_cacat_semulajadi' => 'nullable|numeric|min:0',
            'int_cacat_mendatang' => 'nullable|numeric|min:0',
            'int_ibu_bapa' => 'nullable|numeric|min:0',
            'int_ibu_tinggal' => 'nullable|numeric|min:0',
            'int_masalah_keluarga' => 'nullable|numeric|min:0',
            'int_ibu_tunggal' => 'nullable|numeric|min:0',
            'kos_kronik' => 'nullable|numeric|min:0',
            'cacat_semulajadi' => 'nullable|numeric|min:0',
            'cacat_mendatang' => 'nullable|numeric|min:0',
            'ibu_bapa' => 'nullable|numeric|min:0',
            'ibu_tinggal' => 'nullable|numeric|min:0',
            'masalah_keluarga' => 'nullable|numeric|min:0',
            'ibu_tunggal' => 'nullable|numeric|min:0',
        ]);
        $pemohonId = $request->input('maklumat_pemohon_id');

        $hadPenambahan = new HadPenambahan($validatedData);
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
            'int_kereta_mahal' => 'nullable|numeric|min:0',
            'int_kereta_murah' => 'nullable|numeric|min:0',
            'int_telefon_bimbit' => 'nullable|numeric|min:0',
            'int_emas' => 'nullable|numeric|min:0',
            'int_astro' => 'nullable|numeric|min:0',
            'int_aircond' => 'nullable|numeric|min:0',
            'int_simpanan' => 'nullable|numeric|min:0',
            'int_home_theater' => 'nullable|numeric|min:0',
            'int_perokok' => 'nullable|numeric|min:0',
            'kereta_mahal' => 'nullable|numeric|min:0',
            'kereta_murah' => 'nullable|numeric|min:0',
            'telefon_bimbit' => 'nullable|numeric|min:0',
            'emas' => 'nullable|numeric|min:0',
            'astro' => 'nullable|numeric|min:0',
            'aircond' => 'nullable|numeric|min:0',
            'radio' => 'nullable|numeric|min:0',
            'simpanan' => 'nullable|numeric|min:0',
            'home_theater' => 'nullable|numeric|min:0',
            'perokok' => 'nullable|numeric|min:0',
        ]);
        $pemohonId = $request->input('maklumat_pemohon_id');

        $hadPenolakan = new HadPenolakan($validatedData);
        $hadPenolakan->maklumat_pemohon_id = $pemohonId;
        
        $hadPenolakan->save();

        return view('/sejarahBantuan')->with('pemohonId', $pemohonId);
    }
    public function sejarahBantuanView($pemohonId)
    {
        return view ('/sejarahBantuan', compact('pemohonId'));
    }
    public function sejarahBantuanNew(Request $request)
    {
        $validatedData = $request->validate([
            'file' => 'nullable',
            'nama_bantuan' => 'nullable|string',
            'no_akaun' => 'nullable|string',
            'tarikh_mohon' => 'nullable|date',
            'tarikh_lulus' => 'nullable|date',
            'tarikh_mula' => 'nullable|date',
            'jumlah_lulus' => 'nullable|numeric',
            'status_bantuan' => 'nullable|string',
            'catatan' => 'nullable|string',
        ]);
        $file = $request->file('file');

    if ($file) {
        $fileName = time() . '.' . $file->extension();
        $file->move(public_path('files'), $fileName);

        $sejarahBantuan = new SejarahBantuan();
        $sejarahBantuan->file_name = $fileName;
        $sejarahBantuan->file_path = 'files/' . $fileName;
        $sejarahBantuan->nama_bantuan = $validatedData['nama_bantuan'];
        $sejarahBantuan->no_akaun = $validatedData['no_akaun'];
        $sejarahBantuan->tarikh_mohon = $validatedData['tarikh_mohon'];
        $sejarahBantuan->tarikh_lulus = $validatedData['tarikh_lulus'];
        $sejarahBantuan->tarikh_mula = $validatedData['tarikh_mula'];
        $sejarahBantuan->jumlah_lulus = $validatedData['jumlah_lulus'];
        $sejarahBantuan->status_bantuan = $validatedData['status_bantuan'];
        $sejarahBantuan->catatan = $validatedData['catatan'];
        $sejarahBantuan->maklumat_pemohon_id = $request->input('maklumat_pemohon_id');
        $sejarahBantuan->save();
    }

    $pemohonId = $request->input('maklumat_pemohon_id');

    return redirect()->route('sejarah.details', ['id' => $pemohonId]);

    }

    
    public function pemohonBaru(Request $request)
    {
    // Identify the current step
    $step = $request->input('step', 1);

    switch ($step) {
        case 1: // Step 1: Pemohon Data
            $validatedData = $request->validate([
                'nama' => 'required|string',
                'ic' => 'required|numeric|digits:12|unique:maklumat_pemohon',
                'jantina' => 'nullable|in:Lelaki,Perempuan',
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
            ]);

            $pemohon = MaklumatPemohon::create($validatedData);
            $request->session()->put('pemohonId', $pemohon->id);
            return redirect()->route('pemohon.baru', ['step' => 2]);
        
        case 2: // Step 2: Pasangan Data
            $validatedData = $request->validate([
                'nama' => 'nullable|string',
                'ic' => 'nullable|numeric|digits:12|unique:maklumat_pasangan',
                'jantina' => 'nullable|in:Lelaki,Perempuan',
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
            ]);

            $pemohonId = $request->session()->get('pemohonId');
            $dataPasangan = new MaklumatPasangan($validatedData);
            $dataPasangan->maklumat_pemohon_id = $pemohonId;
            $dataPasangan->save();
            return redirect()->route('pemohon.baru', ['step' => 3]);

        case 3: // Step 3: Pendapatan Data
            $validatedData = $request->validate([
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
            ]);

            $pemohonId = $request->session()->get('pemohonId');
            $dataPendapatan = new Pendapatan($validatedData);
            $dataPendapatan->maklumat_pemohon_id = $pemohonId;
            $dataPendapatan->save();
            $request->session()->forget('pemohonId');

        default:
            return view('form.step{$step}'); // Initial form step
    }
}

public function formComplete()
{
    return view('form.complete');
}

}
