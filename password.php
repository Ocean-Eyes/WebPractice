<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
</head>
<body>
    <?php
    // in PHP
    $password = $_GET["password"];
    if($password == 1111) {
        echo "환영합니다.";
    }
    else {
        echo "잘못 입력하셨습니다.";
    }
    ?>
    
    <script>
    // in JavaScript
    password = prompt("password");
    if(password == 1111) {
        document.write("환영합니다");
    }
    else {
        document.write("잘못 입력하셨습니다.");
    }
    </script>
</body>
</html>