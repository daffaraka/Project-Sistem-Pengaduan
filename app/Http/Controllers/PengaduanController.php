<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title'] = 'Pengaduan';
        $data['caption'] = 'Tambah Data Pengaduan';
        if (Auth::user()->role == 'admin') {
            $data['caption'] = $data['caption'];
        } else {
            $data['caption'] = 'Buat Pengaduan Anda';
        }
        $data['pengaduans'] = [];
        if (Auth::user()->role == 'admin') {
            $data['pengaduans'] = Pengaduan::all();
        } else {
            $data['pengaduans'] = Pengaduan::where('user_id', Auth::user()->id)->get();
        }


        return view('dashboard.pengaduan.pengaduan-index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $caption = 'Tambah Data Pengaduan';
        if (Auth::user()->role == 'admin') {
            $caption = $caption;
        } else {
            $caption = 'Buat Pengaduan Anda';
        }
        return view('dashboard.pengaduan.pengaduan-create', compact('caption'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pengaduan::create(
            [
                'user_id' => Auth::user()->id,
                'judul' => $request->judul,
                'isi' => $request->isi,
                'status' => 'ANTRIAN'
            ]
        );

        return redirect()->route('pengaduan');
    }


    public function show(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pengaduan = Pengaduan::find($id);

        return view('dashboard.pengaduan.pengaduan-edit', compact('pengaduan'));
    }


    public function update(Request $request, $id)
    {
        $pengaduan = Pengaduan::find($id);

        $pengaduan->update($request->all());

        return redirect()->route('pengaduan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pengaduan = Pengaduan::find($id);
        $pengaduan->delete();
        return redirect()->route('pengaduan');
    }
}
