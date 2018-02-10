<?php
$config = array(
    'chat_insert' => array(
        array(
            'field' => 'name',
            'label' => '名前',
            'rules' => 'required|max_length[30]'
        ),
        array(
            'field' => 'comment',
            'label' => 'コメント',
            'rules' => 'required|max_length[200]'
        )
    )
);
