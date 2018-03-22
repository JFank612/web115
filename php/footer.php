<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
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

    footer {
        font-family: sans-serif;
        color: darkblue;
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
   <nav><a href="header.php">header</a><a href="index.php">include</a></nav>
    <h1>learning php footer</h1>
    <p>Ut ex dui, interdum ac dictum tincidunt, tincidunt cursus diam. Suspendisse nec imperdiet ligula. Proin molestie ipsum et eros eleifend, at pulvinar tellus ultricies. Maecenas faucibus dapibus accumsan. Sed suscipit sit amet massa vel blandit. Duis sit amet congue libero. Nulla eros turpis, mollis eu eros et, laoreet pretium mi. Morbi in sapien blandit, convallis purus a, consectetur lacus. Fusce malesuada lorem bibendum nunc tincidunt hendrerit. Vivamus ultrices dolor ut justo bibendum, ac tristique ex tempor. Suspendisse eget neque quis diam malesuada vulputate. Morbi sed elit commodo, elementum nunc nec, luctus neque.</p>
    <footer>
        <?php 
    echo "Finally I finshed it!";?>
    </footer>

</body>

</html>
