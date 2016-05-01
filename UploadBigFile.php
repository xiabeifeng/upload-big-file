<?php
if ($_GET['act'] == 'upload') {
    $index = $_POST['index'];
    $filename = "./ups/$index.mp4";
    $result = move_uploaded_file($_FILES['data']['tmp_name'], $filename);
    if ($result) {
        echo json_encode(array('errno'=>200, 'message'=>'ok'));
    } else {
        echo json_encode(array('errno'=>1001, 'message'=>'上传失败'));
    }
} elseif ($_GET['act'] == 'join') {
    $total = intval($_POST['total']);
    for($i = 1; $i<=$total; $i++){
        file_put_contents('./ups/new.mp4', file_get_contents("./ups/$i.mp4"), FILE_APPEND);
        @unlink("./ups/$i.mp4");
    }
    echo json_encode(array('errno'=>200, 'message'=>'上传成功'));    
}
