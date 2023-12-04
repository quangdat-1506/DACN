<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admincp</title>
    <link rel="stylesheet" href="./css/styleadmincp.css">
</head>
<body>
    <h3 class= "title_admin">Welcome To AdminCP</h3>
    <div class="wrapper">
        <?php
            include("config/modules/header.php");
            include("config/modules/menu.php");
            include("config/modules/main.php");
            include("config/modules/footer.php");
        ?>
    </div>
</body>
</html>