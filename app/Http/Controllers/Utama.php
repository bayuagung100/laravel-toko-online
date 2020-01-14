<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//memanggil model
use App\M_Barang;

class Utama extends Controller
{
    public function index(){
        return view('Utama');
    }

    public function store(Request $request){
        $this->validate($request, [
            //max filenya 2048 kb
            'file' => 'required|max:2048'
        ]);
        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'data_file';
        if ($file->move($tujuan_upload, $nama_file)) {
            $data = M_Barang::create([
                'nama_produk' => $request->nama_produk,
                'harga' => $request->harga,
                'gambar' => $request->nama_file 
            ]);
            $res['message'] = "Sukses";
            $res['values'] = $data;
            return response($res);
        }
    }
}
