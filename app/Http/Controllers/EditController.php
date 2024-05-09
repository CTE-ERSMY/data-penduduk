<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\harta;
use App\Models\Waris;
use App\Models\Pendapatan;
use App\Models\HadPenolakan;
use App\Models\Perbelanjaan;
use Illuminate\Http\Request;
use App\Models\HadPenambahan;
use App\Models\HadTanggungan;
use App\Models\SejarahBantuan;
use App\Models\MaklumatPemohon;
use App\Models\MaklumatPasangan;

class EditController extends Controller
{
    public function pemohonDelete($id)
    {
        try {
            $pemohon = MaklumatPemohon::find($id);
    
            if ($pemohon) {
                
                $pemohon->pasangan()->delete();
                $pemohon->perbelanjaan()->delete();
                $pemohon->pendapatan()->delete();  
                $pemohon->waris()->delete();
                $pemohon->harta()->delete();
                $pemohon->hadTanggungan()->delete();
                $pemohon->hadPenambahan()->delete();
                $pemohon->hadPenolakan()->delete();
                $pemohon->sejarahBantuan()->delete();
                $pemohon->delete();
                return redirect()->back()->with('success', 'Maklumat Pemohon telah berjaya dihapuskan');
            } else {
                return redirect()->back()->with('error', 'Maklumat Pemohon tidak berjaya dihapuskan. Rekod tidak dijumpai.');
            }
        } catch (Exception $e) {
            // Log the error or handle it as per your application's requirements
            return redirect()->back()->with('error', 'Maklumat Pemohon tidak berjaya dihapuskan. Sila cuba sebentar lagi.');
        }
    }
    public function pemohonEView($id)
    {
        $pemohon = MaklumatPemohon::find($id);

        // Check if pemohon exists
        if (!$pemohon) {
            // Handle case where pemohon does not exist
            abort(404); // Or you can return a view indicating that the pemohon was not found
        }

        // Pass the pemohon and pasangan details to the view
        return view('/pemohonEdit', ['pemohon' => $pemohon]);
    }
    public function pemohonEdit(Request $request, $id)
    {
    // Validate the incoming request data
    $validatedData = $request->validate([
        'nama' => 'required|string',
        'ic' => 'required|numeric|digits:12|unique:maklumat_pemohon,ic,'.$id,
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

    // Find the pemohon by ID
    $pemohon = MaklumatPemohon::findOrFail($id);

    // Update the pemohon data with the validated data
    $pemohon->update($validatedData);

    // Flash a success message to the session
    $request->session()->flash('success', 'Data updated successfully');

    // Redirect back to the edit page or any other desired page
    return redirect()->route('pemohon.details', ['id' => $pemohon->id]);
    }
    public function pasanganEview($id)
    {
        $pasangan = MaklumatPasangan::find($id);

        // Check if pemohon exists
        if (!$pasangan) {
            // Handle case where pemohon does not exist
            abort(404); // Or you can return a view indicating that the pemohon was not found
        }

        // Pass the pemohon and pasangan details to the view
        return view('/pasanganEdit', ['pasangan' => $pasangan]);
    }
    public function pasanganEdit(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'ic' => 'required|numeric|digits:12|unique:maklumat_pemohon,ic,'.$id,
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
    
        // Find the pemohon by ID
        $pasangan = MaklumatPasangan::findOrFail($id);
    
        // Update the pemohon data with the validated data
        $pasangan->update($validatedData);

        $pemohonId = $pasangan->maklumat_pemohon_id;
    
        // Flash a success message to the session
        $request->session()->flash('success', 'Data updated successfully');
    
        // Redirect back to the edit page or any other desired page
        return redirect()->route('pemohon.details', ['id' => $pemohonId]);
    }
    public function pendapatanEview($id)
    {
        $pendapatan = Pendapatan::find($id);

        // Check if pemohon exists
        if (!$pendapatan) {
            // Handle case where pemohon does not exist
            abort(404); // Or you can return a view indicating that the pemohon was not found
        }

        // Pass the pemohon and pasangan details to the view
        return view('/pendapatanEdit', ['pendapatan' => $pendapatan]);
    }
    public function pendapatanEdit(Request $request, $id)
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

        $pendapatan = Pendapatan::findOrFail($id);
    
        // Update the pemohon data with the validated data
        $pendapatan->update($validatedData);

        $pemohonId = $pendapatan->maklumat_pemohon_id;
    
        // Flash a success message to the session
        $request->session()->flash('success', 'Data updated successfully');
    
        // Redirect back to the edit page or any other desired page
        return redirect()->route('kewangan.details', ['id' => $pemohonId]);
    }
    public function perbelanjaanEview($id)
    {
        $perbelanjaan = Perbelanjaan::find($id);

        // Check if pemohon exists
        if (!$perbelanjaan) {
            // Handle case where pemohon does not exist
            abort(404); // Or you can return a view indicating that the pemohon was not found
        }

        // Pass the pemohon and pasangan details to the vie
        return view('/perbelanjaanEdit', ['perbelanjaan' => $perbelanjaan]);
    }
    public function perbelanjaanEdit(Request $request, $id)
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

        $perbelanjaan = Perbelanjaan::findOrFail($id);
    
        // Update the pemohon data with the validated data
        $perbelanjaan->update($validatedData);

        $pemohonId = $perbelanjaan->maklumat_pemohon_id;
    
        // Flash a success message to the session
        $request->session()->flash('success', 'Data updated successfully');
    
        // Redirect back to the edit page or any other desired page
        return redirect()->route('kewangan.details', ['id' => $pemohonId]);
    }
    public function warisEview($id)
    {
        $waris = Waris::find($id);

        return view('warisEdit', compact('waris'));
    }
    public function warisEdit(Request $request, $id)    
    {
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'ic' => 'required|numeric|digits:12|unique:maklumat_pemohon,ic,'.$id,
            'umur' => 'required|numeric',
            'hubungan' => 'required|string',
            'status' => 'required|in:Sekolah,Bekerja,Tidak Bekerja',
            'kerja' => 'required|string',
            'fizikal' => 'required|string',
            'mental' => 'required|in:Waras,Tidak Waras',
            'pendapatan' => 'required|numeric',
        ]);
        $waris = Waris::findOrFail($id);

        $waris->update($validatedData);
        
        $pemohonId = $waris->maklumat_pemohon_id;

        $request->session()->flash('success', 'Waris data updated successfully');
    
        // Redirect back to the details page or any other desired page
        return redirect()->route('waris.details', ['id' => $pemohonId]);
    }
    public function hartaEview($id)
    {
        $harta = harta::find($id);

        // Check if pemohon exists
        if (!$harta) {
            // Handle case where pemohon does not exist
            abort(404); // Or you can return a view indicating that the pemohon was not found
        }

        // Pass the pemohon and pasangan details to the view
        return view('/hartaEdit', ['harta' => $harta]);
    }
    public function hartaEdit(Request $request, $id)
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

        $harta = harta::findOrFail($id);
    
        // Update the pemohon data with the validated data
        $harta->update($validatedData);

        $pemohonId = $harta->maklumat_pemohon_id;
    
        // Flash a success message to the session
        $request->session()->flash('success', 'Data updated successfully');
    
        // Redirect back to the edit page or any other desired page
        return redirect()->route('harta.details', ['id' => $pemohonId]);
    }
    public function hadTanggunganEview($id)
    {
        $hadTanggungan = HadTanggungan::find($id);

        return view('hadTanggunganEdit', compact('hadTanggungan'));
    }
    public function hadTanggunganEdit(Request $request, $id)    
    {
        $validatedData = $request->validate([
            'butiran_tanggungan' => 'required|string',
            'jumlah_tanggungan' => 'required|numeric|min:0',
        ]);
        $hadTanggungan = HadTanggungan::findOrFail($id);

        $hadTanggungan->update($validatedData);
        
        $pemohonId = $hadTanggungan->maklumat_pemohon_id;

        $request->session()->flash('success', 'Maklumat Had Tanggungan telah ditukar');
    
        // Redirect back to the details page or any other desired page
        return redirect()->route('kifayah.details', ['id' => $pemohonId]);
    }
    public function hadPenambahanEview($id)
    {
        $hadPenambahan = HadPenambahan::find($id);

        // Check if pemohon exists
        if (!$hadPenambahan) {
            // Handle case where pemohon does not exist
            abort(404); // Or you can return a view indicating that the pemohon was not found
        }

        // Pass the pemohon and pasangan details to the view
        return view('/hadPenambahanEdit', ['hadPenambahan' => $hadPenambahan]);
    }
    public function hadPenambahanEdit(Request $request, $id)
    {
        $validatedData = $request->validate([
            'int_kos_kronik' => 'required|numeric|min:0',
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

        $hadPenambahan = HadPenambahan::findOrFail($id);
    
        // Update the pemohon data with the validated data
        $hadPenambahan->update($validatedData);

        $pemohonId = $hadPenambahan->maklumat_pemohon_id;
    
        // Flash a success message to the session
        $request->session()->flash('success', 'Had Penambahan telah berjaya ditukar');
    
        // Redirect back to the edit page or any other desired page
        return redirect()->route('kifayah.details', ['id' => $pemohonId]);
    }
    public function hadPenolakanEview($id)
    {
        $hadPenolakan = HadPenolakan::find($id);

        // Check if pemohon exists
        if (!$hadPenolakan) {
            // Handle case where pemohon does not exist
            abort(404); // Or you can return a view indicating that the pemohon was not found
        }

        // Pass the pemohon and pasangan details to the view
        return view('/hadPenolakanEdit', ['hadPenolakan' => $hadPenolakan]);
    }
    public function hadPenolakanEdit(Request $request, $id)
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

        $hadPenolakan = HadPenolakan::findOrFail($id);
    
        // Update the pemohon data with the validated data
        $hadPenolakan->update($validatedData);

        $pemohonId = $hadPenolakan->maklumat_pemohon_id;
    
        // Flash a success message to the session
        $request->session()->flash('success', 'Had Penolakan telah berjaya ditukar');
    
        // Redirect back to the edit page or any other desired page
        return redirect()->route('kifayah.details', ['id' => $pemohonId]);
    }
    public function sejarahEview($id)
    {
        $sejarahBantuan = SejarahBantuan::find($id);

        // Check if pemohon exists
        if (!$sejarahBantuan) {
            // Handle case where pemohon does not exist
            abort(404); // Or you can return a view indicating that the pemohon was not found
        }

        // Pass the pemohon and pasangan details to the view
        return view('/sejarahEdit', ['sejarahBantuan' => $sejarahBantuan, 'file_path' => asset($sejarahBantuan->file_path)]);
    }
    public function sejarahEdit(Request $request, $id)
    {
    $validatedData = $request->validate([
        'file' => 'nullable', // Example file validation, adjust as needed
        'nama_bantuan' => 'nullable|string',
        'no_akaun' => 'nullable|string',
        'tarikh_mohon' => 'nullable|date',
        'tarikh_lulus' => 'nullable|date',
        'tarikh_mula' => 'nullable|date',
        'jumlah_lulus' => 'nullable|numeric',
        'status_bantuan' => 'nullable|string',
        'catatan' => 'nullable|string',
    ]);

    $sejarahBantuan = SejarahBantuan::findOrFail($id);

    // Handle file upload if a new file is provided
    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $file_name = time() . '.' . $file->getClientOriginalExtension();

        // Move the uploaded file to the public/files directory
        $file->move(public_path('files'), $file_name);

        // Update the file-related fields in the database
        $sejarahBantuan->file_name = $file_name;
        $sejarahBantuan->file_path = '/files/' . $file_name; // Assuming files are stored in public/files
    }


    // Update other fields with validated data
    $sejarahBantuan->fill($validatedData)->save();

    $pemohonId = $sejarahBantuan->maklumat_pemohon_id;

    // Flash a success message to the session
    $request->session()->flash('success', 'Sejarah Bantuan updated successfully.');

    // Redirect back to the edit page or any other desired page
    return redirect()->route('sejarah.details', ['id' => $pemohonId]);
}

}




