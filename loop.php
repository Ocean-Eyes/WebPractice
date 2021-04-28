<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
</head>

<body>
    <h1>PHP</h1>
    <ul>
        <?php
        # Hello World! * 10 as unordered list
        $i = 0;
        while($i < 10) {
            echo "<li>Hello World!</li>";
            $i += 1;
        }
        ?>
    </ul>
    
    <h1>JavaScript</h1>
    <ol>
        <script>
        // Hello World! * 10 as ordered list
        i = 0;
        while(i<10)
        {
            document.write("<li>Hello World!</li>");
            i+=1;
        }
        </script>
    </ol>
</body>

</html>