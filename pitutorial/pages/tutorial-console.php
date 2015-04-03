<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Tutorial: Command Line</title>
    <link href="../lib/bootstrap-3.3.4-dist/css/bootstrap.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
</head>
<body>
<?php
include "../fragments/navbar.php";
?>

<div class="jumbotron">
    <div class="container">
        <h1>Tutorial: The command line</h1>

        <p>
            How to use the most powerful tool in computing
        </p>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="body-text__about col-lg-12">
            <p>
                Ah the command line. Probably the most powerful tool in any developers arsenal. However,
                for the casual user, it's very much over looked. Especially if they're used to Windows or
                OSX.
            </p>

            <h2>
                <small>Background</small>
            </h2>
            <p>
                So, for those truly drawing a blank on what a Command line (or console, CMD, Command Prompt,
                and the list goes on...) is, in essence its direct access to the computer system. Pretty much everything
                you do on a computer is effectivly bypassing the command line. There isn't anything you can't do with
                the
                command line. It's powerful, but requires some learning to become used to it.

            </p>

            <div class="body-text__img-standard"><img src="../img/console_opened.png"/></div>
            <p>
                The above is a screenshot of the commandline from my own computer. You might notice that it looks kinda
                similar to one from a film or t.v. show, especially when it looks like this:
            </p>

            <div class="body-text__img-standard"><img src="../img/console_update.png"/></div>
            <h2>
                <small>Using the Command Line</small>
            </h2>
            <p>
                First things first, lets find your console. On some linux systems, CTRL + ALT + T results in it appearing.
                However, i don't work like that. Instead you'll find me along the navigation bar at the top of the screen. I should
                be called "Terminal".
            </p>
            <p>
                When opening up the Terminal, you'll be presented with a pretty blank box (much like the first image above.).
                This is currently pointing at your home directory. Try the command "ls". You should be presented with what's available
                to you in your current directory; in this case home.
            </p>
            <p>

            </p>
            <div class="body-text__table">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Command</th>
                        <th>Example</th>
                        <th>Explanation</th>
                    </tr>
                    <tr>
                        <td>
                            cd <span class="body-text__span-italic">&lt;name of directory (folder) you'd like to navigate to&gt; </span>
                        </td>
                        <td>
                            cd Downloads/extracted
                        </td>
                        <td>
                            Moves the terminal to the directory specified.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            ls (add -l to show everything in a list view with details)
                        </td>
                        <td>
                            ls -l Downloads/extracted
                        </td>
                        <td>
                            Displays list of files and directories (folders) within the current directory.
                        </td>
                    </tr>
                </table>
            </div>
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