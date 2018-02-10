<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
* コントローラ親クラス <MY_Controller>
*
* ログイン処理関連コントローラ
*
* @package     免許ラボ
* @since       2016/05/26
* @category    Controller
* @author      takehara@cmps.jp
*/
class MY_Controller extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->library('session');
    $this->load->helper('url');
    $this->smarty->template_dir = APPPATH.'views/templates';
    $this->smarty->compile_dir  = APPPATH.'views/templates_c';
    $this->smarty->auto_literal = TRUE;
    $this->assign('base_url', base_url());
    $this->assign('style', $this->router->fetch_class());
    $this->load->helper('html');
    $this->assign('login_id', $this->session->userdata('login_id'));
  }

  /*----------------------------------------------------------------------------------------------------*
  * smarty関連
  *----------------------------------------------------------------------------------------------------*/
  /**
  * テンプレートにassign
  * @param string テンプレートのassign先の名前
  * @param variant 値
  * @return void
  */
  public function assign($name, $value)
  {
    $this->smarty->assign($name, $value);
  }

  /**
  * テンプレート呼び出し
  * @param string テンプレートのファイル名
  * @return void
  */
  public function tpl($sTemplete)
  {
    $this->smarty->display("$sTemplete.tpl");
  }

  /**
  * 松谷拓海定義
  *
  * テンプレート呼び出し
  * @param string yieldを定義。
  * @return void
  */

  public function y($sTemplete)
  {
    $this->smarty->display("include/header.tpl");
    $this->smarty->display("$sTemplete.tpl");
    $this->smarty->display("include/footer.tpl");
  }

  public function d($data){
    echo('<pre style="
      font-size:24px;
      font-weight:bold;
    ">');var_dump($data);echo('</pre>');exit;
  }

}
