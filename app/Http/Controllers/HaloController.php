<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaloController extends Controller
{
    //
    public function indexx(Request $r)
    {
        $display = "Hello Controller!<br>Parameter 1 : " . $r->param1 . "<br>";
        if(isset($r->param2))
            $display .= "Parameter 2 : " . $r->param2;

        // return plain HTML
        // return $display;

        // return view -- mengarahkan ke resources/view/...
        return view('halo')->with('display', $display);
    }

    public function index(Request $r)
    {
        // return view -- mengarahkan ke resources/view/...
        return view('halo')
            ->with('param1', $r->param1)
            ->with('param2', $r->param2);
    }

    public function post(Request $r)
    {
        // return view('halo')
        //     ->with('data', $r);

        // script menyimpan data / proses data / dan sebagainya
        // ....
        // ....

        // menuju route name('halo.index')
        // -- param1 sifatnya required sehingga parameter perlu dikirimkan
        return redirect()->route('halo.index', ['param1'=> 'Simpan Berhasil!']);
    }

    public function makesquare(Request $r)
    {
        $disp = "";
        for($i=0; $i<$r->n; $i++)
        {
            for($j=0; $j<$r->n; $j++)
            {
                $disp .= "*";
            }   
            $disp .= "\n";
        }

        return view('halo')
            ->with('n', $r->n)
            ->with('disp', $disp);
    }
}
