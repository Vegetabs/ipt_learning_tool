<?php
    $log_btn = "Login";
    IF (isset($_SESSION["user_name"])) {
        $log_btn = "Logout";
    }
    $cur_max_pages = 3;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css\learning_tool.css">    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDLC Navigator</title>
</head>
<?php require("nav.php"); ?>