<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
// panggil modelnya
use App\Siswa;

class SiswaController extends Controller
{
    public function index(Request $request){

      if ($request->has('cari')) {
        $siswa = Siswa::where('nama_depan','LIKE','%'.$request->cari.'%' )->get();
      }else{
        $siswa = Siswa::all();
      }
      // Mengirim data siswa ke view index
      return view('siswa/datasiswa',['siswa' => $siswa]);
    }

    // Membuat siswa baru berdasarkan request di form
    public function createsiswa(Request $request){

      // Memasukkan data ke dalam table database
       $siswa = Siswa::create($request->all());
       return redirect('siswa'); 
    }


    public function editsiswa($id){

      // Mencari data siswa berdasar kan id kemudian ambil data ke form edit
      $siswa = Siswa::find($id);
      return view('siswa/edit',['siswa' => $siswa]);
    } 

      // Menyimpan data setelah diedit
    public function saveeditsiswa(Request $request,$id){
      $siswa = Siswa::find($id);
      $siswa->update($request->all());
      if ($request->hasFile('foto')) {
        $request->file('foto')->move('images/', $request->file('foto')->getClientOriginalName());
        $siswa->foto = $request->file('foto')->getClientOriginalName();
        $siswa->save();
      }
      return redirect('siswa')->with('sukses', 'data berhasil diupdate');
    }

    // Menghapus data siswa berdasarkan id
    public function delete($id){
      $siswa = Siswa::find($id);
      $siswa->delete($siswa);
      return redirect('siswa')->with('sukses', 'data berhasil dihapus');
    }

    public function profile($id){
      $siswa = Siswa::find($id);
      return view('siswa/profile', ['siswa' => $siswa]);
    }

}
