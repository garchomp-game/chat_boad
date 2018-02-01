<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url_helper');
  }

	public function index()
	{
    $data["base_url"] = base_url();
		$this->load->view('home/index', $data);
	}
}
