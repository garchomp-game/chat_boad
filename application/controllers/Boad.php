<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Boad extends MY_Controller {

  public function __construct()
  {
    parent::__construct();
  }

	public function index()
	{
    // $data["base_url"] = base_url();
    $this->assign('title', 'About');
    $this->assign('junp_link', 'home/index');
    $this->assign('junp_name', 'アバウトページ');
		$this->y('boad/index');
	}
}
