<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Riwayat;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    // function __construct()
    // {
    //      $this->middleware('permission:riwayat-list', ['only' => ['index']]);
    //      $this->middleware('permission:riwayat-show', ['only' => ['show']]);
    // }

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
        $this->authorize('show', $riwayat);
        return view('admin.riwayat.show', compact('riwayat'));
    }
}
