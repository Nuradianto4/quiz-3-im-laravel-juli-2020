<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyekController extends Controller
{
    public function index()
    {
      $posting = DB::table('proyek')->get();
      return view('proyek.tabel', compact('posting'));
    }
    public function create()
    {
      return view('proyek.create');
    }

    public function store(Request $request)
    {
      $request->validate([
        'nama_proyek'=>'required',
        'deskripsi_proyek'=>'required',
        'tanggal_dibuat'=>'required',
        'tanggal_deadline'=>'required',
        'status'=>'required'
      ]);

      $query= DB::table('proyek')->insert([
        'nama_proyek'=>$request["nama_proyek"],
        'deskripsi_proyek'=>$request["deskripsi_proyek"],
        'tanggal_dibuat'=>$request["tanggal_dibuat"],
        'tanggal_deadline'=>$request["tanggal_deadline"],
        'status'=>$request["status"]
      ]);
      return redirect('/proyek')->with ('berhasil','Proyek Berhasil ditambahkan') ;
    }

    public function show($id)
    {
      $show=DB::table('proyek')->where('id',$id)->first();
      return view('proyek.show',compact('show'));
    }

    public function edit($id)
    {
      $edit=DB::table('proyek')->where('id',$id)->first();
      return view('proyek.edit',compact('edit'));
    }

   public function update($id, Request $request)
   {
      $request->validate([
        'nama_proyek'=>'required',
        'deskripsi_proyek'=>'required',
        'tanggal_dibuat'=>'required',
        'tanggal_deadline'=>'required',
        'status'=>'required'
      ]);

      $query=DB::table('proyek')
      ->where('id',$pertanyaan_id)
      ->update([
        'nama_proyek'=>$request["nama_proyek"],
        'deskripsi_proyek'=>$request["deskripsi_proyek"],
        'tanggal_dibuat'=>$request["tanggal_dibuat"],
        'tanggal_deadline'=>$request["tanggal_deadline"],
        'status'=>$request["status"]
      ]);
      return redirect('/proyek')->with ('berhasil','Proyek Berhasil diubah') ;
   }

   public function destroy($id)
   {
      $query=DB::table('proyek')->where('id',$id)->delete();
      return redirect('/proyek')->with ('berhasil','Proyek Berhasil dihapus') ;
   }
}
