<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scanqr extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('scanqr/index');
		$this->load->view('templates/footer');
	}
}
