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
  }

  public function index()
  {
    $this->y('boad/index');
  }

  public function insert()
  {
    $postdata = $this->input->post();
    // postdataは受け取れている
    if ($this->form_validation->run('chat_insert') && $_SERVER['REQUEST_METHOD']==='POST')
    {
      $this->boad->insertComment($postdata);
    }
    redirect('boad/index');
  }
}
