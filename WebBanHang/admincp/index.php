<?php 
session_start();
if(!isset($_SESSION['dangNhap'])){
    header('Location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style_admin.css">
    <title>Hello ADMIN</title>
</head>
<body>
    <div class="container">
        <!-- Header section -->
        <header class="text-center mt-4">
            <h3 class="admin_title">WELCOME ADMIN</h3>
        </header>

        <!-- Navigation and main content area -->
        <div class="row mt-5">
            <!-- Sidebar navigation menu -->
            <div class="col-md-3">
                <?php
                // Including menu module (left sidebar)
                include("modules/menu.php");
                ?>
            </div>

            <!-- Main content section -->
            <div class="col-md-9">
                <?php
                // Include configuration and session management
                include("config/config.php");
                
                // Including header, main, and footer modules
                include("modules/header.php");
                include("modules/main.php");
                ?>
            </div>
        </div>

        <!-- Footer section -->
        <footer class="text-center mt-5">
            <?php
            // Including footer module
            include("modules/footer.php");
            ?>
        </footer>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
