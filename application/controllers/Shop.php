<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends MY_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->assign('style','shop');
  }

  public function index()
  {
    $this->y('shop/index');
  }

  public function cart()
  {
    $this->y('shop/cart');
  }
}
