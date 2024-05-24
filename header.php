<?php
    $log_btn = "Login";
    IF (isset($_SESSION["user_name"])) {
        $log_btn = "Logout";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css\learning_tool.css">    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDLC</title>
</head>
<div class="header">
    <div class="header_title">
        <h1>--SDLC Learning Tool--</h1>
    </div>
    <div class="header_btns">
        <a class="header-btn" href="index.php">Home</a>
        <a class="header-btn" href="login.php"><?php echo($log_btn) ?></a>
        </div>
    </div>
</div>