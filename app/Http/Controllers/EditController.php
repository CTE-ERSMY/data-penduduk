<?php

namespace App\Http\Controllers;

use App\Models\Waris;
use App\Models\Pendapatan;
use App\Models\Perbelanjaan;
use Illuminate\Http\Request;
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
                $pemohon->delete();
                return redirect()->back()->with('success', 'Maklumat Pemohon telah berjaya dihapuskan');
            } else {
                return redirect()->back()->with('error', 'Maklumat Pemohon tidak berjaya dihapuskan. Rekod tidak dijumpai.');
            }
        } catch (\Exception $e) {
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

        // Pass the pemohon and pasangan details to the view
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
}   