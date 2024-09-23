<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admincp</title>
    <link rel="stylesheet" href="css/style_admin.css">
</head>
<body>
    <h3 class="admin_title">Welcome to AdminCP</h3>
    <div class="wrapper">
        <?php 
                include("config/config.php");
                include("modules/header.php");
                include("modules/menu.php");
                include("modules/main.php");
                include("modules/footer.php");
        ?>
    </div>
</body>
</html>