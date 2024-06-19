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

<h1>--Documenting The System--</h1> <p>To better plan for your software solution, you will need to be able to document it. This can come in various forms, but can be split into two main catagories: documenting data and documenting system functionality. Models used to document the use of data within your system include:</p> <ul> <li>Context Diagrams</li> <li>DF Diagrams</li> <li>Data Dictionaries</li> <li>IPO Diagrams</li> </ul> <h2>Context Diagrams</h2> <p>Context diagrams document how data in exchanged between your system and external participants. This functions to provide a clear model of how your will fulfill its purpose by interacting with its external environment and participants. So, what are these external participants exactly?</p> <h3>External Participants</h3> <p>An external participant is any individual, organisation or other system which directly interacts with the functionality of the system. Examples of external participants include:</p> <ul> <li>Employees</li> <li>Managers</li> <li>Eftpos System</li> <li>Bank API System</li> </ul> <h3>Examples of Context Diagrams</h3> <img src="img\what-is-context-diagram.png" alt="context diagram 1"> <!-- src https://www.edrawmax.com/context-diagram/ --> <img src="img\0-level.jpg" alt="context diagram 2"> <!-- src https://www.geeksforgeeks.org/levels-in-data-flow-diagrams-dfd/ --> <h2>Data Flow Diagrams (DFD)</h2> <p>Data flow diagrams can be viewed as a zoomed in context diagram, although instead of showing relationships with just external participants, they show relationships between system processes, system storage and participants.</p> <h3>Example of DFDs</h3> <img src="img\DFD-header.png" alt="data flow diagram 1"> <!-- src https://www.lucidchart.com/pages/data-flow-diagram/how-to-make-a-dfd --> <img src="img\history-of-dataflow-diagrams.png" alt="data flow diagram 2"> <!-- src https://www.smartdraw.com/data-flow-diagram/ --> <h2>Data Dictionaries</h2> <p>Data dictionaries are tables used to outline the characteristics of the data used within the system. This data is outlined in various columns, which in the SDD subject consist of:</p> <ul> <li>Data Name</li> <li>Data Type</li> <li>Data Format</li> <li># of Bytes for Storage</li> <li>Size for Display</li> <li>Desciption</li> <li>Example</li> <li>Validation</li> </ul> <p></p> <img src="img\data_dict.jpg" alt="data dictionary table"> <!-- src https://www.youtube.com/watch?app=desktop&v=MdMsjxT-EoU&ab_channel=ChristopherKalodikis --> <h2>IPO Diagrams</h2> <p>IPO diagrams are tables used to outline business processes, with focus on the data entering and exiting the process.</p> <img src="img\IPO_diagram.jpg" alt="ipo table"> <!-- src https://www.youtube.com/watch?app=desktop&v=a10a11oxjrA&ab_channel=ChristopherKalodikis --> <p>***</p> <p>With these data-oriented models in mind, you will also need to know models for system functionality. These models include:</p> <ul> <li>Structure Charts</li> <li>System Flowcharts</li> <li>Storyboards</li> </ul> <h2>Structure Charts</h2> <p>Structure charts are used to graphically document the relationship between different processes of a system. These are useful for a developer, as they depict the general hierarchy and logic of your application in a easily readable format.</p> <h3>Structure Chart Examples</h3> <!-- <img src="img\CPT-Structured_Chart_Example.png" alt="structure chart 1"> src https://en.wikipedia.org/wiki/Structure_chart --> <img src="img\struct_chart.jpg" alt="struct chart 2"> <!-- src https://www.youtube.com/watch?v=QN2bjNplGlQ&ab_channel=ChristopherKalodikis --> <h2>System Flowcharts</h2> <p>System flowcharts act as a graphical representation of the flow of information between a system's processes. These are useful to developers as they provide a simplified overview of the logic and interactions the system performs.</p> <h3>System Flowchart Examples</h3> <img src="img\system_flow1.png" alt="system flowchart 1"> <!-- src https://www.zenflowchart.com/guides/system-flowchart --> <img src="img\system_flow2.png" alt="system flowchart 2"> <!-- src https://www.zenflowchart.com/guides/system-flowchart --> <h2>Storyboards</h2> <p>Storyboards in SDD function to present illustrations of user interactions, screen transitions and designs for a system. These can then be used to provide a "narrative" of your program, and function to document the system's user interface.</p> <h3>Storyboard Examples</h3> <img src="img\storyboard1.PNG" alt="storyboard 1"> <!-- src https://careerfoundry.com/en/blog/ui-design/best-storyboard-examples/ --> <img src="img\storyboard2.PNG" alt="storyboard 2"> <!-- src https://www.visual-paradigm.com/guide/ux-design/wireframe-vs-storyboard-vs-wireflow-vs-mockup-vs-prototyping/ -->

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
    <h2>Data Dictionaries</h2>
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
        <p></p>
            <img src="img\data_dict.jpg" alt="data dictionary table">
            <!-- src https://www.youtube.com/watch?app=desktop&v=MdMsjxT-EoU&ab_channel=ChristopherKalodikis -->
    <h2>IPO Diagrams</h2>
        <p>IPO diagrams are tables used to outline business processes, with focus on the data entering and exiting the process.</p>
        <img src="img\IPO_diagram.jpg" alt="ipo table">
        <!-- src https://www.youtube.com/watch?app=desktop&v=a10a11oxjrA&ab_channel=ChristopherKalodikis -->
    <p>***</p>
    <p>With these data-oriented models in mind, you will also need to know models for system functionality.
    These models include:</p>
    <ul>
        <li>Structure Charts</li>
        <li>System Flowcharts</li>
        <li>Storyboards</li>
    </ul>
    <h2>Structure Charts</h2>
        <p>Structure charts are used to graphically document the relationship between different processes of a system.
        These are useful for a developer, as they depict the general hierarchy and logic of your application in a easily readable format.</p>
        <h3>Structure Chart Examples</h3>
            <!-- <img src="img\CPT-Structured_Chart_Example.png" alt="structure chart 1">
            src https://en.wikipedia.org/wiki/Structure_chart -->
            <img src="img\struct_chart.jpg" alt="struct chart 1">
            <!-- src https://www.youtube.com/watch?v=QN2bjNplGlQ&ab_channel=ChristopherKalodikis -->
    <h2>System Flowcharts</h2>
        <p>System flowcharts act as a graphical representation of the flow of information between a system's processes.
        These are useful to developers as they provide a simplified overview of the logic and interactions the system performs.</p>
        <h3>System Flowchart Examples</h3>
            <img src="img\system_flow1.png" alt="system flowchart 1">
            <!-- src https://www.zenflowchart.com/guides/system-flowchart -->
            <img src="img\system_flow2.png" alt="system flowchart 2">
            <!-- src https://www.zenflowchart.com/guides/system-flowchart -->
    <h2>Storyboards</h2>
        <p>Storyboards in SDD function to present illustrations of user interactions, screen transitions and designs for a system.
        These can then be used to provide a "narrative" of your program, and function to document the system's user interface.</p>
        <h3>Storyboard Examples</h3>
            <img src="img\storyboard1.PNG" alt="storyboard 1">
            <!-- src https://careerfoundry.com/en/blog/ui-design/best-storyboard-examples/ -->
            <img src="img\storyboard2.PNG" alt="storyboard 2">
            <!-- src https://www.visual-paradigm.com/guide/ux-design/wireframe-vs-storyboard-vs-wireflow-vs-mockup-vs-prototyping/ -->
    <p></p>

