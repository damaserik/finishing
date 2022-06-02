<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		// $this->load->view('index');
		$data =	$this->load->view('finishing/dashboard');
		$c['content'] =	$this->load->view('finishing/content', $data);
	}

	// public function finishing()
	// {
	//  $data =	$this->load->view('finishing/dashboard');
	//  $c['content'] =	$this->load->view('finishing/content', $data);
	// }
}