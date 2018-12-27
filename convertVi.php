<?php

function convertEng($string)
{
    $string = trim(mb_strtolower($string));
    $string = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $string);
    $string = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $string);
    $string = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $string);
    $string = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $string);
    $string = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $string);
    $string = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $string);
    $string = preg_replace('/(đ)/', 'd', $string);

    return $string;
}


$string = "Trung tâm dự báo khí tượng thủy văn Trung ương cho biết, sáng 27/12, tâm áp thấp nhiệt đới cách bờ biển miền Trung Philippines khoảng 450 km về phía Đông Đông Nam, sức gió tối đa khoảng 60 km/h (cấp 7), giật tăng hai cấp.";

$newString = convertEng($string);
var_dump($newString);