<!--
switch a:<br>
    case b:<br>
        PRINT b <br>
    case 0:<br>
        PRINT "No values"<br>
    case _:<br>
        PRINT "Invalid value of a"<br>
end switch
-->

<!--
while a < b:<br>
    PRINT a<br>
    a = a + 1<br>
END while<br>
PRINT a<br>
PRINT b 
-->

<!--
arr = ["first","second","third","fourth","fifth"]<br>
for i=0 to 5:<br>
    PRINT arr[i]<br>
END for<br>
PRINT arr
-->

<!--
function search_linear(target,array):<br>
    for i to length(array)-1:<br>
        if array[i] == target:<br>
            return i<br>
        end if<br>
    end for<br>
    return -1<br>
end function<br>
check = search_linear(1,[1,2,3])<br>
if check != -1:<br>
    PRINT check<br>
else:<br>
    PRINT "Target not in array"<br>
end if
-->

<!--
function search_binary(target,array):<br>
    low = 0<br>
    high = length(array)-1<br>
    while low <= high:<br>
        mid = (low+high)/2<br>
        if array[mid] == target:<br>
            return mid<br>
        else if arr[mid] < target:<br>
            low = mid + 1<br>
        else:<br>
            high = mid - 1<br>
    end while<br>
    return -1<br>
