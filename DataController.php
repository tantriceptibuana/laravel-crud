<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function created(){
        return view('forminputdata');
    }
    public function savecreate(Request $request){
        DB::table('data_mahasiswa') ->insert([
            'nama' => $request['xnama'],
            'tempat_lahir' => $request['xtempat'],
            'tgl_lahir' => $request['xtanggal'],
            'jenis_kelamin' => $request['xjeniskelamin'],
            'alamat' => $request['xalamat'],
            'jenjang' => $request['xjenjang'],
            'jurusan' => $request['xjurusan'],
        ]);
        return redirect('daftarmahasiswa');
    }

    public function read(){
        $data = DB::table('data_mahasiswa')->get();
        return view('daftarmahasiswa',compact('data'));
    }

    public function update($id){
        $data = DB::table('data_mahasiswa')->where('id',$id)->get();
        return view('formupdatedata',compact('data'));
    }

    public function saveupdate(Request $request){
        DB::table('data_mahasiswa') ->where('id',$request->id)->update([
            'nama' => $request['xnama'],
            'tempat_lahir' => $request['xtempat'],
            'tgl_lahir' => $request['xtanggal'],
            'jenis_kelamin' => $request['xjeniskelamin'],
            'alamat' => $request['xalamat'],
            'jenjang' => $request['xjenjang'],
            'jurusan' => $request['xjurusan'],
        ]);
        return redirect('daftarmahasiswa');
    }

    public function delete($id){
        DB::table('data_mahasiswa')->where('id',$id)->delete();
        return redirect('daftarmahasiswa');
    }
}
