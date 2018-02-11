<?php
class Cart_model extends CI_Model {

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
  public function insert($getdata)
  {
    var_dump($getdata);
    $data = array(
      'item_id' => $getdata['item_id'],
      'user_id' => $getdata['login_id'],
    );
    $this->db->insert('cart', $data);
  }

  /**
  * カートに商品を追加するためのメソッド
  *
  * @return void
  */
  public function get_single($getdata)
  {
    $this->db->where('user_id', $getdata['login_id'])
    ->where('item_id', $getdata['item_id']);
    $data = $this->db->get('cart');
    return $data->result_array() ? false : true ;
  }
}
