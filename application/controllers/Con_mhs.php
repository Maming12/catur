<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Con_mhs extends CI_Controller
{
	
	public function index ()
	{
		$data['mahasiswa'] = $this->Model_mhs->ambilmhs();
		$this->load->view('V_mhs',$data);
	}

	public function hasiledit ()
	{
		$data['mahasiswa'] = $this->Model_mhs->ambiledit();
		$this->load->view('hasiledit',$data);
	}

	public function tambahmhs()
	{
		$this->load->view('tambah_mhs');

	}

	public function editmhs($id)
	{
		$data['mahasiswa'] = $this->Model_mhs->editambilmhs($id);
		$this->load->view('edit_mhs',$data);	

	}
}
