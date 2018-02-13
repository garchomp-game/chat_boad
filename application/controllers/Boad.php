<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Boad extends MY_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->assign('style','boad');
    $this->load->model('boad_model');
    $this->load->library('BoadLogic','','boad');
    $this->load->library('form_validation');
    $this->assign('title', 'チャット掲示板');
    $comments = $this->boad_model->getComments();
    $this->assign('comments', $comments);
  }

  public function index()
  {
    $this->redirect_login('boad/index');
    $this->assign('errors', $this->session->flashdata('error'));
    $this->y('boad/index');
  }

  public function insert()
  {
    $this->redirect_login('boad/index');
    $postdata = $this->input->post();
    // postdataは受け取れている
    if ($this->form_validation->run('chat_insert') && $_SERVER['REQUEST_METHOD']==='POST') {
      $this->boad_model->insertComment($postdata);
    }
    $this->session->set_flashdata('error', validation_errors());
    redirect('boad/index');
  }

  public function favolite()
  {
    $data = $this->input->get();
    $this->boad->favolite($data['id'], $this->session->userdata('login_id'));
    redirect('boad/index');
  }
}
