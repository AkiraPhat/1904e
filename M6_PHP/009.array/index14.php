<?php
//mảng bất tuần tự
$array3 = array();
$array3["china"] = array("name" => "trung quốc",
    "city" => array("thượng hải", "bắc kinh", "thâm quyến ", "thành đô "));
$array3["japan"] = array("name" => "nhật bản", "city" => array("tokyo") );
$array3["namdinh"] = array("name" => "nam định",
    "district" => array("xuân trường", "nam trực", "trực ninh", "nghĩa hưng",
    "giao thủy", "vụ bản"));
$array3["vn"] = array("name" => "việt nam",
    "city" => array("hà nội", "hồ chí minh","nam định", "đồng nai","thái bình", "phủ lý") );

//tên các key , value khác nhau
//mỗi ul 1 quốc gia gồm các thành phố
echo "<ul>";
foreach ($array3 as $keyCountry => $Country){
    foreach ($Country as $keyCities => $cities){
        if ($keyCities == "city"){
            foreach ($cities as $keyCity => $city) {
                echo "<li>";
                echo " " . $city;
                echo "</li>";
            }
        }
    }
}
echo "</ul>";