<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function index()
	{
		$data['page_title'] = 'Home';
		$data['is_home'] = true;

		$this->load->view('inc/header', $data);
		$this->load->view('home');
		$this->load->view('inc/footer');
	}
}
