<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class web extends MY_Controller {
    public function __construct(){
		parent::__construct();

		$this->load->model('UserModel');
	}
	public function home(){
		
		$this->render_backend('home');
	}
	public function registerdoctor(){
		
		$this->render_backend('registerdoctor');
	}
	public function contact(){
		$this->render_backend('contact'); 
	}
	public function about(){
		$this->render_backend('about'); 
	}
	public function dokter()
	{
		if($this->session->userdata('role') != 'Admin')
	    show_404(); 

		$data_dokter = $this->UserModel->Getdokter_nid();
		$data_spesialis = $this->UserModel->Getspesialis_nid();
		$this->render_backend('admin/doctor',['data'=>$data_dokter,'dataJ'=>$data_spesialis]);
	}
	public function doctor()
	{
	
		$data_dokter = $this->UserModel->Getdokter_nid();
		$data_spesialis = $this->UserModel->Getspesialis_nid();
		$this->render_backend('doctor',['data'=>$data_dokter,'dataJ'=>$data_spesialis]);
	}
	public function reservation($nid)
	{
		if($this->session->userdata('role') != 'Dokter') 
	    show_404(); 

		$data_reservation = $this->UserModel->Getreservasi($nid);
		$this->render_backend('reservation',['data'=>$data_reservation]);
	}
    public function hapusdokter($nid)
	{
		$this->UserModel->hapus_dokter($nid);
		redirect('web/dokter');
	}
	public function reservasii($nid,$noreservasi)
	{
		$this->UserModel->hapus_reservasi($noreservasi);
		$data_reservasi = $this->UserModel->Getreservasi($nid);
		$this->render_backend('reservation',['data'=>$data_reservasi]);
	}

	public function tambahdokter()
	{
		$initialize = $this->upload->initialize(array(
				"upload_path" => './assets/ava/',
				"allowed_types" => "gif|jpg|jpeg|png|bmp",
				"remove_spaces" => TRUE
				
				
			));
		$this->load->library('upload', $initialize);
			if (!$this->upload->do_upload('foto')) {
				$error = array('error' => $this->upload->display_errors());
				$data['error_message'] = $this->upload->display_errors();
				echo 'anda gagal upload';
			} else {
				$data = $this->upload->data();
				$gambar = $data['file_name'];
			$input_data = [
			'nid' => $this->input->post('nid', true),
			'nama' => $this->input->post('nama', true),
			'alamat' => $this->input->post('alamat', true),
			'id_spesialis' => $this->input->post('id_spesialis', true),
			'foto' => $gambar
		];
		$this->UserModel->tambah_dokter($input_data);
		redirect('web/dokter');

	}
}

	public function tambahreservasi()	{
	
		$input_data = [
			'nid' => $this->input->post('nid', true),
			'nama' => $this->input->post('nama', true),
			'subjek' => $this->input->post('subjek', true),
			'pesan' => $this->input->post('pesan', true),
			'pengirim' => $this->input->post('pengirim', true),
			'tanggal' => $this->input->post('tanggal', true),
			'jam' => $this->input->post('jam', true)
		];
		$this->UserModel->tambah_reservasi($input_data);
		$this->session->set_flashdata('message', 'Pesan Terkirim');
		redirect('web/doctor');

	}

	public function editdokter()
	{
		$initialize = $this->upload->initialize(array(
				"upload_path" => './assets/Foto/',
				"allowed_types" => "gif|jpg|jpeg|png|bmp",
				"remove_spaces" => TRUE
				
				
			));
		$this->load->library('upload', $initialize);
			if (!$this->upload->do_upload('foto')) {
				$error = array('error' => $this->upload->display_errors());
				$data['error_message'] = $this->upload->display_errors();
				echo 'anda gagal upload';
			} else {
				$data = $this->upload->data();
				$gambar = $data['file_name'];

				$nid = $this->input->post('nid');
				$nama = $this->input->post('nama');
				$alamat = $this->input->post('alamat');
				$id_spesialis = $this->input->post('id_spesialis');
				$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'id_spesialis' => $id_spesialis,
			'foto' =>$gambar
		);
		$this->UserModel->edit_dokter($nid,$data);

		redirect('web/dokter');	
	}
}

}


