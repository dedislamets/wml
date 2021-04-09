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

	public function products()
	{		
		$data['main'] = 'dgpack/product';
		$this->load->view('dgpack',$data,FALSE); 			  
						
	}
	public function single()
	{		
		$data['main'] = 'dgpack/single';
		$this->load->view('dgpack',$data,FALSE); 			  
						
	}
	public function wooden()
	{		
		$data['main'] = 'dgpack/wooden';
		$this->load->view('dgpack',$data,FALSE); 			  
						
	}
	public function innerpack()
	{		
		$data['main'] = 'dgpack/inner';
		$this->load->view('dgpack',$data,FALSE); 			  
						
	}
	public function vermiculite()
	{		
		$data['main'] = 'dgpack/vermiculite';
		$this->load->view('dgpack',$data,FALSE); 			  
						
	}
	public function dryice()
	{		
		$data['main'] = 'dgpack/dry';
		$this->load->view('dgpack',$data,FALSE); 			  
						
	}
	public function labels()
	{		
		$data['main'] = 'dgpack/labels';
		$this->load->view('dgpack',$data,FALSE); 			  
						
	}
}
