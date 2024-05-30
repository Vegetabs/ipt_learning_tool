<?php
//Initiliase the screen
session_start();
session_destroy();
session_unset();
session_start();
require("db_connect.php");
$message="Please login to this wonderful website";
// Get METHOD - GET -- first time POST --> process SUBMIT
$method  = $_SERVER["REQUEST_METHOD"];
// I have hit submit button
IF ($method=="POST") {
    $user_name = $_POST["user_name"];
    $password = $_POST["password"];
    try {
        // Connect to database using the User Name and Password entered
        $conn = get_conn(); #login is checked
        // Once connected as valid user , then get User table to get first name and last name
        $sql = "SELECT first_name, last_name FROM users WHERE user_name = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s",$user_name);
        //Executing the statement
        $stmt->execute();
        /* Store the result (to get properties) */
        $stmt->store_result();
        //Binding values in result to variables
        $stmt->bind_result($first_name,$last_name);
        /* Get the number of rows */
        $num_of_rows = $stmt->num_rows;
        $success = false;
        $message = "Invalid User - Contact Support";
        if ($num_of_rows > 0) { // Are there any valid users with username and password
            while ($stmt->fetch()) {
                $message = "Login successfully completed. Welcome ".$first_name.' '.$last_name;
                $_SESSION['user_name']  = $user_name;
                $_SESSION['password']  = $password;
                $_SESSION['first_name'] = $first_name;
                $_SESSION['last_name'] = $last_name;
                $_SESSION["footer"] = "Current Customer: ".$user_name." (".$first_name." ".$last_name.") - (c) SDLC Learning Tool 2024";
                $success = true;
            }
        }
        $stmt->close();
        $conn->close();
        // Redirect to Home Page after a successful login
        if ($success==true) {
            header("Location: index.php");
            exit;
        }
    } catch (Exception $e) {
        $message = "Error: ".$e->getMessage();
        $message = "Invalid Username or Password";
        //echo("Error: ".$e->getMessage());
    }
}

?>
<head>
    <link rel="stylesheet" href="css\learning_tool.css">    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDLC Navigator</title>
</head>
<div class="header">
    <div class="header_title">
        <h1>--SDLC Navigator--</h1>
    </div>
</div>
<main_content>
<h1>Login Page</h1>
<div>
    <form  name="login" action="" method="POST">
        <div class="entry_field">
            <div class="mb-3 mt-3">
                <label for "user_name">Username: </label>
                <input class="form-control" name="user_name" type="text" size="10" autofocus="autofocus" required></input>
            </div>
            <div class="form-group row">
                <label for "password" class="form-label">Password: </label>
                <input class="form-control" name="password" type="password" size="12"required></input>
            </div>
        </div>
        <div class=btn>
            <div class="form-group row">
                <button class="btn" name="login" type="submit">Customer Login</button>
            </div>
        </div>
        <div class="msg">
            <div class="form-group message">
                <?php echo($message); ?>
            </div>
        </div>
    </form>
</div>
</main_content>
<?php require('footer.php'); ?>