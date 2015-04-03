<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link href="../lib/bootstrap-3.3.4-dist/css/bootstrap.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
</head>
<body>
<?php
    include "../fragments/navbar.php";
?>
<div class="jumbotron">
    <div class="container">
        <h1>Welcome</h1>
        <p>
            Nice to meet you :D
        </p>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h2>About <img class="img-circle" src="../img/Raspi_Colour_R.png" alt="Generic placeholder image" height="100" width="100"></h2>
            <p>So what exsactly am I?</p>
            <p><a class="btn btn-default" href="../pages/about.php" role="button">View details »</a></p>
        </div>
        <div class="col-md-4">
            <h2>Cool Stuff <img class="img-square" src="../img/minecraft-block.png" alt="Generic placeholder image" height="100" width="100"></h2>
            <p>Coming soon...</p>
            <p><a class="btn btn-default" href="../pages/comingsoon.php" role="button">View details »</a></p>
        </div>
        <div class="col-md-4">
            <h2>Console <img class="img-circle" src="../img/ubuntu_console.png" alt="Generic placeholder image" height="100" width="100"></h2>

            <p>How to use the console</p>
            <p><a class="btn btn-default" href="../pages/tutorial-console.php" role="button">View details »</a></p>
        </div>
    </div>
    <hr>
    <footer>
        <p>Created by <a href="http://www.harrywinser.com">Harry Winser</a> with the help of Bootstrap and jQuery</p>
    </footer>
</div>

<?php
    include "../fragments/jslibraries.php";
?>
</body>
</html>