<?php
class Favolite_model extends CI_Model {

  public function __construct()
  {
    // CI_Model constructor の呼び出し
    parent::__construct();
    $this->load->database();
  }

  /**
  * ファボ確認
  *
  * @return bool 既に存在していたらtrue してなかったらfalse
  */
  public function get_favo_single($id, $login_id)
  {
    $this->db->select('id')
    ->where('comment_favo_id', $id)
    ->where('user_id', $login_id);
    $query = $this->db->get('favolite');
    return $query->result();
  }

  /**
  * ふぁぼ追加
  *
  * @return void
  */
  public function add_favo($id, $login_id)
  {
    $data = array(
      'comment_favo_id' => $id,
      'user_id' => $login_id
    );
    return $this->db->insert('favolite', $data);
  }

  /**
  * ふぁぼ削除
  *
  * @return void
  */
  public function remove_favo($id, $login_id)
  {
    $this->db->where('comment_favo_id', $id)
    ->where('user_id', $login_id);
    return $this->db->delete('favolite');
  }
}
