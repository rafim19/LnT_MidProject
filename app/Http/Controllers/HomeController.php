<?php

namespace App\Http\Controllers;

use App\book;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class HomeController extends Controller
{
    public function beranda() {
        $datas = book::all();
        return view('beranda', compact('datas'));
    }

    public function tambah() {
        return view('tambah');
    }

    public function penyimpanan(REQUEST $request) {
        $request->validate([
            'judul_buku' => 'required|min:5|max:20',
            'penulis' => 'required|min:5|max:20',
            'halaman' => 'numeric|min:0',
            'tahun_terbit' => 'numeric|min:2000|max:2021'
        ]);

        book::create([
            'judul_buku' => $request->judul_buku,
            'penulis' => $request->penulis,
            'halaman' => $request->halaman,
            'tahun_terbit' => $request->tahun_terbit
        ]);
        
        return redirect('/');
    }

    public function ubah($id) {
        $data = book::findOrfail($id);
        return view('ubah', compact('data'));
    }

    public function terubah(REQUEST $request, $id) {
        $request->validate([
            'judul_buku' => 'required|min:5|max:20',
            'penulis' => 'required|min:5|max:20',
            'halaman' => 'numeric|min:0',
            'tahun_terbit' => 'numeric|min:2000|max:2021'
        ]);

        book::findOrfail($id)->update([
            'judul_buku' => $request->judul_buku,
            'penulis' => $request->penulis,
            'halaman' => $request->halaman,
            'tahun_terbit' => $request->tahun_terbit
        ]);
        
        return redirect('/');
    }

    public function hapus($id) {
        book::destroy($id);
        return redirect('/');
    }

    public function tampil($id) {
        $data = book::findOrfail($id);
        return view('menampilkan', compact('data'));
    }
}
