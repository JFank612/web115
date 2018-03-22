<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Include and Require</title>
</head>
<style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: serif;
    }

    nav {
        margin: 5px 10px;
        padding: 20px;
    }

    a {
        border-color: darkgreen;
        text-align: center;
        border: 1px solid blue;
        font-size: 1.7em;
    }

    h1 {
        font-size: 2.1em;
        font-family: cursive;
    }

    p {
        font-size: 1.4em;
    }

</style>

<body>
    <header>
        <?php include "header.php";?>
    </header>
    <nav><a href="header.php">header</a><a href="footer.php">footer</a></nav>
    <h1>learning PHP</h1>
    <p>Aliquam porta at ligula sed blandit. Fusce ut malesuada diam, sit amet elementum nulla. Suspendisse leo orci, interdum eget purus sed, volutpat posuere diam. Duis mattis cursus leo condimentum pulvinar. Vestibulum ultrices, est dictum porttitor egestas, erat diam auctor diam, vitae varius diam nulla vitae arcu. Duis velit odio, tincidunt non dictum ut, sodales sed leo. Suspendisse feugiat justo sit amet molestie porttitor. Nulla dictum, sapien sed tincidunt rhoncus, dolor nisi congue neque, quis pulvinar ipsum justo ut lacus. Curabitur sem nulla, congue ut ullamcorper sit amet, volutpat a diam. Donec tincidunt urna id ligula dignissim consectetur. Proin consectetur, arcu vitae suscipit pharetra, leo nulla interdum tortor, id fringilla dui turpis in ante. Vivamus arcu mi, laoreet ultrices purus in, maximus scelerisque massa. Sed at consectetur nisl. Pellentesque commodo fringilla nibh, id bibendum eros egestas eget. Curabitur sollicitudin mattis velit ultrices varius. Mauris nec consectetur risus.</p>
    <footer>
        <?php require "footer.php";?>
    </footer>

</body>

</html>
