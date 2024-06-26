<?php
require("db_connect.php");
require("session_check.php");
require("header.php");
$id=0;
$conn = get_conn();

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

FUNCTION get_quiz_prog($topic_id,$conn) {
    $sql = "SELECT num_correct FROM user_prog WHERE topic_id=$topic_id";
    $result = mysqli_query($conn,$sql);
    $content = mysqli_fetch_assoc($result);
    IF ($content["num_correct"] == "") {
        return "0";
    } else {
        return $content["num_correct"];
    }
    
}

IF (isset($_GET["id"]) AND isset($_GET["num_correct"])) {
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
                <li><a href="quiz.php?id=1">Topic Test <?php echo("(".get_quiz_prog(1,$conn)."/5)"); ?></a></li>
            </ul>
        <li>Planning and Designing Software Solutions</li>
            <ul>
                <li><a href="content.php?id=3">Creating Psuedocode</a></li>
                <li><a href="quiz.php?id=2">Topic Test <?php echo("(".get_quiz_prog(2,$conn)."/5)"); ?></a></li>
            </ul>
        <li>Implementing Software Solutions</li>
            <ul>
                <li><a href="content.php?id=4">Translation Methods</a></li>
                <li><a href="content.php?id=5">Documenting Syntax</a></li>
                <li><a href="quiz.php?id=3">Topic Test <?php echo("(".get_quiz_prog(3,$conn)."/5)"); ?></a></li>
            </ul>
        <li>Testing Software Solutions</li>
            <ul>
                <li><a href="content.php?id=6">Testing Methods</a></li>
                <li><a href="quiz.php?id=4">Topic Test <?php echo("(".get_quiz_prog(4,$conn)."/5)"); ?></a></li>
            </ul>    
        <li>Maintaining Software Solutions</li>
            <ul>
                <li><a href="content.php?id=7">How to Maintain Software</a></li>
                <li><a href="quiz.php?id=5">Topic Test <?php echo("(".get_quiz_prog(5,$conn)."/5)"); ?></a></li>
            </ul>    
        <li>Misc</li>
            <ul>
                <li><a href="bibliography.php">Bibiliography</a></li>
            </ul>    
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