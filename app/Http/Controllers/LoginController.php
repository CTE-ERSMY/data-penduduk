<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\MaklumatPemohon;
use Illuminate\Support\Facades\Auth;
//dpkt123@
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

         return view('index', ['totalPemohon' => $totalPemohon, 'totalUser' => $totalUser]);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
