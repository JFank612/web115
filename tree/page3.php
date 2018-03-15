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
       <nav><a href="index.php">animals</a><a href="page2.php">food</a></nav>
        <div class="title">
            <h1>Scenery</h1>
        </div>
        <script>
            function change01() {
                document.getElementById("large").src = "mountains.jpg";
            }

            function change02() {
                document.getElementById("large").src = "san%20francisco.jpeg";
            }

            function change03() {
                document.getElementById("large").src = "red%20rocks.jpeg";
            }

            function change04() {
                document.getElementById("large").src = "waterfront.jpeg";
            }

            function change05() {
                document.getElementById("large").src = "waterfall.jpeg";
            }

            function change06() {
                document.getElementById("large").src = "eiffel%20tower.jpeg";
            }

            function change07() {
                document.getElementById("large").src = "dream%20house.jpeg";
            }

            function change08() {
                document.getElementById("large").src = "floating.jpeg";
            }

            function change09() {
                document.getElementById("large").src = "grand%20canyon.jpeg";
            }

        </script>
            <div class="top">
                <div id="row">
                    <div class="box"><a href="#large"><img src="mountains.jpg" alt="pizza" height="125" title="mountainous view" onclick="change01()"></a></div>
                    <div class="box"><a href="#large"><img src="san%20francisco.jpeg" alt="meats and veggies" height="125" title="golden fate bridge" onclick="change02()"></a></div>
                    <div class="box"><a href="#large"><img src="red%20rocks.jpeg" alt="appetizers" height="125" title="Red Rocks Park" onclick="change03()"></a></div>
                    <div class="box"><a href="#large"><img src="waterfront.jpeg" alt="salmon" height="125" title="dock party" onclick="change04()"></a></div>
                    <div class="box"><a href="#large"><img src="waterfall.jpeg" alt="burger and fries" height="125" title="waterfall" onclick="change05()"></a></div>
                    <div class="box"><a href="#large"><img src="eiffel%20tower.jpeg" alt="cooking a meal" height="125" title="eiffel tower" onclick="change06()"></a></div>
                    <div class="box"><a href="#large"><img src="dream%20house.jpeg" alt="salad" height="125" title="dream house" onclick="change07()"></a></div>
                    <div class="box"><a href="#large"><img src="floating.jpeg" alt="steak dinner" height="125" title="floating on the water" onclick="change08()"></a></div>
                    <div class="box"><a href="#large"><img src="grand%20canyon.jpeg" alt="taco" height="125" title="grand canyon" onclick="change09()"></a></div>
                </div>
            </div>
            <div class="bottom">
                <img id="large" src="mountains.jpg" alt="mountainous view">
            </div>
        </div>
        <div>
            <footer>
                <?php include "footer.php"; ?>
                <a href="https://www.pexels.com/">Pexels</a>
            </footer>
        </div>
   

</body>

</html>