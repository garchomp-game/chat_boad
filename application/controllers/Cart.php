<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends MY_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->assign('style','cart');
    $this->load->library('CartLogic');
    $this->assign('title', 'ショップ');
  }

  public function insert()
  {
    $getdata = $this->input->post();
    if ($this->cart_model->get_single($getdata)) {
      $this->cart_model->insert($getdata);
    }
    redirect('shop/index');
  }

  public function show()
  {
    $data = $this->cart_model->getAllItem($this->session->userdata('login_id'));
    $this->assign('cart', $this->cartlogic->getApi($data));
    $this->y('cart/show');
  }

  public function complete()
  {
    if ($this->cart_model->getAll($this->session->userdata('login_id'))) {
      $this->cartlogic->complete($this->session->userdata('login_id'));
    }
    redirect('shop/index');
  }
}
