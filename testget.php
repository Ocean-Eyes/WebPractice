<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
</head>
<body>
    <?php
        // echo $_GET['id'].", ".$_GET['name'];
        echo file_get_contents($_GET['filename'].'.txt');
    ?>
</body>
</html>