end function<br>
check = search_binary(2,[1,2,3])<br>
if check != -1:<br>
    PRINT check<br>
else:<br>
    PRINT "Target not in array"<br>
end if
-->

<!--
function sort_insertion(array):<br>
    for i to length(array)-1:<br>
        key = array[i]<br>
        pos = i - 1<br>
        while pos >= 0 AND array[pos] > key:<br>
            array[pos+1] = array[pos]<br>
            pos = pos - 1<br>
        end while<br>
        array[pos + 1] = key<br>
    end for<br>
    return array<br>
end function<br>
arr = [5,2,9]<br>
PRINT sort_insertion(arr)
-->

<!--
function sort_selection(array):<br>
    for i to length(array)-1:<br>
        min = i<br>
        for pos=i+1 to length(array):<br>
            if array[pos] < array[min]<br>
                min = pos<br>
        end for<br>
        if i != min:<br>
            swap(array[i],array[min])<br>
        end if<br>
    end for<br>
    return array<br>
end function<br>
arr = [5,2,9]<br>
PRINT sort_selection(arr)
-->

<!-- <h1>Creating Psuedocode</h1> <p>In this section you will be learning about creating the basics of psuedocode and standard algorithms. Learning about psuedocode wil help in both planning and designing, as well as implementing your software solutions.</p> <p>Psuedocode and real languages both use the same control structures, being sequence, decision, and repetition. Learning these control structures is vital to understanding the logic behind programming languges, thereby developing your skills in programming.</p> <p>Here are the details about them:</p> <h2>Sequence</h2> <p>Sequence is the most basic control stucture, consisting of executing instructions one after another in order. This can be seen in the following code:</p> <code>a = 5<br>b = 2<br>result = a + b</code> <h2>Decision</h2> <p>Decision allows for your program to change functionality based on certain set conditions. Decisions in programming languges can be seperated into two statements, being 'if' statements and switch statements.</p> <p>Here is an example of an 'if' statement:</p> <code>if a < b:<br>    PRINT a<br>elif b < a:<br>    PRINT b<br>else:<br>    PRINT "Invalid values of a and b"<br>end if</code> <p>Here is an example of a switch statement:</p> <code>switch a:<br>    case b:<br>        PRINT b<br>    case 0:<br>        PRINT "No values"<br>    case _:<br>        PRINT "Invalid value of a"<br>end switch</code> <h2>Repetition</h2> <p>Repetition allows for your program to iterate and repeat sections, depending on the set conditions of the loop. These loops can be seperated into two types, being 'while' loops and 'for' loops. 'While' loops repeat based on a set condition, while 'for' loops iterate through a range, list or set numbers.</p> <p>Here is an example of a while loop:</p> <code>while a < b:<br>    PRINT a<br>    a = a + 1<br>END while<br>PRINT a<br>PRINT b</code> <p>Here is an example of a for loop:</p> <code>arr = ["first","second","third","fourth","fifth"]<br>for i=0 to 5:<br>    PRINT arr[i]<br>END for<br>PRINT arr</code> <h2>Standard Algorithms</h2> <p>The knowledge above can be applied practically through the creation of standard algorithms. These algorithms provide simple functions, such as sorting through a list, which are generally applicable and efficient. Here are some standard algorithms:</p> <h3>Searching - Linear</h3> <p>Linear searches are the most basic and simple kind of search. Their advantageous in simplicity and in their ability to search unsorted lists.</p> <code>function search_linear(target,array):<br>    for i to length(array)-1:<br>        if array[i] == target:<br>            return i<br>        end if<br>    end for<br>    return -1<br>end function<br>check = search_linear(1,[1,2,3])<br>if check != -1:<br>    PRINT check<br>else:<br>    PRINT "Target not in array"<br>end if</code> <h3>Seaching - Binary</h3> <p>Binary searches are faster than linear searches in many cases, although they have a high complexity. Binary searches (and all searches other than linear) can't search unsorted lists, and so they need to be sorted before hand.</p> <code>function search_binary(target,array):<br>    low = 0<br>    high = length(array)-1<br>    while low <= high:<br>        mid = (low+high)/2<br>        if array[mid] == target:<br>            return mid<br>        else if arr[mid] < target:<br>            low = mid + 1<br>        else:<br>            high = mid - 1<br>    end while<br>    return -1<br>end function<br>check = search_binary(2,[1,2,3])<br>if check != -1:<br>    PRINT check<br>else:<br>    PRINT "Target not in array"<br>end if</code> <h3>Sorting - Insertion</h3> <p>In order to search a list without using linear you need to first sort it, insertion sort is one of these sorting algorithms. Insertion sort works by considering the first (or last) element of a list sorted, then iterates through the list and inserts the unsorted contents into the sorted section. Every time an element is placed in the correct position the 'key' is incremented and the process repeats.</p> <code>function sort_insertion(array):<br>    for i to length(array)-1:<br>        key = array[i]<br>        pos = i - 1<br>        while pos >= 0 AND array[pos] > key:<br>            array[pos+1] = array[pos]<br>            pos = pos - 1<br>        end while<br>        array[pos + 1] = key<br>    end for<br>    return array<br>end function<br>arr = [5,2,9]<br>PRINT sort_insertion(arr)</code> <h3>Sorting - Selection</h3> <p>Selection sort works by finding the highest value in the list and swapping it with the value in the current position of the array. The algorithm will keep on iterating until it hits the end of the list.</p> <code>function sort_selection(array):<br>    for i to length(array)-1:<br>        min = i<br>        for pos=i+1 to length(array):<br>            if array[pos] < array[min]<br>                min = pos<br>        end for<br>        if i != min:<br>            swap(array[i],array[min])<br>        end if<br>    end for<br>    return array<br>end function<br>arr = [5,2,9]<br>PRINT sort_selection(arr)</code> <h3>Sorting - Bubble</h3> <p>Bubble sort works by "bubbling" values up the list through comparisons. It will repeatedley iterate through the list and swap the current value with the next one if it's greater, this continues until it's unable to swap anything. Due to how bubble sort works it will always require an extra parse at the end of the sorting process to check if it's sorted.</p> <code>function sort_bubble(array)<br>    swap = false<br>    while swap == true:<br>        swap = false<br>        for i to length(array)-1<br>            if array[i] > array[i+1] AND i < length(array)-1:<br>                swap(array[i],array[i+1])<br>                swap = true<br>            end if<br>        end for<br>    end while<br>    return array<br>end function</code><p></p>

    <h1>Creating Psuedocode</h1>
        <p>In this section you will be learning about creating the basics of psuedocode and standard algorithms.
        Learning about psuedocode wil help in both planning and designing, as well as implementing your software solutions.</p>
        <p>Psuedocode and real languages both use the same control structures, being sequence, decision, and repetition.
        Learning these control structures is vital to understanding the logic behind programming languges, thereby developing your skills in programming.</p>
        <p>Here are the details about them:</p>
        <h2>Sequence</h2>
            <p>Sequence is the most basic control stucture, consisting of executing instructions one after another in order.
            This can be seen in the following code:</p>
            <code>a = 5<br>b = 2<br>result = a + b</code>
        <h2>Decision</h2>
            <p>Decision allows for your program to change functionality based on certain set conditions.
            Decisions in programming languges can be seperated into two statements, being 'if' statements and switch statements.</p>
            <p>Here is an example of an 'if' statement:</p>
            <code>if a < b:<br>    PRINT a<br>elif b < a:<br>    PRINT b<br>else:<br>    PRINT "Invalid values of a and b"<br>end if</code>
            <p>Here is an example of a switch statement:</p>
            <code>switch a:<br>    case b:<br>        PRINT b<br>    case 0:<br>        PRINT "No values"<br>    case _:<br>        PRINT "Invalid value of a"<br>end switch</code>
        <h2>Repetition</h2>
            <p>Repetition allows for your program to iterate and repeat sections, depending on the set conditions of the loop.
            These loops can be seperated into two types, being 'while' loops and 'for' loops.
            'While' loops repeat based on a set condition, while 'for' loops iterate through a range, list or set numbers.</p>
            <p>Here is an example of a while loop:</p>
            <code>while a < b:<br>    PRINT a<br>    a = a + 1<br>END while<br>PRINT a<br>PRINT b</code>
            <p>Here is an example of a for loop:</p>
            <code>arr = ["first","second","third","fourth","fifth"]<br>for i=0 to 5:<br>    PRINT arr[i]<br>END for<br>PRINT arr</code>
        <h2>Standard Algorithms</h2>
            <p>The knowledge above can be applied practically through the creation of standard algorithms.
            These algorithms provide simple functions, such as sorting through a list, which are generally applicable and efficient.
            Here are some standard algorithms:</p>
            <h3>Searching - Linear</h3>
                <p>Linear searches are the most basic and simple kind of search.
                Their advantageous in simplicity and in their ability to search unsorted lists.</p>
                <code>function search_linear(target,array):<br>    for i to length(array)-1:<br>        if array[i] == target:<br>            return i<br>        end if<br>    end for<br>    return -1<br>end function<br>check = search_linear(1,[1,2,3])<br>if check != -1:<br>    PRINT check<br>else:<br>    PRINT "Target not in array"<br>end if</code>
            <h3>Seaching - Binary</h3>
                <p>Binary searches are faster than linear searches in many cases, although they have a high complexity.
                Binary searches (and all searches other than linear) can't search unsorted lists, and so they need to be sorted before hand.</p>
                <code>function search_binary(target,array):<br>    low = 0<br>    high = length(array)-1<br>    while low <= high:<br>        mid = (low+high)/2<br>        if array[mid] == target:<br>            return mid<br>        else if arr[mid] < target:<br>            low = mid + 1<br>        else:<br>            high = mid - 1<br>    end while<br>    return -1<br>end function<br>check = search_binary(2,[1,2,3])<br>if check != -1:<br>    PRINT check<br>else:<br>    PRINT "Target not in array"<br>end if</code>
            <h3>Sorting - Insertion</h3>
                <p>In order to search a list without using linear you need to first sort it, insertion sort is one of these sorting algorithms.
                Insertion sort works by considering the first (or last) element of a list sorted, then iterates through the list and inserts the unsorted contents into the sorted section.
                Every time an element is placed in the correct position the 'key' is incremented and the process repeats.</p>
                <code>function sort_insertion(array):<br>    for i to length(array)-1:<br>        key = array[i]<br>        pos = i - 1<br>        while pos >= 0 AND array[pos] > key:<br>            array[pos+1] = array[pos]<br>            pos = pos - 1<br>        end while<br>        array[pos + 1] = key<br>    end for<br>    return array<br>end function<br>arr = [5,2,9]<br>PRINT sort_insertion(arr)</code>
            <h3>Sorting - Selection</h3>
                <p>Selection sort works by finding the highest value in the list and swapping it with the value in the current position of the array.
                The algorithm will keep on iterating until it hits the end of the list.</p>
                <code>function sort_selection(array):<br>    for i to length(array)-1:<br>        min = i<br>        for pos=i+1 to length(array):<br>            if array[pos] < array[min]<br>                min = pos<br>        end for<br>        if i != min:<br>            swap(array[i],array[min])<br>        end if<br>    end for<br>    return array<br>end function<br>arr = [5,2,9]<br>PRINT sort_selection(arr)</code>
            <h3>Sorting - Bubble</h3>
                <p>Bubble sort works by "bubbling" values up the list through comparisons.
                It will repeatedley iterate through the list and swap the current value with the next one if it's greater, this continues until it's unable to swap anything.
                Due to how bubble sort works it will always require an extra parse at the end of the sorting process to check if it's sorted.</p>
                <code>function sort_bubble(array)<br>    swap = false<br>    while swap == true:<br>        swap = false<br>        for i to length(array)-1<br>            if array[i] > array[i+1] AND i < length(array)-1:<br>                swap(array[i],array[i+1])<br>                swap = true<br>            end if<br>        end for<br>    end while<br>    return array<br>end function</code>
        <h2>Psuedocode Revision Document</h2>
            <p>If you feel </p> -->

