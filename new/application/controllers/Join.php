<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Join extends CI_Controller 
{
    public function index()
    {
        $data['page_title'] = 'Join';
        $data['page_subtitle'] = 'Interested in joining Redbird Robotics?';
        $data['is_home'] = false;

        $this->load->view('inc/header', $data);
        $this->load->view('join');
        $this->load->view('inc/footer');
    }
}
