<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\User;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Dosen::all();
        // dd($user);
        return view('pengguna.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //    $data= [
    //     'nama_dosen' => $request->nama_dosen,
    //     'kode_dosen' => $request->kode_dosen,
    //     'no_card'=> $request->no_card,
    //    ];
        $dosen = new Dosen();
        $dosen->nama_dosen=$request->nama_dosen;
        $dosen->kode_dosen=$request->kode_dosen;
        $dosen->no_card=$request->no_card;
        $dosen ->save();
        // dd($dosen);
        return redirect()->route('pengguna.index')->with('Pesan','Berhasil Menambahkan  Data. :)');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
