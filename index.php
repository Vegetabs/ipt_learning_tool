<?php
require("db_connect.php");
require("header.php");
$id=0;

FUNCTION send_q_data($quiz_id,$num_correct,$conn) {
    $user_name = $_SESSION["user_name"];
    $sql = "INSERT INTO user_prog (user_name,topic_id,num_correct)
    VALUES ($user_name,$quiz_id,$num_correct)";
    IF ($conn->query($sql) === TRUE) {
        echo "record inserted successfully";
    } ELSE {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

IF (isset($_GET["id"]) AND isset($_GET["num_correct"])) {
    $conn = get_conn();
    send_q_data($_GET["id"],$_GET["num_correct"],$conn);
}
?>

<body>
    <h1>--Contents--</h1>
    <ul>
        <li>Defining and Understanding the Problem</li>
            <ul>
                <li><a href="content.php?id=1">Defining the Problem</a></li>
                <li><a href="content.php?id=2">Documenting the Systems</a></li>
                <li><a href="quiz.php?id=1">Topic Test</a></li>
            </ul>
        <li>Planning and Designing Software Solutions</li>
            <ul>
                <li><a href="content.php">Creating Psuedocode</a></li>
                <li><a href="quiz.php?id=2">Topic Test</a></li>
            </ul>
        <li>Implementation of Software Solutions</li>
        <li>Testing and Evaluating Software Solutions</li>
        <li>Maintaining Software Solutions</li>
    </ul>
</body>
<?php require("footer.php");?>
</html>