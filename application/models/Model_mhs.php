<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
class Model_mhs extends CI_Model
{
	public function ambilmhs(){
		$query = $this->db->get('tblmhs');
		return $query->result_array(); 
	}

	public function ambiledit(){
		$query = $this->db->get('hasiledit');
		return $query->result_array(); 
	}

	public function editambilmhs($id){
		$this->db->where('id',$id);
		$query = $this->db->get('datamahasiswa');
		return $query->result_array();
	}
	public function tambah_mhs()
	{
		$data = array(
		'nim'=>$this->input->post('nim'),
		'nmmahasiswa' => $this->input->post('nama'),
		'jk' => $this->input->post('jk'),
		'alamat' => $this->input->post('alamat'),
		'nohp' => $this->input->post('no_hp'));

	return $this->db->insert('datamahasiswa',$data);
	}

	public function edit_mhs()
	{
		$data = array(
		'nim'=>$this->input->post('nim'),
		'nmmahasiswa' => $this->input->post('nama'),
		'jk' => $this->input->post('jk'),
		'alamat' => $this->input->post('alamat'),
		'nohp' => $this->input->post('no_hp'));

		$id_lama = $this->input->post('id');
		$this->db->where('id', $id_lama);
		return $this->db->update('datamahasiswa',$data);
	}
	public function hapus_mhs($id){
		return $this->db->delete('datamahasiswa',array('id' =>$id));
	}
}

