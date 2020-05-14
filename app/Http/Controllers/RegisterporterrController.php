<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterporterrController extends Controller
{
    public function tambahporter(Request $request){
        DB::table('porter')->insert([
            'namalengkap' => $request->namalengkap,
            'tanggal_lahir' => $request->tanggal_lahir,
            'email' => $request->email,
            'nomor_hp' => $request->nomor_hp,
            'lokasipasar' => $request->lokasipasar,
            'password' => $request->password,

        ]);

        return redirect('/home');
    }
}
