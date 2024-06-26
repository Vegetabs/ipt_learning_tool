<?php
    session_start();
    /**
    * for a 30 minute timeout, specified in seconds
    */
    $time = $_SERVER['REQUEST_TIME'];
    $timeout_duration = 1800;
    /**
    * Here we look for the user's LAST_ACTIVITY timestamp. If
    * it's set and indicates our $timeout_duration has passed,
    * blow away any previous $_SESSION data and start a new one.
    */
    $last=0;
    $duration=0;
    IF (isset($_SESSION['LAST_ACTIVITY'])) {
        $last          =    $_SESSION['LAST_ACTIVITY'];
        $duration = $time-$last;
        IF ($duration > $timeout_duration)  {
            header("Location: login.php");
        }
    }
    /**
    * Finally, update LAST_ACTIVITY so that our timeout
    * is based on it and not the user's login time.
    */
    $_SESSION['LAST_ACTIVITY'] = $time;

    IF (!isset($_SESSION["user_name"])) {
        header("Location: login.php");  // Redirect to the Login Page
        exit;
    }
?>