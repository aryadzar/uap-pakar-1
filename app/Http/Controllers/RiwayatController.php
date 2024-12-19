<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Riwayat;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{

    public function index()
    {

            $riwayat = Riwayat::with('penyakit')
                ->latest()
                ->paginate(10);

            // $riwayat = User
            // ::riwayats()
            // ->with('penyakit')
            // ->latest()
            // ->paginate(10);


        return view('admin.riwayat.index', compact('riwayat'));
    }

    public function show(Riwayat $riwayat)
    {
        return view('admin.riwayat.show', compact('riwayat'));
    }
}
