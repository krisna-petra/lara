<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;

class BiodataController extends Controller
{
    //

    public function index()
    {
        $biodata = Biodata::get();
        return view('biodata.index')
            ->with('biodata',$biodata);
    }

    public function tambah()
    {
        $this->authorize('insert');

        return view('biodata.tambah');
    }

    public function simpan(Request $r)
    {
        if(isset($r->id))
        {
            $biodata = Biodata::where('id', $r->id)->first();
            $route = 'biodata';
        }
        else
        {
            $biodata = new Biodata;
            $route = 'biodata.tambah';
        }
        $biodata->nama = $r->nama;
        $biodata->tahun_masuk = $r->tahun_masuk;
        $biodata->tgl_lahir = $r->tgl_lahir;
        $biodata->alamat = $r->alamat;
        $biodata->is_aktif = $r->is_aktif;
        $biodata->notelp = $r->notelp;
        $biodata->save();

        return redirect()->route($route);
    }

    public function lihat(Request $r)
    {
        $data = Biodata::where('id', $r->id)->first();
        return view('biodata.lihat')
            ->with('data', $data);
    }

    public function hapus(Request $r)
    {
        $data = Biodata::where('id', $r->id)->first();
        $data->delete();
        return redirect()->route('biodata');
    }
}
