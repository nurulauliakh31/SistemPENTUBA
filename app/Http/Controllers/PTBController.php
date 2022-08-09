<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tukang;


class PTBController extends Controller
{
    public function index() { 
        return view('Dashboard');
    }

    public function DataUser() {
        $a = DB::table('user')->get();
        return view ('DataUser', ['data' => $a]);
    }

    public function simpan(Request $a) {
        $file = $a->file('Foto');
        //ambil nama file.
        $nama_file = time()."-".$file->getClientOriginalName();
        //ambil ektension file
        $namaFolder = 'Foto';
        $file->move($namaFolder, $nama_file);
        $pathPublic = $namaFolder."/".$nama_file;

        $message = [
            'nim.required' => 'Nim belum terisi',
            'nama.required' => 'Nama belum teriisi',
            ];
    
            $a->validate([
                'Id_User' => 'required',
                'Nama' => 'required',
            ], $message);

        DB::table('user')->insert([
            'Id_User'=> $a->Id_User,
            'Nama'=> $a->Nama,
            'Alamat'=> $a->Alamat,
            'Email'=> $a->Email,
            'Password'=> $a->Password,
            'Foto'=> $pathPublic,
            'Level_User'=> $a->Level_User
        ]);

        return redirect('/User')->with('status', 'Data berhasil di tambah');
        
        /*
        DB::table('user')->insert([
            'Id_User'=> $request->Id_User,
            'Nama'=> $request->Nama,
            'Alamat'=> $request->Alamat,
            'Email'=> $request->Email,
            'Password'=> $request->Password,
            'Foto'=> $request->Foto,
            'Level_User'=> $request->Level_User
        ]);
        return redirect('/User');
        */
    }

    public function frmEdit($id) {
        $data = DB::table('user')->where('Id_User', $id)->get();
        return view('FormEditUser', ['ambil' => $data]);
    }

    public function UpdateData(Request $a) {
        $file = $a->file('Foto');
        if (file_exists($file)) {
            $nama_file = time(). "-" . $file->getClientOriginalName();
            $folder = 'Foto';
            $file->move($folder, $nama_file);
            $path = $folder."/".$nama_file;
        }
        else 
        {
            $path = $a->pathfoto;
        }

        DB::table('user') -> where ('Id_User', $a->Id_User)->update([
            'Nama'=> $a->Nama,
            'Alamat'=> $a->Alamat,
            'Email'=> $a->Email,
            'Password'=> $a->Password,
            'Foto'=> $path,
            'Level_User'=> $a->Level_User
        ]);
        return redirect('/User')->with('status', 'Data berhasil di edit');
        
    }

    public function hapus($d) {
        DB::table('user')->where('Id_User', $d)->delete();
        return redirect('/User')->with('status', 'Data berhasil di hapus');
    }

    //PTB
    public function DataPTB() {
        $a = DB::table('penyediatb')->get();
        return view ('DataPTB', ['data' => $a]);
    }

    public function simpan_PTB(Request $a) {
        DB::table('penyediatb')->insert([
            'Id_yayasan'=> $a->Id_yayasan,
            'Nama_yayasan'=> $a->Nama_yayasan,
            'Alamat_yayasan'=> $a->Alamat_yayasan,
            'Email'=> $a->Email,
            'No_Hpyayasan'=> $a->No_Hpyayasan,
            'No_izinyayasan'=> $a->No_izinyayasan
        ]);

        return redirect('/PenyediaTB')->with('status', 'Data berhasil di tambah');
    }

    public function frmEdit_PTB($id) {
        $data = DB::table('penyediatb')->where('Id_yayasan', $id)->get();
        return view('FormEditPTB', ['ambil' => $data]);
    }

    public function UpdateData_PTB(Request $a) {
        DB::table('penyediatb') -> where ('Id_yayasan', $a->Id_yayasan)->update([
            'Nama_yayasan'=> $a->Nama_yayasan,
            'Alamat_yayasan'=> $a->Alamat_yayasan,
            'Email'=> $a->Email,
            'No_Hpyayasan'=> $a->No_Hpyayasan,
            'No_izinyayasan'=> $a->No_izinyayasan
        ]);
        return redirect('/PenyediaTB')->with('status', 'Data berhasil di edit');
        
    }

    public function hapus_PTB($d) {
        DB::table('penyediatb')->where('Id_yayasan', $d)->delete();
        return redirect('/PenyediaTB')->with('status', 'Data berhasil di hapus');
    }
    
    //Tukang
    public function DataTukang() {
        $a = DB::table('tukang')->get();
        return view ('DataTukang', compact('a'));
    }

    public function simpan_Tukang(Request $a) {
        DB::table('tukang')->insert([
            'Id_Tukang'=> $a->Id_Tukang,
            'Nama_Tukang'=> $a->Nama_Tukang,
            'Usia'=> $a->Usia,
            'Jenis_Kelamin'=> $a->Jenis_Kelamin,
            'Alamat'=> $a->Alamat,
            'Email'=> $a->Email,
            'No_Hpyayasan'=> $a->No_Hpyayasan,
            'Status_Pernikahan'=> $a->Status_Pernikahan,
            'Skill'=> $a->Skill,
            'Gaji_Tukang'=> $a->Gaji_Tukang,
            'Id_yayasan'=> $a->Id_yayasan
        ]);

        return redirect('/Tukang')->with('status', 'Data berhasil di tambah');
    }

    public function frmEdit_Tukang($id) {
        $a = DB::table('tukang')->where('Id_Tukang', $id)->get();
        return view('FormEditTukang',compact('a'));
    }

    public function UpdateData_Tukang(Request $a) {
        DB::table('tukang') -> where ('Id_Tukang', $a->Id_Tukang)->update([
            'Nama_Tukang'=> $a->Nama_Tukang,
            'Usia'=> $a->Usia,
            'Jenis_Kelamin'=> $a->Jenis_Kelamin,
            'Alamat'=> $a->Alamat,
            'Email'=> $a->Email,
            'No_Hpyayasan'=> $a->No_Hpyayasan,
            'Status_Pernikahan'=> $a->Status_Pernikahan,
            'Skill'=> $a->Skill,
            'Gaji_Tukang'=> $a->Gaji_Tukang,
            'Id_yayasan'=> $a->Id_yayasan
        ]);
        return redirect('/Tukang')->with('status', 'Data berhasil di edit');
        
    }

    public function hapus_Tukang($d) {
        DB::table('tukang')->where('Id_Tukang', $d)->delete();
        return redirect('/Tukang')->with('status', 'Data berhasil di hapus');
    }
}
