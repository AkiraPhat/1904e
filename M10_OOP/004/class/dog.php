<?php

include_once "../abstract/animals.php";

/**
 * Class Cho
 * bất kể class nào khi extend từ abstract class
 * thì phải viết lại code thực thi cho các method
 * abstract của class cha
 */
class Cho extends Dongvat {
    public function tenloai()
    {
        echo "This is a dog ";
    }

    public function thongtin()
    {
        echo "chó là loài 4 chân chạy nhanh. chó được nuôi làm thú cưng và trông nhà";
    }
}