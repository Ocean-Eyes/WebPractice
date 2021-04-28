<!DOCTYPE html>
<html>

<head>
    <meta charset = "utf-8">
</head>

<body>
    <h1>php</h1>
    <?php
        # 20
        echo 10+10;
        echo "<br/>";

        # 20
        echo "10"+"10";
        echo "<br/>";
        
        # 1010
        echo "10"."10";
        echo "<br/>";

        # 안녕하세요. 아무개님
        $name = "아무개";
        echo "안녕하세요. ".$name."님";
        echo "<br/>";

        # bool(true)
        var_dump(1==1);
        echo "<br/>";

        # bool(false)
        var_dump(2==1);
        echo "<br/>";

        $result = (1==1);

        if($result) {
            echo "참";
            echo "<br/>";
        }
        else {
            echo "거짓";
            echo "<br/>";
        }

    ?>
    <h1>JavsScript</h1>
    <script>
        // 20
        document.write(10+10);
        document.write("<br/>");

        // 2010
        document.write("20"+"10");
        document.write("<br/>");
        
        // 안녕하세요. 아무고양이님
        name = "아무고양이";
        document.write("안녕하세요. "+name+"님");
        document.write("<br/>");

        // true
        document.write(1==1);
        document.write("<br/>");
        
        // false
        document.write(2==1);
        document.write("<br/>");

        result_true = (1==1);
        result_false = (1==2);

        // 참
        if(result_true) {
            document.write("참");
            document.write("<br/>");
        } 
        else {
            document.write("거짓");
            document.write("<br/>");
        }

        // 거짓
        if(result_false) {
            document.write("참");
            document.write("<br/>");
        } 
        else {
            document.write("거짓");
            document.write("<br/>");
        }

    </script>
</body>

</html>