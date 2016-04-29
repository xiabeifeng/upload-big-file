<?php
if (Request::get('act') == 'upload') {
    $name = Request::post('name');
    $total = Request::post('total');
    $index = Request::post('index');
    $data = $_FILES['data'];
    var_dump($_POST);
    var_dump($_FILES);
}

