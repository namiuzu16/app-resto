<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Test extends Controller{
    function index(){
        return view('tampil_test');
    }

    function tampil(){
        return view('tampil_data');
    }

    function menu(){
        return view('menu_utama');
    }

    function frmbio(){
        return view('frm_bio');
    }

    function afahiyyah(){
        return view('afah_iyyah');
    }

    public function simpan(){
        $data['siswa'] = array(
            "nama" => $this->request->getPost('nama'),
            "alamat" => $this->request->getPost('alamat'),
            "husbu" => $this->request->getPost('husbu'),

        );
        return view('frm_bio',$data);
    }
}