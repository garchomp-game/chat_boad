<?php
class CartLogic
{
  public function __construct()
  {
    $this->CI =& get_instance();
    $this->CI->load->model('cart_model');
    $this->CI->load->model('buy_model');
    $this->CI->load->database();
  }

  /**
  * XMLから商品詳細情報を取得
  *
  * @param array $item_id アイテムの配列
  * @return array
  */
  public function getApi($item_id)
  {
    $data = array();
    foreach ($item_id as $value) {
      $product = simplexml_load_file("https://shopping.yahooapis.jp/ShoppingWebService/V1/itemSearch?appid=dj00aiZpPWYwT0lPSm1Zc0t3ZiZzPWNvbnN1bWVyc2VjcmV0Jng9OTA-&store_id={$value['item_id']}");
      array_push($data, array(
        'name' => (string)$product->Result->Hit->Name,
        'headine' => (string)$product->Result->Hit->Headline,
        'value' => (integer)$product->Result->Hit->Price,
        'description' => (string)$product->Result->Hit->Description,
        'image' => (string)$product->Result->Hit->Image->Medium,
        'id' => (string)$product->Result->Hit->Store->Id,
      ));
    }
    return $data;
  }

  /**
  * 購入処理
  *
  * @return bool 成功したらtrue 失敗したらfalse
  */
  public function complete($login_id)
  {
    try {
      // トランザクションスタート
      $this->CI->db->trans_start();
      $data = $this->CI->cart_model->getAll($login_id);
      $this->CI->cart_model->destroy($login_id);
      $this->CI->buy_model->insert($data, $login_id);
    } catch (Exception $e) {
      $this->CI->db->trans_rollback();
      die('データ更新に失敗しました：'.$e->getMessage());
    }

    // 後処理
    if ($this->CI->db->trans_status() === false) {
      $this->CI->db->trans_rollback();
      return false;
    } else {
      $this->CI->db->trans_commit();
      return true;
    }
  }
}
