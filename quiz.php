<?php
require("db_connect.php");
require("header.php");
$_SESSION["cur_q_id"] = 0;
$conn = get_conn();

FUNCTION create_quiz_arr($id, $conn) {
    $sql = "SELECT quiz_id FROM quiz WHERE topic_id = $id ORDER BY RAND() LIMIT 5";
    $result = mysqli_query($conn, $sql);
    $quiz_arr = [];
    while ($row = mysqli_fetch_assoc($result)){
        $quiz_arr[] = $row["quiz_id"];
    }
    return $quiz_arr;
}

FUNCTION get_q_content($id, $conn) {
    $sql = "SELECT q_content FROM quiz_question WHERE q_id=$id";
    $result = mysqli_query($conn, $sql);
    $content = mysqli_fetch_assoc($result);
    return $content["q_content"];
}

FUNCTION get_a_content($q_id,$conn) {
    $sql = "SELECT a_content FROM quiz_answers WHERE q_id=$q_id";
    $result = mysqli_query($conn, $sql);
    $a_arr = [];
    while ($row = mysqli_fetch_assoc($result)){
        $a_arr[] = $row["a_content"];
    }
    return $a_arr;
}

FUNCTION get_next_id() {
    $a = $_SESSION["cur_q_id"];
    $_SESSION["cur_q_id"] += 1;
    return $a;
}

IF (isset($_GET["id"])) {
    $topic_id = $_GET["id"];
    $quiz_arr = create_quiz_arr($topic_id,$conn);
    $quiz_str = serialize($quiz_arr);
    header("Location: quiz.php?topic_id=$topic_id&quiz_arr=$quiz_str");
    exit;
}
?>

<html>
<body>
<form action="results.php">
    <?php
    $cur_question = 1;
    $quiz_arr = unserialize($_GET["quiz_arr"]);
    while ($cur_question <= count($quiz_arr)) {
        $a_arr = get_a_content($cur_question,$conn);
        echo('<p>'.get_q_content($cur_question,$conn).'</p>
        <input type="radio" id="'.get_next_id().'" name='.$cur_question.' value="1">
        <label for="1">'.array_values($a_arr)[0].'</label><br>
        <input type="radio" id="'.get_next_id().'" name='.$cur_question.' value="2">
        <label for="2">'.array_values($a_arr)[1].'</label><br>
        <input type="radio" id="'.get_next_id().'" name='.$cur_question.' value="3">
        <label for="3">'.array_values($a_arr)[2].'</label><br>
        <input type="radio" id="'.get_next_id().'" name='.$cur_question.' value="4">
        <label for="4">'.array_values($a_arr)[3].'</label><br>');
        $cur_question += 1;
    }
    $topic_id = $_GET["topic_id"];
    echo('<input type="hidden" name="topic_id" value="'.$topic_id.'">');   
    ?>
    
    <input type="submit" value="Submit">
</form>
</body>
<?php require("footer.php"); ?>
</html