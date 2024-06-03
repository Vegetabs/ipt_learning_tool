<?php
require("db_connect.php");
$conn = get_conn();
$max_q = 5;
$correct = 0;
$topic_id = $_GET["topic_id"];

FUNCTION check_answer($answer,$question,$conn) {
    $sql = "SELECT answer_correct FROM quiz_answers WHERE answer_id = $answer AND question_id = $question";
    //echo($sql);
    $result = mysqli_query($conn, $sql);
    $answer_arr = mysqli_fetch_assoc($result);
    IF ($answer_arr["answer_correct"] == "1") {
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
    foreach ($_GET as $i) {
        $name = array_keys($_GET)[$q_num-1];
        IF ($q_num <= 5) {
            $answer = check_answer(strval($i),$name,$conn);
            IF ($answer) {
                $correct += 1;
            }
        }
        $q_num += 1;
        // echo($_GET[strval($q_num)]);
        // $answer = check_answer($_GET[strval($q_num)],$conn);
        // IF ($answer) {
        //     $correct += 1;
        // }
        // $q_num += 1;
    }
    ?>
    <h1>Results of Quiz:</h1>
    <p>Congrats you got <?php echo($correct."/".$max_q) ?>!</p>
    <p>Would you like to return home?</p>
    <a href=<?php echo('index.php?id="'.$topic_id.'"&num_correct="'.$correct.'"') ?> class="button">Home</a>
</body>
<?php require("footer.php"); ?>
</html>

