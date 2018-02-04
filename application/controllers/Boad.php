<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Boad extends MY_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('BoadLogic','','boad');
  }

	public function index()
	{
    $comments = $this->boad->getCommentAll();
    $this->assign('junp_link', 'home/index');
    $this->assign('junp_name', 'ホーム');
    $this->assign('comments', $comments);
		$this->y('boad/index');
	}

  public function insert()
  {
    $postdata = $this->input->post();
    var_dump($postdata);exit;
    $this->boad->insertComment();
    redirect('/boad/index/');
  }
}