<!-- <h1>Translation Methods</h1> <p>This section will deal with understanding how programming languages operate, specifically for how they are translated. These translation methods include interpretation and compilation.</p> <p>Interpretation works by reading and executing the code line-by-line, with reads and executions being performed directly.</p> <p>This is in contrast to compilation, in which the entire code is translated to machine code (binary) before execution.</p> <p>Understanding these two concepts is vital in implementing software solutions, as they influence performance, debugging and the portability of your program.</p> <p>For a more detailed explanation of the translations methods, view the following video:<p> <iframe width="560" height="315" src="https://www.youtube.com/embed/1rd9TP692AM?si=vLfu2FDiOUwV2yuG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> <p></p>

<h1>Translation Methods</h1>
    <p>This section will deal with understanding how programming languages operate, specifically for how they are translated.
    These translation methods include interpretation and compilation.</p>
    <p>Interpretation works by reading and executing the code line-by-line, with reads and executions being performed directly.</p>
    <p>This is in contrast to compilation, in which the entire code is translated to machine code (binary) before execution.</p>
    <p>Understanding these two concepts is vital in implementing software solutions, as they influence performance, debugging and the portability of your program.</p>
    <p>For a more detailed explanation of the translations methods, view the following video:<p>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/1rd9TP692AM?si=vLfu2FDiOUwV2yuG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    <p></p> -->

