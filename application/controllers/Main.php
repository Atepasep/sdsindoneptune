<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('mmain');
	}
	public function index()
	{
		$data['formlogin'] = base_url().'main/cekdata';
		$this->load->view('header');
        $this->load->view('main',$data);
        $this->load->view('footer');
	}

	function cekdata(){
		if($this->input->post('username')!=null){
			$username=strip_tags(str_replace("'", "", $this->input->post('username')));
			$idkey = $username;
			$cekdata = $this->mmain->cekdata($idkey);
			if($cekdata->num_rows() == 1){
				$datuse = $cekdata->row_array();
				$this->session->set_userdata('kode',$datuse['idkey']);
				$url = base_url().'status/';
				redirect($url);
			}else{
				$this->session->set_flashdata('msg','usernotfound');
                $url = base_url();
                redirect($url);
			}
		}else{
			$url = base_url();
            redirect($url);
		}
	}
}
