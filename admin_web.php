<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_web extends CI_Controller {
	/*
		author : Agung wicaksono
		email : gantawisata@yahoo.co.id
	*/
	function __construct()
	{
		parent::__construct();
		# Library
		$this->load->library('table');
		$this->load->library('DX_Auth');
		$this->load->library('Form_validation');
		$this->load->library('Pagination');
		
		# Help
		$this->load->helper('form');
		$this->load->helper('date');
		date_default_timezone_set("Asia/Jakarta");
		
		# Model
		$this->load->model('umum');
		$this->dx_auth->check_uri_permissions();
	}
	
	public function index()
	{
		$this->load->view('admin/global/home');
		$this->load->view('admin/global/menu');
		$this->load->view('admin/global/depan');
		$this->load->view('admin/global/foot');
	}
	
	
}

/* End of file edit.php */
/* Location: ./application/controllers/edit.php */