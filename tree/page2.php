<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Project</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface%7CCrete+Round%7CGloria+Hallelujah%7CRoboto+Condensed%7CVT323" rel="stylesheet">
</head>

<body>
    <header>
        <?php include "header.php"; ?>
    </header>
    <div class="container">
       <nav><a href="index.php">animals</a><a href="page3.php">scenery</a></nav>
        <div class="title">
            <h1>food</h1>
        </div>
        <script>
            function change01() {
                document.getElementById("large").src = "pizza.jpeg";
            }

            function change02() {
                document.getElementById("large").src = "platter.jpeg";
            }

            function change03() {
                document.getElementById("large").src = "appetizers.jpg";
            }

            function change04() {
                document.getElementById("large").src = "fish.jpeg";
            }

            function change05() {
                document.getElementById("large").src = "burger.jpeg";
            }

            function change06() {
                document.getElementById("large").src = "cooking.jpeg";
            }

            function change07() {
                document.getElementById("large").src = "salad.jpeg";
            }

            function change08() {
                document.getElementById("large").src = "steak.jpeg";
            }

            function change09() {
                document.getElementById("large").src = "taco.jpeg";
            }

        </script>

        <div class="right-2">
            <div id="reverse-row">
                <div class="box-zero"><a href="#large"><img src="pizza.jpeg" alt="pizza" height="125" title="pizza" onclick="change01()"></a></div>
                <div class="box-zero"><a href="#large"><img src="platter.jpeg" alt="meats and veggies" height="125" title="meats and veggies" onclick="change02()"></a></div>
                <div class="box-zero"><a href="#large"><img src="appetizers.jpg" alt="appetizers" height="125" title="appetizers" onclick="change03()"></a></div>
                <div class="box-zero"><a href="#large"><img src="fish.jpeg" alt="salmon" height="125" title="salmon" onclick="change04()"></a></div>
                <div class="box-zero"><a href="#large"><img src="burger.jpeg" alt="burger and fries" height="125" title="burger and fries" onclick="change05()"></a></div>
                <div class="box-zero"><a href="#large"><img src="cooking.jpeg" alt="cooking a meal" height="125" title="cooking a meal" onclick="change06()"></a></div>
                <div class="box-zero"><a href="#large"><img src="salad.jpeg" alt="salad" height="125" title="salad" onclick="change07()"></a></div>
                <div class="box-zero"><a href="#large"><img src="steak.jpeg" alt="steak dinner" height="125" title="steak dinner" onclick="change08()"></a></div>
                <div class="box-zero"><a href="#large"><img src="taco.jpeg" alt="taco" height="125" title="taco" onclick="change09()"></a></div>
            </div>
        </div>
        <div class="left-2">
            <img id="large" src="pizza.jpeg" alt="pizza">
        </div>
    </div>

    <footer class="bottom">
        <?php include "footer.php"; ?>
        <a href="https://www.pexels.com/">Pexels</a>
    </footer>
</body>

</html>
