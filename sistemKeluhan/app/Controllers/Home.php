<?php namespace App\Controllers;


class Home extends BaseController
{
	public function index()
	{
		if(isset($_SESSION['logged_in'])){
			//dd($_SESSION);
			if($_SESSION['divisi'] == 'C'){
				return redirect()->to('/Warga');
			}
			elseif($_SESSION['divisi'] == 'A'){
				return redirect()->to('/Admin');	
			}
			else
			{
				return redirect()->to('/Pemerintah');	
			}
			
		}
		else{
			return redirect()->to('/Login');
		}
		
	}
		

	//--------------------------------------------------------------------

}
