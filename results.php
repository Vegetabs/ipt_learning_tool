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
    $q_num = 1;
    while ($q_num <= count($_GET)) {
        $answer = check_answer($_GET[strval($q_num)],$conn);
        IF ($answer) {
            $correct += 1;
        }
        $q_num += 1;
    }
    ?>
    <h1>Results of Quiz:</h1>
    <p>Congrats you got <?php echo($correct."/10") ?>!</p>
    <p>Would you like to return home?</p>
    <a href="index.php" class="button">Home</a>
</body>
<?php require("footer.php"); ?>
</html>