<h1>Documenting Syntax</h1> <p>This section will discuss the primary models for documenting the syntax of programming languages, these being ENBF and Railroad diagrams. But before exploring these models we must first understand some specific terminology, which can be seen below:</p> <ul> <li>Terminal: a set of symbols or characters, e.g. "abc" or "123"</li> <li>Non-terminal: an expression which is defined elsewhere</li> </ul> <h3>EBNF</h3> <p>Extended Backus-Naur Form (EBNF) is a text-based notation format for describing programming language syntax and data structures. The various concepts within EBNF are represented as:</p> <ul> <li>Terminals: value within ""</li> <li>Non-terminals: named within <></li> <li>Optionals: expressions within [] are optional</li> <li>Repetition: expresions within {} are repeated 0-to-many times</li> <li>Grouping: expressions within () are grouped together</li> <li>Alternatives: expressions next to | show a choice between alternatives</li> <li>Assignment: to assign an expression ::= is used</li> </ul> <p>To better understand these notations view the example below:</p> <code>&lt;variable&gt; ::= &lt;letter&gt;[&lt;digit&gt;{&lt;digit&gt;}]<br>&lt;letter&gt; ::= a|b|c|d|e|f|g|h|i|j|k|l|m|n|o|p|q|r|s|t|u|v|w|x|y|z<br>&lt;digit&gt; ::= 0|1|2|3|4|5|6|7|8|9</code> <p>In this example a variable is definied as a single letter and optionally 1-to-many digits. An example of a variable in this case would be "a282".</p> <h3>Railroad Diagrams</h3> <p>Railroad Diagrams similarily to EBNF document the syntax of a language or data structure, however they differ in that they are visual in nature rather than text-based. An image presenting the various elements of a railroad diagram can be seen below:</p> <img src="img\railroad_key.png" alt="railroad diagram key"> <p>To better understand the nature of railroad diagrams view the examples below:</p> <img src="img\SyntaxDiag1.png" alt="first syntax diagram"> <img src="img\SyntaxDiag2.png" alt="second syntax diagram">

