<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

        function counts($salary,$date){
            $salarymain = ($salary*$date)/24;
            return $salarymain;
        }
        $x = 10000000;
        $y = 12;
        echo "Lương tháng của bạn là :" . counts($x,$y);
    ?>
</body>
</html>
