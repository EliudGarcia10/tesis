<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
		echo $this->load->view('news/index', null, true);
	}

}
