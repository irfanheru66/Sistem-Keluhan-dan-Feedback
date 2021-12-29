<?php namespace App\Controllers;

use App\Models\KeluhanModel;
use App\Models\KomenModel;
use App\Models\UserModel;
class Warga extends BaseController
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
        $keluhan = $this->model->findAll();
        $data = [
            "title" =>"Keluhan Anda",
            "keluhan" => $keluhan,
            ];

		return view('wargaStuff/Tabel Keluhan',$data);
    }

    public function tambahView(){
        $data = ["title" => "Buat Keluhan"];
        return view('wargaStuff/Tambah_view',$data);
    }

    public function add(){
        $data = [
            'Judul' => $this->request->getVar("judul"),
            'Isi' => $this->request->getVar("isi"),
            'tujuan' => $this->request->getVar("divisi"),
            'pengirim'=> $_SESSION['user_id']
        ];
        $this->model->save($data);
        //dd($this->request->getVar());
        return redirect()->to('/');
    }

    public function addKomen(){
        $data = [
            'komen' => $this->request->getVar("komen"),
            'keluhan' => $this->request->getVar("id"),
            'pengirim'=> $_SESSION['user_email']
        ];
        //dd($this->request->getVar());
        
        $this->kModel->save($data);
        return redirect()->to("/Warga/Detail/".$this->request->getVar("id"));
    }

    public function Detail($id){
        $detail = $this->model->find($id);
        $komen = $this->kModel->where('keluhan',$id)->findAll();
        $pengirim = $this->uModel->where('id',$detail['pengirim'])->findColumn("Email");
        //dd($pengirim);
        //dd($detail);
        //dd($komen);
        $data = [
            "title" => "Detail keluhan",
            "pengirim" => $pengirim,
            "detail" => $detail,
            "komen" => $komen
        ];
        return view('wargaStuff/DetailView',$data);
    }
}