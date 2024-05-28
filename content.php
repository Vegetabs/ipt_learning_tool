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
    
    <h1>--Documenting The System--</h1>
    <p>To better plan for your software solution, you will need to be able to document it.
    This can come in various forms, but can be split into two main catagories: documenting data and documenting system functionality.
    Models used to document the use of data within your system include:</p>
    <ul>
        <li>Context Diagrams</li>
        <li>DF Diagrams</li>
        <li>Data Dictionaries</li>
        <li>IPO Diagrams</li>
    </ul>
    <h2>Context Diagrams</h2>
        <p>Context diagrams document how data in exchanged between your system and external participants.
        This functions to provide a clear model of how your will fulfill its purpose by interacting with its external environment and participants.
        So, what are these external participants exactly?</p>
        <h3>External Participants</h3>
            <p>An external participant is any individual, organisation or other system which directly interacts with the functionality of the system.
            Examples of external participants include:</p>
            <ul>
                <li>Employees</li>
                <li>Managers</li>
                <li>Eftpos System</li>
                <li>Bank API System</li>
            </ul>
        <h3>Examples of Context Diagrams</h3>
            <img src="img\what-is-context-diagram.png" alt="context diagram 1">
            <!-- src https://www.edrawmax.com/context-diagram/ -->
            <img src="img\0-level.jpg" alt="context diagram 2">
            <!-- src https://www.geeksforgeeks.org/levels-in-data-flow-diagrams-dfd/ -->
    <h2>Data Flow Diagrams (DFD)</h2>
        <p>Data flow diagrams can be viewed as a zoomed in context diagram, although instead of showing relationships with just external participants,
        they show relationships between system processes, system storage and participants.</p>
        <h3>Example of DFDs</h3>
            <img src="img\DFD-header.png" alt="data flow diagram 1">
            <!-- src https://www.lucidchart.com/pages/data-flow-diagram/how-to-make-a-dfd -->
            <img src="img\history-of-dataflow-diagrams.png" alt="data flow diagram 2">
            <!-- src https://www.smartdraw.com/data-flow-diagram/ -->
    <h2>Data Dictionaries</2>
        <p>Data dictionaries are tables used to outline the characteristics of the data used within the system.
        This data is outlined in various columns, which in the SDD subject consist of:</p>
        <ul>
            <li>Data Name</li>
            <li>Data Type</li>
            <li>Data Format</li>
            <li># of Bytes for Storage</li>
            <li>Size for Display</li>
            <li>Desciption</li>
            <li>Example</li>
            <li>Validation</li>
        </ul>
        <h3>Exmaples of Data Dictionaries</h3>
            <img src="" alt="">
            <img src="" alt="">
    <!-- Insert section about data oriented diagrams -->
    <p></p>
    <ul>
        <li>Structure Charts</li>
        <li>System Flowcharts</li>
        <li>Storyboards</li>
    </ul>
    <!-- Insert section about system functionality models -->
    <a href="content.php?id=<?php echo($id+1)?>" class="button">Next Page</a>
</body>
<?php require("footer.php");?>
</html>