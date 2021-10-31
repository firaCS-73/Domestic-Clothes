<?php
include 'class/Crud.php';

$obj = new Crud();

$data = [
    'user_name' => 'sartu hashim',
    'user_age' => '19',
];

$obj->insert('user', $data);
?>