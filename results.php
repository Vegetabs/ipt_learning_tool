<?php
require("header.php");
require("db_connect.php");
$conn = get_conn();
$max_q = 10;
$correct = 0;

FUNCTION check_answer($answer,$conn) {
    $sql = "SELECT a_correct FROM quiz_answers WHERE a_id = $answer";
    $result = mysqli_query($conn, $sql);
    $answer_arr = mysqli_fetch_assoc($result);
    IF ($answer_arr["a_correct"] == 1) {
        return TRUE;
    } else {
        return FALSE;
    }
}

?>

<html>
<body>
    <?php
    // foreach($_GET as $query_string_variable => $value) {
    //     print("$query_string_variable  = $value <Br />");
    //  }
    $q_num = 1;
    while ($q_num <= count($_GET)) {
        $answer = check_answer($_GET[strval($q_num)],$conn);
        IF ($answer) {
            $correct += 1;
        }
        $q_num += 1;
    }
    echo($correct);
    ?>
</body>
<?php require("footer.php"); ?>
</html>

