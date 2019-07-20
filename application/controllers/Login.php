<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function tambah_data()
	{
		$this->load->view('tambah_data');
	}

	public function update_data()
	{
		$this->load->view('update_data');
	}

	public function read_data()
	{
		$this->load->view('read_data');
	}

	public function about()
	{
		$this->load->view('about');
	}
}
