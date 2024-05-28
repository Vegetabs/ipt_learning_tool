<?php
require("db_connect.php");
$conn = get_conn();
$max_q = 5;
$correct = 0;
$topic_id = $_GET["topic_id"];

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
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css\learning_tool.css">    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDLC Learning Tool</title>
</head>
<body>
    <?php
    $q_num = 1;
    while ($q_num <= count($_GET)-1) {
        $answer = check_answer($_GET[strval($q_num)],$conn);
        IF ($answer) {
            $correct += 1;
        }
        $q_num += 1;
    }
    ?>
    <h1>Results of Quiz:</h1>
    <p>Congrats you got <?php echo($correct."/".$max_q) ?>!</p>
    <p>Would you like to return home?</p>
    <a href=<?php echo('index.php?id="'.$topic_id.'"&num_correct="'.$correct.'"') ?> class="button">Home</a>
</body>
<?php require("footer.php"); ?>
</html>

