<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->assign('style', 'login');
    $this->load->library('form_validation');
  }

  public function login_form()
  {
    $getdata = $this->input->get();
    $this->assign('getdata',$getdata);
    $this->y("login/login_form");
  }

  public function login_confirm($login_val = null)
  {
    $postdata = $this->input->post();
    if ($this->form_validation->run('user_create')) {
      $userdata = $this->user_model->login($postdata);
      if ($userdata) {
        $this->session->set_userdata('login_id', $userdata->id);
        if ($postdata['pass']) {
          redirect("{$postdata['pass']}?id={$postdata['id']}");
        }
        redirect('home/index');
      } else {
        $this->assign('login_error', 'ユーザーネームとパスワードが一致しません');
      }
    }
    $this->assign('name', $postdata['name']);
    $this->assign('password', $postdata['password']);
    $this->y('login/login_form');
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
    if ($this->form_validation->run('user_create') && !($this->user_model->getUserName($postdata['name']))) {
      $this->user_model->create($postdata);
      redirect('home/index');
    } else {
      $this->assign('name', $postdata['name']);
      $this->assign('password', $postdata['password']);
      $this->y('login/new');
    }
  }
}
