<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends MY_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('UserModel');
	}

	public function index(){
		if($this->session->userdata('authenticated')) 
			redirect('web/home'); 

		$this->render_index('index'); 

	}
	public function registerindex(){
		if($this->session->userdata('authenticated')) 
			redirect('web/home'); 


			$this->render_register('register'); 
		
	}
	public function registerdoctori(){
		$this->render_backend('registerdoctor');
		
	}
	public function loginindex(){
		if($this->session->userdata('authenticated')) 
			redirect('web/home'); 

		
		$this->render_login('login'); 
	}

	public function login(){
		$username = $this->input->post('username'); 
		$password = $this->input->post('password'); 
		$user = $this->UserModel->get($username); 

		if(empty($user)){ 
			$this->session->set_flashdata('message', 'Username tidak ditemukan'); 
			redirect('home/loginindex'); 
		}else{
			if($password == $user->password){
				$session = array(
					'authenticated'=>true,
					'username'=>$user->username,  
					'nama'=>$user->nama, 
					'role'=>$user->role, 
					'alamat'=>$user->alamat, 
					'nohp'=>$user->nohp,
					'nid'=>$user->nid,
					'id'=>$user->id 
				);

				$this->session->set_userdata($session); 
				redirect('web/home'); 
			}else{
				$this->session->set_flashdata('message', 'Password salah'); 
				redirect('home/loginindex'); 
			}
		}
	}
	public function register(){
		$username = $this->input->post('username');
		$pass = $this->input->post('password');
		$repass = $this->input->post('re-password');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$nohp = $this->input->post('nohp');
		if ($pass != $repass){
			$this->session->set_flashdata('message', 'Password tidak cocok'); 
			redirect('home/registerindex');
		}else if($this->UserModel->check_username($username)){
			$this->session->set_flashdata('message', 'Username sudah ada'); 
			redirect('home/registerindex');
		}else{
				$data = array(
					'username' => $username,
					'password' => $pass,
					'nama' => $nama,
					'nohp' => $nohp,
					'alamat' => $alamat
				);
				$result = $this->UserModel->insert_new_profle($data);
				if($result){
					$this->session->set_flashdata('message', 'Register Berhasil'); 
					redirect('home/registerindex');
				} else {
					$this->session->set_flashdata('message', 'Register Gagal'); 
					redirect('home/registerindex');
				}
			}
		}
		public function registerdoctor(){
		$username = $this->input->post('username');
		$pass = $this->input->post('password');
		$repass = $this->input->post('re-password');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$nohp = $this->input->post('nohp');
		$nid = $this->input->post('nid');
		$role = $this->input->post('role');
		if ($pass != $repass){
			$this->session->set_flashdata('message', 'Password tidak cocok'); 
			redirect('home/registerindex');
		}else if($this->UserModel->check_username($username)){
			$this->session->set_flashdata('message', 'Username sudah ada'); 
			redirect('home/registerindex');
		}else{
				$data = array(
					'username' => $username,
					'password' => $pass,
					'nama' => $nama,
					'nohp' => $nohp,
					'nid' => $nid,
					'role' => $role,
					'alamat' => $alamat
				);
				$result = $this->UserModel->insert_new_profle($data);
				if($result){
					$this->session->set_flashdata('message', 'Register Berhasil'); 
					redirect('home/registerdoctori');
				} else {
					$this->session->set_flashdata('message', 'Register Gagal'); 
					redirect('home/registerdoctori');
				}
			}
		}

	public function logout(){
		$this->session->sess_destroy(); 
		redirect('home'); 
	}
}
