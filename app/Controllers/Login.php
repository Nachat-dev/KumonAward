<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Controller;
use App\Models\UserModel;
use CodeIgniter\HTTP\IncomingRequest;





class Login extends Controller
{
	/**
	 * @var HTTP\IncomingRequest
	 */
	protected $request;


	public function index()
	{
		helper(['form']);
		echo view('login');
	}

	public function auth()
	{

		$session = session();
		$model = new UserModel();
		$data = $model->where('user',$this->request->getVar('user'))->first();
		
		//print_r($result);
		if($data){
			if($data['password'] == $this->request->getVar('password')){
				$sesion_data = [
					'centreTH'=>$data['centreTH'],
					'centreEN'=>$data['centreEN'],
					'stdID'=>$data['stdID'],
					'stdNameTH'=>$data['stdNameTH'],
					'phone'=>$data['phone'],
					'stdNameEN'=>$data['stdNameEN'],
					'surnameTH'=>$data['surnameTH'],
					'surnameEN'=>$data['surnameEN'],
					'id' => $data['id'],
					'user' => $data['user'],
					'logged_in' => TRUE
				];
				$session->set($sesion_data);
				echo view('popup',$sesion_data);
				//print_r($sesion_data);
				
				//return redirect()->to('/profile');
				//echo "Welcome, ".$result['stdNameEN'] ;
			}else{
			$session->setFlashdata('msg', "Wrong Password");
				return redirect()->to('/login');
			}
		}else {
			$session->setFlashdata('msg', "User not found");
			return redirect()->to('/login');
		}
	/*
		$session = session();
		$model = new UserModel();
		$users = $this->request->getVar('user');
		$password = $this->request->getVar('password');
		$data = $model->where('user', $users)->first();

		if ($data) {
			$pass = $data['password'];
			$verify_password = password_verify($password, $pass);
			if ($verify_password) {
				$sesion_data = [
					'id' => $data['id'],
					'user' => $data['user'],
					'logged_in' => TRUE
				];
				$session->set($sesion_data);
				return redirect()->to('/profile');
			} else {
				$session->setFlashdata('msg', "Wrong Password");
				return redirect()->to('/login');
			}
		} else {
			$session->setFlashdata('msg', "User not found");
			return redirect()->to('/login');
		}*/
	}

	public function logout(){
		$session = session();
		$session->destroy();
		return redirect()->to('/login');
	}
}
