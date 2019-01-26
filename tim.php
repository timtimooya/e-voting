<html>
<link rel="stylesheet" href="tim.css"/>
<?php

?> 
<body>
    <div class="container">
        <div class="header">Site name</div>
        <div class="nav">
            <ul>
                <li><a href="studentregistration.php">Create accounts</a>

                </li>
                <li><a href="#">Page2.html</a>
            </li>
            <li><a href="studentlogin.php">login</a>

            </li>
            <li><a href="#">Page4.html</a>

            </li>
            <li><a href="#">Page5.html</a>

            </li>
            <li><a href="#">Page6.html</a>

            </li>
        </ul>
    </div>
    <div class="main">This is the Main Div that will load either page1.html -> page6.html depending on which Nav link the user clicks.. Note that when user clicks the nav link.. Only this div should reload with the content of said clicked page. i.e. If user clicks page4.html link in nva menu. This lightblue div will change from whats written here now and load the content from page4.html in this div but the header, Nav, and rightsidebar of the page will stay static and not refresh at all.</div>
    <div class="rightsidebar">blah blah blah blah blah</div>
</div>

</body>
<?php
(function () {
    ("#nav_studentreistration").on("click", function () {
        ("#main").load("studentreistration.php");
    });
    ("#nav_page_b").on("click", function () {
        ("#main").load("PageB.php");
    });
});
?>
</html>