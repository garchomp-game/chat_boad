<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Boad extends MY_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->assign('junp_link', 'home/index');
    $this->assign('junp_name', 'ホーム');
    $this->load->library('BoadLogic','','boad');
    $this->load->library('form_validation');
    $this->assign('style','boad');
    $comments = $this->boad->getCommentAll();
    $this->assign('comments', $comments);
  }

	public function index()
	{
		$this->y('boad/index');exit
	}

  public function insert()
  {
    $postdata = $this->input->post();
    // var_dump($postdata);exit;
    // postdataは受け取れている
    if ($this->form_validation->run('signup'))
    {
      var_dump(validation_errors());exit;
      $this->boad->insertComment($postdata);
      $this->y('/boad/index/');
    }
    // 失敗した時の処理はこっち
    $this->y('boad/index');
  }
}
