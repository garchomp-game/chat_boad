<?php
class BoadLogic
{
  public function __construct()
  {
    $this->CI =& get_instance();
    $this->CI->load->model('boad_model');
  }

  public function getCommentAll()
  {
    return $this->CI->boad_model->getComments();
  }

  public function insertComment($postdata)
  {
    return $this->CI->boad_model->insertComment($postdata);
  }

}
