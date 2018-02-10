<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller
{

  public function __construct()
  {
    parent::__construct();

  }

  public function login_form()
  {
    $this->y('login/login_form');
  }

  public function login_confirm()
  {
    $postdata = $this->input->post();
    $userdata = $this->user_model->login($postdata);
    if ($userdata) {
      $this->session->set_userdata('login_id', $userdata->id);
      redirect('home/index');
    } else {
      $this->assign('name', $postdata['name']);
      $this->assign('password', $postdata['password']);
      $this->y('login/login_form');
      $this->assign('style', 'login');
    }
  }

  public function logout_form()
  {
    $this->session->unset_userdata('login_id');
    redirect('home/index');
  }

  public function new()
  {
    $this->y('login/new');
  }

  public function create()
  {
    $postdata = $this->input->post();
    if ($this->form_validation->run('user_create')) {
      $this->session->set_userdata('login_id', $postdata['id']);
    } else {
      $this->assign('username', $postdata['username']);
      $this->assign('password', $postdata['password']);
      $this->y('login/new');
    }
  }
}
