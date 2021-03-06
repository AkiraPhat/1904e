<?php
// khai báo class
class Student {
    /**
     * khai báo các thuộc tính
     * của class
     * thuộc tính chỉ tính chất đặc điểm
     * của class đó
     */
    public $name = "đỗ thị trang";

    public $age = 22;

    public $location = "thanh hóa";

    public $point = 8.9;

    //phương thức khởi tạo
    public function __construct($name_param, $age_param, $location_param)
    {
        echo "<br>". __METHOD__;
        $this->name = $name_param;
        $this->age = $age_param;
        $this->location = $location_param;
    }


    /**
     * Phương thức
     */
    /**
     * @return int
     */
    public function printInfo()
    {
        echo "<br>".__METHOD__;
        echo "<br>tên :" . $this->name;
        echo "<br>tuổi : " . $this->age;
        echo "<br>quê quán : " . $this->location;
        echo "<br>điểm tổng kết : " . $this->point;
    }
}


//khởi tạo đối tượng từ class
$trang = new Student("bùi thị quyên",21,"nam định");

echo "<pre>";
print_r($trang);
echo "</pre>";

