<?php namespace App\Controllers;


class Register extends BaseController
{
	
	protected $RegisterModel;

	public function __construct() {
		$this->RegisterModel = new \App\Models\UserModel();
	}
	public function index()
	{
        $data = ["title" => "Register"];
		return view('userStuff/register_view',$data);
	}
    public function save()
	{
		$this->RegisterModel->save(
			[
			'NIK' => $this->request->getVar('nik'),
			'Nama'=> $this->request->getVar('nama'),
			'Password'=> password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
			'Divisi'=> $this->request->getVar('divisi'),
			'Alamat' => $this->request->getVar('alamat'),
			'Email' =>  $this->request->getVar('email'),
		]
		);
		return redirect()->to('/Login');
	}



	//--------------------------------------------------------------------

}
