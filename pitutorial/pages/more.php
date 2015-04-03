<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>About</title>
    <link href="../lib/bootstrap-3.3.4-dist/css/bootstrap.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
</head>
<body>
<?php
include "../fragments/navbar.php";
?>

<div class="jumbotron">
    <div class="container">
        <h1>More</h1>

        <p>
            Helping you find help... Or something. You know, i can only do so much...
        </p>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="body-text__about">
            <p>
                Ok, so you're clearly curious to see what else is out there. Well, quite a lot actually.
                Raspbery pi's have a very large fan base, with loads of cool projects and tutorials on how
                to recreate them.
            </p>

            <p>
                If you're more interested in the programming side, there are loads of resources available for
                you in loads of different areas. All really comes down to the type of programming you'd like
                to do, along with which language you prefer. Web programming? Well, PHP to get the ball rolling. Small
                box devices? C might be your best bet. General programming? Well C#, Java, Python... Oh the
                list is endless!
            </p>

            <p>
                Here's a list of resources to get started:
            </p>
            <div class="body-text__list-more">
                <ul class="list-group">
                    <li class="list-group-item"><a href="https://docs.oracle.com/javase/tutorial/">Java for Beginners</a></li>
                    <li class="list-group-item"><a href="http://www.w3schools.com/php/">Web programming (PHP)</a></li>
                    <li class="list-group-item"><a href="http://www.w3schools.com/js/">Web programming (JavaScript)</a></li>
                    <li class="list-group-item"><a href="https://docs.python.org/2/tutorial/">Python for beginners</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php
include "../fragments/jslibraries.php";
?>
</body>
</html>