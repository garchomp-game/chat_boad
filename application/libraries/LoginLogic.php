<?php
class BoadLogic
{
  public function __construct()
  {
    $this->CI =& get_instance();
    $this->CI->load->model('user_model');
  }
}
