<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class holaMundo extends CI_Controller {

	public function index()
	{
		$this->load->view('holaMundo');
	}
}
