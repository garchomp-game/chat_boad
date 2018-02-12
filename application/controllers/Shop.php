<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends MY_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->assign('style','shop');
    $this->load->library('ShopLogic');
    $this->assign('title', 'ショップ');
  }

  public function index()
  {
    // $this->d($this->shoplogic->getItemAll());
    $this->assign('itemdata', $this->shoplogic->getItemAll());
    $this->y('shop/index');
  }

  public function show()
  {
    $getdata = $this->input->get();
    $this->redirect_login("shop/show&id={$getdata['id']}");
    $this->assign('itemdata', $this->shoplogic->getItem($getdata['id']));
    $this->y('shop/show');
  }

}
