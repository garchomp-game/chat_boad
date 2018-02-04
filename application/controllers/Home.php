<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

  public function __construct()
  {
    parent::__construct();
  }

	public function index()
	{
    // タイトルとリンクの設定
    $this->assign('junp_link', 'boad/index');
    $this->assign('junp_name', '掲示板');
    // とび先を指定
		$this->y('home/index');
	}
}
