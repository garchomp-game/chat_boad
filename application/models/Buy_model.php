<?php
class Buy_model extends CI_Model {

  public function __construct()
  {
    // CI_Model constructor の呼び出し
    parent::__construct();
    $this->load->database();
  }

  /**
  * カートに商品を追加するためのメソッド
  *
  * @return void
  */
  public function insert($item_data)
  {

    $data = array();
    foreach ($item_data as $value) {
      array_push($data, array(
        'login_id' => $value['user_id'],
        'item_id' => $value['item_id'],
      ));
    }
    $this->db->insert_batch('buy_item', $data);
  }
}
