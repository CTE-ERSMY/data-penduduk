<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\MaklumatPemohon;
use App\Models\MaklumatPasangan;

class DisplayController extends Controller
{
    public function pemohonDisplay(Request $request)
    {
        $pemohon = MaklumatPemohon::query();

        if ($request->has('nama')) {
            $searchQuery = $request->query('nama');
            $pemohon = $pemohon->where('nama', 'like', '%' .$searchQuery . '%');
        }

        $result = $pemohon->get();

        return view('/allPemohon', ['pemohon' => $result]);
    }
    public function pemohonDetails($id)
    {
        // Retrieve the pemohon details along with its pasangan based on the provided ID
        $pemohon = MaklumatPemohon::with('pasangan')->find($id);

        // Check if pemohon exists
        if (!$pemohon) {
            // Handle case where pemohon does not exist
            abort(404); // Or you can return a view indicating that the pemohon was not found
        }

        // Pass the pemohon and pasangan details to the view
        return view('pemohonDetails', ['pemohon' => $pemohon, 'pasangan' => $pemohon->pasangan]);
    }
    public function kewanganDetails($id)
    {
        $pemohon = MaklumatPemohon::with(['pendapatan', 'perbelanjaan'])->find($id);

        if(!$pemohon) {
            abort(404);
        }
        return view('kewanganDetails', ['pemohon' => $pemohon, 'pendapatan' => $pemohon->pendapatan, 'perbelanjaan' => $pemohon->perbelanjaan]);
    }
    public function warisDetails($id)
    {
        $pemohon = MaklumatPemohon::with('waris')->find($id);

        if(!$pemohon) {
            abort(404);
        }
        return view('warisDetails', ['pemohon' => $pemohon, 'waris' => $pemohon->waris]);
    }
    public function hartaDetails($id)
    {
        $pemohon = MaklumatPemohon::with('harta')->find($id);

        if(!$pemohon) {
            abort(404);
        }
        return view('hartaDetails', ['pemohon' => $pemohon, 'harta' => $pemohon->harta]);
    }
    public function kifayahDetails($id)
    {
        $pemohon = MaklumatPemohon::with(['hadTanggungan', 'hadPenolakan', 'hadPenambahan', 'pendapatan'])->find($id);

        if(!$pemohon) {
            abort(404);
        }
        $bilTanggungan = $pemohon->hadTanggungan->count();
        $totalJumlah = $pemohon->hadTanggungan->sum('jumlah_tanggungan');
        return view('kifayahDetails', [
        'pemohon' => $pemohon, 
        'hadTanggungan' => $pemohon->hadTanggungan,
        'hadPenolakan' => $pemohon->hadPenolakan, 
        'hadPenambahan' => $pemohon->hadPenambahan,
        'pendapatan' => $pemohon->pendapatan,
        'totalJumlah' => $totalJumlah,
        'bilTanggungan' => $bilTanggungan]);
    }
    public function sejarahDetails($id)
    {
        $pemohon = MaklumatPemohon::with('SejarahBantuan')->find($id);

        if(!$pemohon) {
            abort(404);
        }
        return view('sejarahDetails', ['pemohon' => $pemohon, 'sejarahBantuan' => $pemohon->SejarahBantuan]);
    }
    public function alldetails($id)
    {
        $pemohon = MaklumatPemohon::with(['pasangan', 'perbelanjaan', 'harta', 'waris', 'hadTanggungan', 
        'hadPenolakan', 'hadPenambahan', 'pendapatan', 'SejarahBantuan'])->find($id);

        if(!$pemohon) {
            abort(404);
        }
        $bilTanggungan = $pemohon->hadTanggungan->count();
        $totalJumlah = $pemohon->hadTanggungan->sum('jumlah_tanggungan');
        return view('allDetails', [
        'pemohon' => $pemohon, 
        'pasangan' => $pemohon->pasangan,
        'pendapatan' => $pemohon->pendapatan,
        'perbelanjaan' => $pemohon->perbelanjaan,
        'harta' => $pemohon->harta,
        'waris' => $pemohon->waris,
        'hadTanggungan' => $pemohon->hadTanggungan,
        'hadPenolakan' => $pemohon->hadPenolakan, 
        'hadPenambahan' => $pemohon->hadPenambahan,
        'sejarahBantuan' => $pemohon->SejarahBantuan,
        'totalJumlah' => $totalJumlah,
        'bilTanggungan' => $bilTanggungan]);
    }

}