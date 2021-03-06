<?php

namespace App\Http\Controllers\Frontpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Brankas;

class BrankasController extends Controller
{
    public function index() 
    {
        $brankas = Brankas::all();
        return view('frontpage.brankas')->with([
            'brankas' => $brankas
        ]);
    }

    public function show($id)
    {
        $brankas = Brankas::find($id);
        return view('frontpage.brankas-detail')->with([
            'brankas' => $brankas
        ]);
    }

    public function create() 
    {
        return view('frontpage.brankas-create');
    }

    // method untuk insert data ke table brankas
    public function store(Request $request)
    {

        // insert data ke table brankas
        DB::table('brankas')->insert([
            'judul' => $request->judul,
            'no_dokumen' => $request->no_dokumen,
            'tahun' => $request->tahun,
            'brankas' => $request->brankas,
            'rincian' => $request->rincian,
            'no_po' => $request->no_po,
            'no_spk' => $request->no_spk,
            'lokasi' => $request->lokasi,
            'keterangan' => $request->keterangan
        ]);
        // alihkan halaman ke halaman brankas
        return redirect()->route('frontpage.brankas');
    
    }

    // public function edit($id)
    // {
    //         $brankas = Brankas::find($id);
    //         return view('frontpage.brankas-edit')->with([
    //             'brankas' => $brankas
    //     ]);
    // }
    public function edit($id)
    {
            $brankas = Brankas::find($id);
            return view('frontpage.brankas-edit',compact('brankas'));
    }

    public function update(Request $request, $id)
    {
        $brankas = Brankas::where('id',$request->id)
        ->update([
            'judul' => $request->judul,
            'no_dokumen' => $request->no_dokumen,
            'tahun' => $request->tahun,
            'brankas' => $request->brankas,
            'rincian' => $request->rincian,
            'no_po' => $request->no_po,
            'no_spk' => $request->no_spk,
            'lokasi' => $request->lokasi,
            'keterangan' => $request->keterangan
         ]);
        return redirect()->route('frontpage.brankas');
    }

        public function hapus($id)
    {
        DB::table('brankas')->where('id',$id)->delete();
        return redirect()->route('frontpage.brankas');
    }
}