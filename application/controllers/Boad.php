<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Boad extends MY_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->assign('style','boad');
    $comments = $this->boad->getCommentAll();
    $this->assign('comments', $comments);
    $this->load->library('form_validation');
    $this->assign('title', 'チャット掲示板');
  }

  public function index()
  {
    $this->redirect_login('boad/index');
    $this->y('boad/index');
  }

  public function insert()
  {
    $postdata = $this->input->post();
    // postdataは受け取れている
    if ($this->form_validation->run('chat_insert')) {
      $this->boad->insertComment($postdata);
    }
    $this->y('boad/index');
  }
}
 // && $_SERVER['REQUEST_METHOD']==='POST'
