<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
</head>

<body>
    <h1>PHP</h1>
    <ul>
        <?php
        # Print Hello World! 10 times as unordered list using loop
        $i = 0;
        while($i < 10) {
            echo "<li>Hello World!</li>";
            $i += 1;
        }
        echo "<br/>";
        
        # dog, cat, lizzard as unordered list using array and loop
        $j = 0;
        $list = array("dog", "cat", "lizard");
        while($j < count($list)) {
            echo "<li>".$list[$j]."</li>";
            $j += 1;
        }
        ?>
    </ul>
    
    <h1>JavaScript</h1>
    <ul>
        <script>
        // Print Hello World! 10 times as unordered list using loop
        i = 0;
        while(i<10)
        {
            document.write("<li>Hello World!</li>");
            i+=1;
        }
        document.write("<br/>");

        // dog, cat, lizzard as unordered list using array and loop
        j = 0;
        list = new Array("pizza", "chicken", "burger");
        while(j < list.length) {
            document.write("<li>"+list[j]+"</li>");
            j+=1;
        }
        </script>
    </ul>
</body>

</html>