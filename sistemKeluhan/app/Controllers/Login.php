<?php namespace App\Controllers;

class Login extends BaseController
{
    protected $LoginModel;

	public function __construct() {
		$this->LoginModel = new \App\Models\UserModel();
	}

    public function index()

    {
        
        $session = session(); 
        if ($session->get('logged_in'))
        {
            return redirect()->to('/'); 
        }
        else{
            $data = ["title" => "Login"];
            return view('userStuff/login_view',$data);
        }
           
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }

    public function in()
    {
        $session = session();
        $model = $this->LoginModel;
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('Email', $email)->first();
        if($data){
            $pass = $data['Password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass == TRUE){
                $ses_data = [
                    'user_id'       => $data['id'],
                    'user_email'    => $data['Email'],
                    'divisi'        => $data['Divisi'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/Login');
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/Login');
        }
    }
}
