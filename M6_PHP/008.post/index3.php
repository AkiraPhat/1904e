<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <pre>
        Lấy giá trị của từng ô input post đi từ $_POST
        Vì $_POST là 1 mảng
        nên muốn lấy giá trị của từng phần tử
        truy cập $_POST['key']
    </pre>

    <?php
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";

        $username = $_POST["username"];
        $password = $_POST["password"];

        echo "<br> Username :". $username;
        echo "<br> Password : " . $password;
    ?>
    
    <div class="container">
        <div class="row">
            <form name="demo" action="" method="post">
                <p>
                    Username : <input name="username" type="text" value="">
                </p>

                <p>
                    Password : <input name="password" type="text" value="">
                </p>

                <p>
                    <input type="submit" name="submit" value="Login">
                </p>
            </form>
        </div>
    </div>
</body>
</html>

