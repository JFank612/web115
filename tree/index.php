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
       <nav><a href="page2.php">food</a><a href="page3.php">scenery</a></nav>
        <div class="title">
            <h1>Animals</h1>
        </div>
        <script>
            function change01() {
                document.getElementById("large").src = "kittens.jpeg";
            }

            function change02() {
                document.getElementById("large").src = "cows.jpg";
            }

            function change03() {
                document.getElementById("large").src = "dogs.jpeg";
            }

            function change04() {
                document.getElementById("large").src = "pig.jpeg";
            }

            function change05() {
                document.getElementById("large").src = "lions.jpeg";
            }

            function change06() {
                document.getElementById("large").src = "penguins.jpeg";
            }

            function change07() {
                document.getElementById("large").src = "shark.jpeg";
            }

            function change08() {
                document.getElementById("large").src = "zebra.jpeg";
            }

            function change09() {
                document.getElementById("large").src = "rabbits.jpg";
            }

        </script>
        <div class="left">
            <div id="column">
                <div class="box-auto"><a href="#large"><img src="kittens.jpeg" alt="kittens" height="125" title="kittens" onclick="change01()"></a></div>
                <div class="box-auto"><a href="#large"><img src="cows.jpg" alt="cows" height="125" title="cows" onclick="change02()"></a></div>
                <div class="box-auto"><a href="#large"><img src="dogs.jpeg" alt="dogs cuddling" height="125" title="dogs cuddling" onclick="change03()"></a></div>
                <div class="box-auto"><a href="#large"><img src="pig.jpeg" alt="pig" height="125" title="pig" onclick="change04()"></a></div>
                <div class="box-auto"><a href="#large"><img src="lions.jpeg" alt="lions" height="125" title="lions" onclick="change05()"></a></div>
                <div class="box-auto"><a href="#large"><img src="penguins.jpeg" alt="penguin family" height="125" title="penguin family" onclick="change06()"></a></div>
                <div class="box-auto"><a href="#large"><img src="shark.jpeg" alt="scary shark" height="125" title="scary shark" onclick="change07()"></a></div>
                <div class="box-auto"><a href="#large"><img src="zebra.jpeg" alt="zebras" height="125" title="zebras" onclick="change08()"></a></div>
                <div class="box-auto"><a href="#large"><img src="rabbits.jpg" alt="rabbits" height="125" title="rabbits" onclick="change09()"></a></div>
            </div>
        </div>
        <div class="right">
            <img id="large" src="kittens.jpeg" alt="kittens">
        </div>
    </div>
    <footer>
        <?php include "footer.php"; ?>
        <a href="https://www.pexels.com/">Pexels</a>
    </footer>

</body>

</html>
