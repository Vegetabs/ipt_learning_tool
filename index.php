<?php
require("db_connect.php");
require("session_check.php");
require("header.php");
$id=0;

FUNCTION send_q_data($conn) {
    $topic_id = $_GET["id"];
    $sql = "DELETE FROM user_prog WHERE topic_id=$topic_id";
    mysqli_query($conn,$sql);
    $user_name = '"'.$_SESSION["user_name"].'"';
    $num_correct = $_GET["num_correct"];
    $sql = "INSERT INTO user_prog (topic_id,user_name,num_correct)
    VALUES ($topic_id,$user_name,$num_correct)";
    mysqli_query($conn,$sql);
}

IF (isset($_GET["id"]) AND isset($_GET["num_correct"])) {
    $conn = get_conn();
    send_q_data($conn);
}
?>

<body>
    <h1>Contents</h1>
    <ul>
        <li>Defining and Understanding the Problem</li>
            <ul>
                <li><a href="content.php?id=1">Defining the Problem</a></li>
                <li><a href="content.php?id=2">Documenting the System</a></li>
                <li><a href="quiz.php?id=1">Topic Test</a></li>
            </ul>
        <li>Planning and Designing Software Solutions</li>
            <ul>
                <li><a href="content.php?id=3">Creating Psuedocode</a></li>
                <li><a href="quiz.php?id=2">Topic Test</a></li>
            </ul>
        <li><a href="bibliography.php">Bibiliography</a></li>
        <!--
        <li>Implementation of Software Solutions</li>
        <li>Testing and Evaluating Software Solutions</li>
        <li>Maintaining Software Solutions</li>
        -->
    </ul>
    <h1>Introduction</h1>
    <p>Welcome to the 'SDLC navigator' learning tool!
    SDLC navigator is designed to allow for students to develop high-order skills in relation to the subject of SDD.
    These skills are developed in the exploration of the SDLC units of 'defining and understanding the problem' and 'Planning and design software solutions'.
    In which students will learn skills around documenting and planning software solutions.
    Information in the SDLC navigator is documented through various multimedia types, such as images, video, information guides and quizzes.</p>
    <p>Any multimedia elements used within the SDLC navigator will be properly credited in the 'bibliography' page of the website.</p>
</body>
<?php require("footer.php");?>
</html>