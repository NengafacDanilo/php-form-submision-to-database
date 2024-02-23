<?php
    session_start();
    
    // Check if the user is logged in
    if (!isset($_SESSION['valid'])) {
        // Redirect to the login page if the user is not logged in
        header("Location: login.php");
        exit();
    }

    // Check if the user clicked the sign-out button
    if (isset($_POST['signout'])) {
        // Unset or destroy the session variables
        session_unset();
        session_destroy();

        // Redirect the user to the login page
        header("Location: index.php");
        exit();
    }
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./webpage/css/style.css">
 </head>
 <style>
    
 </style>
 <body>
    
 
<!-- Add the sign-out button or link in your HTML -->
<form method="post" action="">
    <button type="submit" id="bnt" name="signout">Sign Out</button>
</form>

<?php
include("./webpage/nav.php");
include("./webpage/chart.php");
include("./webpage/footer.php");
?>
</body>
</html>