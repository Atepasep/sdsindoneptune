<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('kode')==''){
			$url = base_url();
			redirect($url);
		}
		$this->load->model('mmain');
		$this->load->model('mstatus');
	}
	public function index()
	{
		$data['datapersonil'] = $this->mmain->cekdata($this->session->userdata('kode'))->row_array();
		$this->load->view('header');
        $this->load->view('status',$data);
        $this->load->view('footer');
	}
	function sehat(){
		$noinduk = $_POST['induk'];
		$id = $_POST['id'];
		$isidata = $this->mstatus->isidata($noinduk,$id)->result();
		echo json_encode($isidata);
	}
	function oke(){
		$this->session->set_flashdata('msg','berhasil');
		$this->session->unset_userdata('kode');
		$url = base_url();
		redirect($url);
	}
	function batal(){
		$this->session->unset_userdata('kode');
		$url = base_url();
		redirect($url);		
	}
}
