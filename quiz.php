<?php
require("db_connect.php");
require("header.php");

FUNCTION create_quiz_arr($q_id) {
    $conn = get_conn();
    $sql = "SELECT quiz_id FROM quiz WHERE page_id = $q_id ORDER BY RAND() LIMIT 10";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}

IF (isset($_GET["id"])) {
    $topic_id = $_GET["id"]
    $cur_question = 1
    $quiz_arr = create_quiz_arr($topic_id)
    header("Location: quiz.php?quiz_arr=$q_arr&cur_q=$cur_question&score=0")
    exit;
}

IF (isset($_SESSION["question_arr"])) {
    IF ($_SESSION["cur_question"] <= $_SESSION["num_question"]) {

    } else {
    
    }
} else {
    echo("Quiz couldn't find valid questions")
}

?>