<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model {
    
    public function get($username){
        $this->db->where('username', $username);
        $result = $this->db->get('user')->row(); 

        return $result;
    }
    public function Getdokter_nid(){
		$this->db->select('*');
		$this->db->from('dokter');
		$this->db->join('spesialis','spesialis.id_spesialis=dokter.id_spesialis');
		$query = $this->db->get();
		return $query->result();
	}
	public function Getspesialis_nid(){
		$this->db->select('*');
		$this->db->from('spesialis');
		$query = $this->db->get();
		return $query->result();
	}
	public function Getreservasi($nid){
		$this->db->select('*');
		$this->db->from('reservasi');
		$this->db->where('nid',$nid);
		$query = $this->db->get();
		return $query->result();
	}
	public function hapus_dokter($nid)
	{
		return $this->db->delete('dokter', ['nid' => $nid]);
	}
	public function hapus_reservasi($noreservasi)
	{
		return $this->db->delete('reservasi', ['noreservasi' => $noreservasi]);
	}
	public function edit_dokter($nid,$data)
	{
		$this->db->where('nid', $nid);
		$this->db->update('dokter', $data);
	    return;
	}
	public function tambah_dokter($data)
	{
		return $this->db->insert('dokter', $data);
	}
	public function tambah_reservasi($data)
	{
		return $this->db->insert('reservasi', $data);
	}
	public function check_username($username){
		$condition = "username =" . "'" . $username . "'";
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}
	public function insert_new_profle($data){
		$this->db->insert('user', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
}
