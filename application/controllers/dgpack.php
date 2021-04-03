<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dgpack extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	    $this->load->model('admin');
	    $this->load->model('M_menu','',TRUE);
	   
	}
	public function index()
	{		
		$data['main'] = 'dgpack/index';
		// $data['js'] = 'home/js';
		$this->load->view('dgpack',$data,FALSE); 			  
						
	}
	
}
