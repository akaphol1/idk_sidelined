<?php

// echo '<pre>';
//     print_r($_FILES);
// echo '</pre>';

$dir = "upload/";
$fileImage = $dir . basename($_FILES["image"]["name"]);

if(move_uploaded_file($_FILES["image"]["tmp_name"],$fileImage )){
    echo "ไฟล์ภาพชื่อ".basename($_FILES["image"]["name"])."เรียบแล้ว";
}else{
    echo "เกิดข้อผิดพลาด";
}
?>