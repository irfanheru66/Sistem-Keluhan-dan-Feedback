<?php namespace App\Controllers;

use App\Models\tanggapanModel;
use App\Models\KomenModel;
use App\Models\UserModel;
class Pemerintah extends BaseController
{
    protected $model;
    protected $kModel;
    protected $uModel;

    public function __construct() {
        $this->model = new tanggapanModel();
        $this->kModel = new KomenModel();
        $this->uModel = new UserModel();
    }
    public function index(){
		$keluhan = $this->model->where("tujuan",$_SESSION['divisi'])->findAll();
        $data = [
            "title" => "Dashboard pemerintah",
            "keluhan" => $keluhan,
            ];

		return view('pemerintahStuff/Tabel Keluhan',$data);
    }

    public function Detail($id){
        $detail = $this->model->find($id);
        
        $komen = $this->kModel->where('keluhan',$id)->findAll();
        
        $pengirim = $this->uModel->where('id',$detail['pengirim'])->findColumn("Email");
        //dd($pengirim);
        //dd($komen);
        $data = [
            "title" => "Detail keluhan",
            "detail" => $detail,
            "komen" => $komen,
            "pengirim" => $pengirim[0],
        ];
        //dd($komen);
        
        return view('pemerintahStuff/DetailView',$data);
    }
    public function edit(){
        
        //dd($_SESSION);
        $id = $this->request->getVar("id");
        $data = [
            'tanggapan' => $this->request->getVar("Tanggapi"),
            'penanggap'=> $_SESSION["user_email"],
            'ditanggapi' => "Y"
        ];
        $this->model->update($id,$data);
        return redirect()->to('/');
    }
}