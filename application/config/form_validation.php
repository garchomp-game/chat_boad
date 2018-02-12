<?php
$config = array(
  'chat_insert' => array(
    array(
      'field' => 'comment',
      'label' => 'コメント',
      'rules' => 'required|max_length[200]'
    )
  ),
  'user_create' => array(
    array(
      'field' => 'name',
      'label' => '名前',
      'rules' => 'required|max_length[50]'
    ),
    array(
      'field' => 'password',
      'label' => 'パスワード',
      'rules' => 'required|max_length[50]'
    )
  )
);
