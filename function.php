<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
</head>

<body>
    <h1>PHP</h1>
    <?php

        function a() {
            echo "Hello PHP function";
        }

        function b($input) {
            return $input+1;
        }

        a();
        echo "<br/>".b(1);
    ?>
    
    <h1>JavaScript</h1>
    <script>

        function a() {
            document.write("Hello JS function");
        }

        function b(input) {
            return input+1;
        }

        function c(input1, input2) {
            if(input1 > input2) {
                return true;
            }
            else return false;
        }

        a();
        document.write("<br/>")
        document.write(b(1));
        document.write("<br/>")
        document.write(c(2,1));
    </script>

</body>
</html>