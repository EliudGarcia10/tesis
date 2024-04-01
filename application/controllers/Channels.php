<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Channels extends CI_Controller {

	public function index()
	{
		echo $this->load->view('channels/index', null, true);
	}

}
