<?php namespace App\Controllers;

use App\Models\KeluhanModel;
use App\Models\KomenModel;
use App\Models\UserModel;
class Admin extends BaseController
{
    protected $model;
    protected $kModel;
    protected $uModel;

    public function __construct() {
        $this->model = new KeluhanModel();  
        $this->kModel = new KomenModel();
        $this->uModel = new UserModel();
    }

    public function index(){
        $user = $this->uModel->findAll();
        $data = [
            "title" =>"Admin | Tabel Pengguna",
            "user" => $user,
            ];

		return view('adminStuff/TabelUser',$data);
    }

    public function keluhan(){
        $keluhan = $this->model->findAll();
        $data = [
            "title" =>"Admin | Tabel Keluhan",
            "keluhan" => $keluhan,
            ];

		return view('adminStuff/Tabel Keluhan',$data);
    }

    public function delU($id){
        $this->uModel->delete($id);
        return redirect()->to('/Admin');
    }

    public function delK($id){
        $this->model->delete($id);
        return redirect()->to('/Admin/keluhan');
    }

    public function detailK($id){
        $detail = $this->model->find($id);
        //dd($detail);
        //dd($pengirim);
        //dd($komen);
        $data = [
            "title" => "Detail keluhan",
            "detail" => $detail,
        ];
        return view('adminStuff/KeluhanDetail',$data);
    }

    public function detailU($id){
        $detail = $this->uModel->find($id);
        //dd($detail);
        //dd($pengirim);
        //dd($komen);
        $data = [
            "title" => "Detail Pengguna",
            "detail" => $detail,
        ];
        return view('adminStuff/UserDetail',$data);
    }

    public function editK(){
         //dd($this->request->getVar());
         $id = $this->request->getVar("id");
        $data = [
            'tanggapan' => $this->request->getVar("tanggapan"),
            'penanggap'=> $this->request->getVar("penanggap"),
            'Isi' => $this->request->getVar("isi"),
            'Judul'=> $this->request->getVar("judul"),
        ];
        $this->model->update($id,$data);
        return redirect()->to('/Admin/keluhan');
    }

    public function editU(){
         //dd($this->request->getVar());
         $id = $this->request->getVar("id");
        $data = [
        'NIK' => $this->request->getVar("nik"),
        'Nama' => $this->request->getVar("nama"),
        'Alamat'=> $this->request->getVar("alamat"),
        'Email'=> $this->request->getVar("email"),
        ];
        $this->uModel->update($id,$data);
        return redirect()->to('/');
    }

    

}