<h1>Documenting Syntax</h1>
    <p>This section will discuss the primary models for documenting the syntax of programming languages, these being ENBF and Railroad diagrams.
    But before exploring these models we must first understand some specific terminology, which can be seen below:</p>
    <ul>
        <li>Terminal: a set of symbols or characters, e.g. "abc" or "123"</li>
        <li>Non-terminal: an expression which is defined elsewhere</li>
    </ul>
    <h3>EBNF</h3>
        <p>Extended Backus-Naur Form (EBNF) is a text-based notation format for describing programming language syntax and data structures.
        The various concepts within EBNF are represented as:</p>
        <ul>
            <li>Terminals: value within ""</li>
            <li>Non-terminals: named within <></li>
            <li>Optionals: expressions within [] are optional</li>
            <li>Repetition: expresions within {} are repeated 0-to-many times</li>
            <li>Grouping: expressions within () are grouped together</li>
            <li>Alternatives: expressions next to | show a choice between alternatives</li>
            <li>Assignment: to assign an expression ::= is used</li>
        </ul>
        <p>To better understand these notations view the example below:</p>
        <code>&lt;variable&gt; ::= &lt;letter&gt;[&lt;digit&gt;{&lt;digit&gt;}]<br>&lt;letter&gt; ::= a|b|c|d|e|f|g|h|i|j|k|l|m|n|o|p|q|r|s|t|u|v|w|x|y|z<br>&lt;digit&gt; ::= 0|1|2|3|4|5|6|7|8|9</code>
        <p>In this example a variable is definied as a single letter and optionally 1-to-many digits.
        An example of a variable in this case would be "a282".</p>
    <h3>Railroad Diagrams</h3>
        <p>Railroad Diagrams similarily to EBNF document the syntax of a language or data structure, however they differ in that they are visual in nature rather than text-based.
        An image presenting the various elements of a railroad diagram can be seen below:</p>
        <img src="img\railroad_key.png" alt="railroad diagram key">
        <p>To better understand the nature of railroad diagrams view the examples below:</p>
        <img src="img\SyntaxDiag1.png" alt="first syntax diagram">
        <img src="img\SyntaxDiag2.png" alt="second syntax diagram">

