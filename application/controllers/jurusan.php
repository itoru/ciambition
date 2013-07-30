<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jurusan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_jurusan');
	}

	public function index()
	{
		$this->load->view('include/header');
		$data['data']=$this->m_jurusan->get_all_jurusan();
		$this->load->view('jurusan/list', $data);
	}

	public function add(){
		$data = array(
			'kd_jurusan' => $this->input->post('kd_jurusan'), 
			'nama_jurusan' => $this->input->post('nama_jurusan')
			);
		$this->m_jurusan->insert($data);
		redirect ('list');
	}

}

/* End of file  */
/* Location: ./application/controllers/ */