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
<pre>
    In ra chuỗi trong php
    có 2 cách : cách 1 để chuỗi trong nháy ""
</pre>
<?php
    echo "<br> Hà Nội";
    echo "<br> Đà Nẵng";
    echo "<br> Hồ Chí Minh";
?>
<pre>
    In ra chuỗi trong php có 2 cách
    cách 2 : để chuỗi trong nháy ''
</pre>
<?php
    echo '<br> Hà Nội';
    echo '<br> Đà Nẵng';
    echo '<br> Hồ Chí Minh';
?>
<?php
    //in ra chuỗi 'chào HN '
    echo "<br> chào 'Hà Nội'";
    echo '<br> chào \'Hà Nội\'';
?>
<?php
//in ra chuỗi "chào HN"
?>
<?php echo "<br> " ; ?>
<?php echo '<br>chào "hà nội"'; ?>
<?php echo "<br>chào \"hà nội\""; ?>
</body>
</html>