<h1>Testing Software Solutions</h1> <p>This section will discuss the process of testing software solutions, in terms of the methods to test software and the levels of testing. This information, and testing software in general, is important when designing software as it allows the developer to check if the initial requirements of the system have been met. With this in mind, the two kinds of testing include:</p> <h3>Black Box</h3> <ul> <li>Inputs and expected outputs of the system are known</li> <li>Processes occuring within the system are unknown</li> <li>Also known as functional testing</li> </ul> <h3>White Box</h3> <ul> <li>Explicit knowledge of internal workings of item being tested is known</li> <li>Also known as structural testing</li> </ul> <p>These different kind of testing consist of various levels including:</p> <h3>Module</h3> <ul> <li>Each module/subroutine of system is tested to check if it functions correctly</li> <li>Drivers are used for this testing</li> </ul> <h3>Program</h3> <ul> <li>The entire program is tested, including modules and subroutines, to find if everything is functioning</li> </ul> <h3>System</h3> <ul> <li>The entire system is tested, including all programs in the suite, to ensure proper functioning</li> <li>UI/interfaces are also included in testing</li> </ul> <p>To facilitate these testing methods good testing data must be used; testing data should ensure system is tested for:</p> <ul> <li>Large file sizes</li> <li>Mix of transaction types</li> <li>Response Times</li> <li>Volume of data</li> <li>Effect of system on external environment</li> </ul>
        
<h1>Testing Software Solutions</h1>
    <p>This section will discuss the process of testing software solutions, in terms of the methods to test software and the levels of testing.
    This information, and testing software in general, is important when designing software as it allows the developer to check if the initial requirements of the system have been met.
    With this in mind, the two kinds of testing include:</p>
    <h3>Black Box</h3>
        <ul>
            <li>Inputs and expected outputs of the system are known</li>
            <li>Processes occuring within the system are unknown</li>
            <li>Also known as functional testing</li>
        </ul>
    <h3>White Box</h3>
        <ul>
            <li>Explicit knowledge of internal workings of item being tested is known</li>
            <li>Also known as structural testing</li>
        </ul>
    <p>These different kind of testing consist of various levels including:</p>
    <h3>Module</h3>
        <ul>
            <li>Each module/subroutine of system is tested to check if it functions correctly</li>
            <li>Drivers are used for this testing</li>
        </ul>
    <h3>Program</h3>
        <ul>
            <li>The entire program is tested, including modules and subroutines, to find if everything is functioning</li>
        </ul>
    <h3>System</h3>
        <ul>
            <li>The entire system is tested, including all programs in the suite, to ensure proper functioning</li>
            <li>UI/interfaces are also included in testing</li>
        </ul>
    <p>To facilitate these testing methods good testing data must be used; testing data should ensure system is tested for:</p>
    <ul>
        <li>Large file sizes</li>
        <li>Mix of transaction types</li>
        <li>Response Times</li>
        <li>Volume of data</li>
        <li>Effect of system on external environment</li>
    </ul>

