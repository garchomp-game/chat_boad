<?php
class User_model extends CI_Model {
  /**
  * コンストラクタ
  */
  public function __construct()
  {
    // CI_Model constructor の呼び出し
    parent::__construct();
    $this->load->database();
  }

  /**
  * ログイン認証するための関数
  *
  * @return bool 取得できたらtrue できなかったらfalse
  */
  public function login($postdata)
  {
    $query = $this->db->select('id')
    ->where('name', $postdata['name'])
    ->where('password', $postdata['password'])
    ->from('user')
    ->get();
    return $query->row();
  }
}
