<?php 


class Mahasiswa extends CI_Controller{

	public function tambahmhs()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama','nama','required');


		if (!$this->form_validation->run()==false) {
			$this->Model_mhs->tambah_mhs();
			redirect('Con_mhs/');
		}else {
			redirect('Con_mhs/tambahmhs');
		}
	}
	public function editmhs()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama','nama','required');

		if ($this->form_validation->run()!=false) {
			$this->Model_mhs->edit_mhs();
			redirect('Con_mhs');
		}else{
			redirect('Con_mhs/editmhs');
		}
	}

	public function hapusmhs($id) {
		if ($id != ""){
			$this->Model_mhs->hapus_mhs($id);
			redirect('Con_mhs');
		}else{
			redirect('Con_mhs');
		}
	}
	
}

