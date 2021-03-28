<!DOCTYPE html>
<html lang="en">
    <head>
        <title>WebShop - Szemináriumi munka</title>
        <meta charset="UTF-8">
        <meta name="description" content="Szeminariumi-IT">
        <meta name="keywords" content="HTML, CSS, PHP, MYSQL, SQL">
        <meta name="author" content="Dániel Fábián">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="noarchive">
        <link rel="stylesheet" type="text/css" href="global-css.css">
        <link rel="stylesheet" type="text/css" href="webshop.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="js.js"></script>
        <link rel="shortcut icon" type="image/jpg" href="https://img.icons8.com/color/48/000000/code.png">
    </head>
    <body>
        <main id="main">
            <header>
                <span>Ehhez a projekthez ezeket használtam</span><br><br>
                HTML, CSS, PHP + MYSQL
            </header>
            
            <div class="sticky">
                <div class="topnav" id="myTopnav">
                    <a href="index.php"><i class="fa fa-fw fa-home"></i>Kezdőlap</a>
                    <div class="dropdown">
                        <a href="#main" class="dropbtn active"><i class="fa fa-shopping-cart"></i>WebShop
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <div class="dropdown-content">
                            <a href="admin/admin.php"><i class="fa fa-lock"></i>Admin</a>
                        </div>
                    </div> 
                    <a href="about.php"><i class="fa fa-address-card"></i>Rólam</a>
                    <a href="javascript:myFunction();" class="icon">
                        <i style="margin: 0;" class="fa fa-bars"></i>
                    </a>
                </div>
            </div>

            <div style="background: linear-gradient(90deg, rgba(242,242,242,1) 0%, rgba(98,172,181,1) 20%, rgba(98,172,181,1) 50%, rgba(98,172,181,1) 80%, rgba(242,242,242,1) 100%); height: 10px;"></div>
            <div class="termekek"><span>Termékek</span></div>
            <div class="search-container">
                <form method="GET" action="search.php">
                    <input type="text" placeholder="Keresés.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>

            <div class="content">
                <?php
                include "db_config.php";

                if (mysqli_connect_errno()) {
                    echo "<span class=\"no-data\">" .
                        mysqli_connect_errno() .
                        "</span>";
                    die();
                } else {
                    $q = "";
                    $count = 0;

                    if ($_SERVER["REQUEST_METHOD"] == "GET") {
                        if (empty($_GET["search"]) || !isset($_GET["search"])) {
                            $q = "SELECT * FROM products";
                        } else {
                            $q =
                                "SELECT * FROM products WHERE name LIKE '%" .
                                $_GET["search"] .
                                "%'";
                        }
                    }

                    ($result = mysqli_query($connection, $q)) or
                        die(mysqli_error($connection));

                    echo "<div class=\"products\">";
                    if (mysqli_num_rows($result) > 0) {
                        while ($record = mysqli_fetch_array($result)) {
                            $price = number_format(
                                $record["price"],
                                0,
                                ".",
                                " "
                            );
                            $count++;

                            echo "
                                    <div class=\"product\">
                                        <a href=\"$record[link]\" target=\"blank\">
                                            <img src=\"$record[pic]\" alt=\"$record[id].jpg\" width=\"100%\">
                                        </a>
                                        <span class=\"price\">" .
                                $price .
                                " Ft</span><br>
                                        <a href=\"$record[link]\" class=\"name\" target=\"blank\">$record[name]</a>
                                        <hr>
                                        <span class=\"description\">$record[description]</span>
                                        <a href=\"$record[link]\" class=\"tovabbi\" target=\"blank\">további információ ></a>
                                    </div>
                                ";
                        }

                        mysqli_free_result($result);
                    } else {
                        echo "<span class=\"no-data\">Nincs adat az adatbázisban!</span>";
                    }
                    echo "</div>";

                    mysqli_close($connection);

                    echo "<div class=\"info\">";
                    if (!empty($_GET["search"])) {
                        echo "<div class=\"result\">'<i><b><big>" .
                            $_GET["search"] .
                            "</big></b></i>' keresés eredmémye a következő (" .
                            $count .
                            " találat):</div>";
                    } else {
                        echo "<div class=\"all\"><i>Az összes termék (" .
                            $count .
                            " darab):</i></div>";
                    }
                    echo "</div>";
                }
                ?>
            </div>

            <div class="dark">
                <div class="container">
                    <span class="title">Rólunk</span>
                    <div>
                        <p>
                            Technikai újdonságok és a népszerű számítástechnikai termékek széles választéka, gyors ügyintézés és időnként gigantikus akciók: ez a notebook.hu.
                        </p><br>
                        <p>
                            20 éve fáradhatatlanul dolgozunk azon, hogy nálunk mindenki megtalálja azt a notebookot, tabletet, asztali PC-t, okostelefont, nyomtatót vagy szkennert, moniort, TV-t valamint kiegészítőt, amire vágyik. Az e-sportok és a számítógépes játékok térhódításával nálunk is egyre nagyobb hangsúlyt kapnak a profi és casual gamereknek készült gamer PC-k, gamer notebookok és konzolok (PlayStation, XBox, Nintendo), illetve a velük kompatibilis játékszoftverek.
                        </p><br>
                        <p>
                            Hitvallásunk egyszerű: Olyan árukészlet és vevőorientált üzletpolitika kialakítása, amitől mindenki számára a legjobb döntés a notebook.hu-t választani.
                        </p>
                    </div>
                </div>
            </div>

            <div class="light">
                <div class="container">
                    <span class="title">Elérhetőségek</span>
                    <div>
                        <ul type="none">
                            <li><i class="fa fa-phone"></i> | (+36) 1 555 - 2 - 888<br>
                                <span style="margin: 10px 0 0 30px; font-style: italic; display: inline-block">Központi ügyfélszolgálat  H-P.: 9.00 - 20.00, SZ.: 9.00 - 17.00</span><br>
                                <span style="margin: 10px 0 0 30px; font-style: italic; display: inline-block">Üzleteink - Nyitvatartási időben</span><br>
                                <table>
                                    <tr>
                                        <td>
                                            Allee
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Árkád
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Mammut
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Oktogon
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Pólus
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Debrecen
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Pécs
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Szeged
                                        </td>
                                    </tr>
                                </table>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i> Ügyfélszolgálat | sales@notebook.hu<br>
                            </li>
                            <hr>
                            <li>
                                <i class="fa fa-envelope"></i> Panaszkezelés | panaszkezeles@notebook.hu<br>
                            </li>
                            <hr>
                            <li>
                                <i class="fa fa-envelope"></i> Szervíz, garancia | szerviz@notebook.hu<br>
                            </li>
                            <hr>
                            <li>
                                <i class="fa fa-envelope"></i> Marketing | marketing@notebook.hu<br>
                            </li>
                            <hr>
                            <li>
                                <i class="fa fa-envelope"></i> Franchise | franchise@notebook.hu<br>
                            </li>
                            <hr>
                            <li>
                                <i class="fa fa-envelope"></i> Management | management@notebook.hu<br>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>

        <footer>
        Copyright ©
            <?php echo date("Y"); ?>
             Fábián Dániel. Minden jog fent van tartva.<br>• • •<br>
            Szemináriumi munka
        </footer>

        <button onclick="topFunction()" id="toTop" title="Az oldal tetejére"><i class="fa fa-chevron-up"></i></button>
        <script>
            //Get the button
            var mybutton = document.getElementById("toTop");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    mybutton.style.bottom = "20px";
                } else {
                    mybutton.style.bottom = "-70px";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
    </body>
</html>