<?php
require("db_connect.php");
require("header.php");
$id=$_GET["id"];
$conn = get_conn();
$sql = "SELECT content FROM content WHERE page_id = $id";
$result = mysqli_query($conn, $sql);
if (!$result) {
    echo "Error: Unable to execute query. " . mysqli_error($conn);
    exit();
}
$content = mysqli_fetch_assoc($result);
if (!$content) {
    echo "No content found for the given page ID.";
    exit();
}
echo $content["content"];
mysqli_close($conn);
?>
<html>
<body>
    <!-- <h1>--Defining The Problem--</h1>
    <p>To create a Software Solution, you need to initially identify one thing: what the problem actually is.
    This ultimately comes down to three things:</p>
    <ul>
        <li>The needs of the client</li>
        <li>The objectives of the system</li>
        <li>The limitations of the system</li>
    </ul>
    <h2>Needs of the Client:</h2>
        <p>These needs are the requirements of the system: i.e. what it needs to do in order to fullfil the purpose of the system.
        This should define the broad goals of the system, and should be consistently referenced with the purpose of the system, to determine whether each point is a preference or need.</p>
    <h2>Objectives of the System</h2>
        <p>These are the functional and non-functional requirements of the system which define how it should operate in order to fulfill the purpose of the system.</p>
        <p>Non-functional requiremnts should consist of all system objectives which do not directly work to fullfil the functions of the system.</p>
        <p>Functional requirements should consist of the technical requirments of the systems needed to fullfil it's purpose.</p>
    <h2>Limitations of the System</h2>
        <p>These are the practical limitations the system will face when put into practice, they can consist of technical and non-technical issues.</p>
        <p>Technical limitations may include: network speed, storage space, clock speed.</p>
        <p>Non-technical limitations may include: legal concerns, participant ability and/or number.</p> -->
    <a href="content.php?id=<?php echo($id+1)?>" class="button">Next Page</a>
</body>
<?php require("footer.php");?>
</html>