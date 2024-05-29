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
    <a href="content.php?id=<?php echo($id+1)?>" class="button">Next Page</a>
</body>
<?php require("footer.php");?>
</html>