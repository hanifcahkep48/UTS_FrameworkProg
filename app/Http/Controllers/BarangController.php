<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Expr\List_;

class BarangController extends Controller
{
    public function list()
    {
        $hasil = DB::select('select * from parfum');
        return view('list-barang', ['data' => $hasil]);
    }
    public function simpan(Request $req)
    {
        DB::insert(
            'insert into parfum (nama_parfum, kategori_parfum, stock_parfum) values (?, ?, ?)',
            [$req->nama_parfum, $req->kategori_parfum, $req->stock_parfum]
        );
        $hasil = DB::select('select * from parfum');
        return view('list-barang', ['data' => $hasil]);
    }
    public function hapus($req)
    {
        Log::info('proses hapus dengan id=' . $req);
        DB::delete('delete from parfum where id = ?', [$req]);

        $hasil = DB::select('select * from parfum');
        return view('list-barang', ['data' => $hasil]);
    }
    public function ubah($req)
    {
        $hasil = DB::select('select * from parfum where id = ?', [$req]);
        return view('form-ubah', ['data' => $hasil]);
    }
    public function rubah(Request $req)
    {
        Log::info('Hallo');
        Log::info($req);
        DB::update(
            'update parfum set ' .
                'nama_parfum=?, ' .
                'kategori_parfum=?, ' .
                'stock_parfum=? where id=? ',
            [
                $req->nama_parfum,
                $req->kategori_parfum,
                $req->stock_parfum,
                $req->id
            ]
        );
        $hasil = DB::select('select * from parfum');
        return view('list-barang', ['data' => $hasil]);
    }
}
