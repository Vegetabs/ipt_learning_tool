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
    <?php 
    $cur_max_pages = 7;
    IF ($id+1 <= $cur_max_pages) {
        $next = $id + 1;
        $next_page = "content.php?id=$next";
    } ELSE {
        $next_page = "index.php";
    }
    ?>
    <a href="<?php echo($next_page)?>" class="button">Next Page</a>
</body>
<?php require("footer.php");?>
</html>