<h1>Maintaining Software Solutions</h1> <p>This section will discuss how to maintain software software solutions effectively and efficently. This is important as when designing a software solution various issues may occur after the finalised implementation of the system. These issues must be addressed in a appropriate manner in order to maintain the functionality of the system.</p> <h3>Why do systems need to be maintained?</h3> <p>The need for maintaining code can have various reasons, although the most common include:</p> <ul> <li>Changing of user requirements</li> <li>Changes in data structure of the program and/or surrounding systems</li> <li>Availability of new hardware and/or software</li> <li>Changing business requiremnts</li> <li>Poor initial implementations</li> </ul> <p>To perform this maintainance a developer must complete certain steps, including:</p> <h3>Identifying Reasons for Maintainance</h3> <p>What catagory of maintanace will be used?</p> <ul> <li>Corrective: fixing errors and bugs</li> <li>Adaptive: adjusting software to fit with changing requirements</li> <li>Improvement: adding new functionality to system</li> </ul> <h3>Determining Changes</h3> <p>What is the nature of the changes?</p> <ul> <li>Priority: how urgent the change is</li> <li>Extent: how significant the change to the system is</li> <li>Personnel: who will be assigned to maintainance</li> </ul> <h3>Implmenting Changes</h3> <p>Program needs to be changed and tested to ensure changes work appropriately and efficiently in conjunction with the origin system.</p> <h3>Documenting Changes</h3> <ul> <li>Changes must be documented to the same degree as the original</li> <li>Documentation must remain consistent in form</li> </ul> <p>Keep in mind various case tools can be used in the maintainance process, including:</p> <ul> <li>Versioning: git and other versioning tools can be used to record changes to the system</li> <li>Testing: test data used to test changes can be automatically generated</li> <li>Data: changes to data structures can be done using data dictionary tools</li> </ul>

<h1>Maintaining Software Solutions</h1>
    <p>This section will discuss how to maintain software software solutions effectively and efficently.
    This is important as when designing a software solution various issues may occur after the finalised implementation of the system.
    These issues must be addressed in a appropriate manner in order to maintain the functionality of the system.</p>
    <h3>Why do systems need to be maintained?</h3>
    <p>The need for maintaining code can have various reasons, although the most common include:</p>
        <ul>
            <li>Changing of user requirements</li>
            <li>Changes in data structure of the program and/or surrounding systems</li>
            <li>Availability of new hardware and/or software</li>
            <li>Changing business requiremnts</li>
            <li>Poor initial implementations</li>
        </ul>
    <p>To perform this maintainance a developer must complete certain steps, including:</p>
    <h3>Identifying Reasons for Maintainance</h3>
        <p>What catagory of maintanace will be used?</p>    
        <ul>
            <li>Corrective: fixing errors and bugs</li>
            <li>Adaptive: adjusting software to fit with changing requirements</li>
            <li>Improvement: adding new functionality to system</li>
        </ul>
    <h3>Determining Changes</h3>
        <p>What is the nature of the changes?</p>
        <ul>
            <li>Priority: how urgent the change is</li>
            <li>Extent: how significant the change to the system is</li>
            <li>Personnel: who will be assigned to maintainance</li>
        </ul>
    <h3>Implmenting Changes</h3>
        <p>Program needs to be changed and tested to ensure changes work appropriately and efficiently in conjunction with the origin system.</p>
    <h3>Documenting Changes</h3>
        <ul>
            <li>Changes must be documented to the same degree as the original</li>
            <li>Documentation must remain consistent in form</li>
        </ul>
    <p>Keep in mind various case tools can be used in the maintainance process, including:</p>
    <ul>
        <li>Versioning: git and other versioning tools can be used to record changes to the system</li>
        <li>Testing: test data used to test changes can be automatically generated</li>
        <li>Data: changes to data structures can be done using data dictionary tools</li>
    </ul>