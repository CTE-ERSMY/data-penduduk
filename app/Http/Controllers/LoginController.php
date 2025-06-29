<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Pendapatan;
use Illuminate\Http\Request;
use App\Models\MaklumatPemohon;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'Username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['Username' => $credentials['Username'], 'password' => $credentials['password']])) {
            $user = Auth::user();

            return redirect()->intended('index');
        }
        return back()->withErrors(['login' => 'Invalid credentials']);
    }

    public function login()
    {
        return view('login');
    }
    public function admin()
    {
        $totalPemohon = MaklumatPemohon::count();
        $totalUser = User::count();
        $avgGaji = Pendapatan::avg('gaji');

            $statusCounts = MaklumatPemohon::select('status')
        ->selectRaw('count(*) as total')
        ->groupBy('status')
        ->pluck('total', 'status');

        $genderCounts = MaklumatPemohon::select('jantina')
        ->selectRaw('count(*) as total')
        ->groupBy('jantina')
        ->pluck('total', 'jantina');

        // 3. Age Group
        $ageGroups = [
            '18-25' => 0,
            '26-35' => 0,
            '36-45' => 0,
            '46-60' => 0,
            '60+'   => 0
        ];

        $pemohon = MaklumatPemohon::select('tarikh_lahir')->get();

        foreach ($pemohon as $p) {
            if (!$p->tarikh_lahir) continue;
            $age = Carbon::parse($p->tarikh_lahir)->age;

            if ($age >= 18 && $age <= 25) $ageGroups['18-25']++;
            elseif ($age >= 26 && $age <= 35) $ageGroups['26-35']++;
            elseif ($age >= 36 && $age <= 45) $ageGroups['36-45']++;
            elseif ($age >= 46 && $age <= 60) $ageGroups['46-60']++;
            else $ageGroups['60+']++;
        }

         return view('index', [
            'totalPemohon' => $totalPemohon, 
             'totalUser' => $totalUser,
             'statusCounts' => $statusCounts,
             'ageGroups' => $ageGroups,
             'genderCounts' => $genderCounts,
            'avgGaji' => $avgGaji]);
            
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
