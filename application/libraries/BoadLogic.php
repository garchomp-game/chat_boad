<?php
class BoadLogic
{
  public function __construct()
  {
    $this->CI =& get_instance();
    $this->CI->load->model('favolite_model');
  }

  /**
  * ファボしていなかったらファボを、していたら外す
  *
  * @return string $id ユーザーのファボＩＤを取得
  */
  public function favolite($id, $login_id)
  {
    if ($this->CI->favolite_model->get_favo_single($id, $login_id)) {
      $this->CI->favolite_model->remove_favo($id, $login_id);
    } else {
      $this->CI->favolite_model->add_favo($id, $login_id);
    }
  }
}
