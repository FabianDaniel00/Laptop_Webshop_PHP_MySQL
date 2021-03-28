<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin - Szemináriumi munka</title>
        <meta charset="UTF-8">
        <meta name="description" content="Szeminariumi-IT">
        <meta name="keywords" content="HTML, CSS, PHP, MYSQL, SQL">
        <meta name="author" content="Dániel Fábián">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="noarchive">
        <link rel="stylesheet" type="text/css" href="../global-css.css">
        <link rel="stylesheet" type="text/css" href="admin.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="../js.js"></script>
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
                    <a href="../index.php"><i class="fa fa-fw fa-home"></i>Kezdőlap</a>
                    <div class="dropdown">
                        <a href="../webshop.php" class="dropbtn"><i class="fa fa-shopping-cart"></i>WebShop
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <div class="dropdown-content">
                            <a href="#main" class="active"><i class="fa fa-lock"></i>Admin</a>
                        </div>
                    </div> 
                    <a href="../about.php"><i class="fa fa-address-card"></i>Rólam</a>
                    <a href="javascript:myFunction();" class="icon">
                        <i style="margin: 0;" class="fa fa-bars"></i>
                    </a>
                </div>
            </div>

            <div style="background: linear-gradient(90deg, rgba(242,242,242,1) 0%, rgba(76,175,80,1) 20%, rgba(76,175,80,1) 50%, rgba(76,175,80,1) 80%, rgba(242,242,242,1) 100%); height: 10px;"></div>
            <div class="termekek"><span>Termékek</span></div>
            <div class="search-container">
                <form method="POST" action="../search.php">
                    <input type="text" placeholder="Keresés.." name="search-admin">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>

            <!-- Trigger/Open The Modal -->
            <button class="insert" id="insert"><i class="fa fa-plus"></i>Új hozzáadása</button>
            <?php if ($_SERVER["REQUEST_METHOD"] == "GET") {
                if (isset($_GET["insert"]) && $_GET["insert"] == "true") {
                    echo "<span class=\"success\">Sikeres hozzáadás!</span>";
                } elseif (
                    isset($_GET["insert"]) &&
                    $_GET["insert"] == "false"
                ) {
                    echo "<span class=\"error\">Sikertelen hozzáadás!</span>";
                } elseif (isset($_GET["update"]) && $_GET["update"] == "true") {
                    echo "<span class=\"success\">Sikeres frissítés! ID: " .
                        $_GET["updated-id"] .
                        "</span>";
                } elseif (
                    isset($_GET["update"]) &&
                    $_GET["update"] == "false"
                ) {
                    echo "<span class=\"error\">Sikertelen frissítés! ID: " .
                        $_GET["updated-id"] .
                        "</span>
                        <button class=\"le-termek\" onclick=\"leATermekhez(" .
                        $_GET["updated-id"] .
                        ")\"><i class=\"fa fa-chevron-down\"></i>Le a termékhez</button>";
                } elseif (isset($_GET["delete"]) && $_GET["delete"] == "true") {
                    echo "<span class=\"success\">Sikeres törlés! ID: " .
                        $_GET["deleted-id"] .
                        "</span>";
                } elseif (
                    isset($_GET["delete"]) &&
                    $_GET["delete"] == "false"
                ) {
                    echo "<span class=\"error\">Sikertelen törlés! ID: " .
                        $_GET["deleted-id"] .
                        "</span>
                        <button class=\"le-termek\" onclick=\"leATermekhez(" .
                        $_GET["deleted-id"] .
                        ")\"><i class=\"fa fa-chevron-down\"></i>Le a termékhez</button>";
                }
                echo "
                    <script>
                        function leATermekhez(id) {
                            var element = document.getElementById(id);
                            var headerOffset = 53;
                            var elementPosition = element.getBoundingClientRect().top;
                            var offsetPosition = elementPosition - headerOffset;

                            window.scrollTo({
                                top: offsetPosition
                            });
                        }
                </script>";
            } ?>

            <!-- The Modal -->
            <div id="insert-modal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close">&times;</span>
                        <h2>Új hozzáadása</h2>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="insert.php" id="insert-form">
                            <label for="name">Név</label><br>
                            <textarea id="name" name="name" maxlength="100" placeholder="max 100" form="insert-form"></textarea><br>
                            <label for="price">Ár (Ft)</label><br>
                            <input type="number" min="0" id="price" name="price"><br>
                            <label for="description">Leírás</label><br>
                            <textarea id="description" name="description" maxlength="500" rows="8" placeholder="max 500" form="insert-form"></textarea><br>
                            <label for="pic">Kép link</label><br>
                            <textarea id="pic" name="pic" maxlength="300" placeholder="max 300" rows="3" form="insert-form"></textarea><br>
                            <label for="link">Link</label><br>
                            <textarea id="link" name="link" maxlength="300" placeholder="max 300" form="insert-form"></textarea><br>
                            <input type="submit" value="Hozzáadás">
                            <input type="reset" value="Mezők törlése">
                        </form>
                    </div>
                    <div class="modal-footer"></div>
                </div>
            </div>

            <?php
            include "../db_config.php";

            if (mysqli_connect_errno()) {
                echo "<span class=\"no-data\">" .
                    mysqli_connect_errno() .
                    "</span>";
                die();
            } else {
                if ($_SERVER["REQUEST_METHOD"] == "GET") {
                    if (isset($_GET["id"])) {
                        $q = "SELECT * FROM products WHERE `id`='$_GET[id]'";

                        ($result = mysqli_query($connection, $q)) or
                            die(mysqli_error($connection));

                        if (mysqli_num_rows($result) > 0) {
                            while ($record = mysqli_fetch_array($result)) {
                                echo "
                                    <div id=\"update-modal\" class=\"modal\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <span class=\"close\">&times;</span>
                                                <h2>Szerkesztés</h2>
                                            </div>
                                            <div class=\"modal-body\">
                                                <form method=\"POST\" action=\"update.php\" id=\"update-form\">
                                                    <label for=\"id\" style=\"font-size: 20px;\">ID: <b>$record[id]</b></label><br>
                                                    <input style=\"display: none;\" type=\"number\" min=\"0\" id=\"id\" name=\"id\" value=\"$record[id]\"><br>
                                                    <label for=\"name\">Név</label><br>
                                                    <textarea id=\"name\" name=\"name\" maxlength=\"100\" placeholder=\"max 100\" form=\"update-form\">$record[name]</textarea><br>
                                                    <label for=\"price\">Ár (Ft)</label><br>
                                                    <input type=\"number\" min=\"0\" id=\"price\" name=\"price\" value=\"$record[price]\"><br>
                                                    <label for=\"description\">Leírás</label><br>
                                                    <textarea id=\"description\" name=\"description\" maxlength=\"500\" rows=\"8\" placeholder=\"max 500\" form=\"update-form\">$record[description]</textarea><br>
                                                    <label for=\"pic\">Kép link</label><br>
                                                    <textarea id=\"pic\" name=\"pic\" maxlength=\"300\" placeholder=\"max 300\" rows=\"3\" form=\"update-form\">$record[pic]</textarea><br>
                                                    <label for=\"link\">Link</label><br>
                                                    <textarea id=\"link\" name=\"link\" maxlength=\"300\" placeholder=\"max 300\" form=\"update-form\">$record[link]</textarea><br>
                                                    <input type=\"submit\" value=\"Frissítés\">
                                                    <input type=\"reset\" value=\"Mezők törlése\">
                                                </form>
                                            </div>
                                            <div class=\"modal-footer\"></div>
                                        </div>
                                    </div>

                                    <script>
                                        var update_modal = document.getElementById(\"update-modal\");

                                        var spanUpdate = document.getElementsByClassName(\"close\")[1];

                                        spanUpdate.onclick = function() {
                                            update_modal.style.display = \"none\";
                                        }
                                    </script>
                                ";
                            }

                            mysqli_free_result($result);
                        } else {
                            echo "<span class=\"no-data\" style=\"padding: 10px;\">Nincs adat az adatbázisban!</span>";
                        }
                    }

                    mysqli_close($connection);
                }
            }
            ?>

            <div class="container">
                <?php
                include "../db_config.php";

                if (mysqli_connect_errno()) {
                    echo "<span class=\"no-data\">" .
                        mysqli_connect_errno() .
                        "</span>";
                    die();
                } else {
                    $q = "";

                    if ($_SERVER["REQUEST_METHOD"] == "GET") {
                        if (
                            empty($_GET["search-admin"]) ||
                            !isset($_GET["search-admin"])
                        ) {
                            $q = "SELECT * FROM products";
                        } else {
                            $q =
                                "SELECT * FROM products WHERE name LIKE '%" .
                                $_GET["search-admin"] .
                                "%'";
                        }
                    }

                    ($result = mysqli_query($connection, $q)) or
                        die(mysqli_error($connection));

                    echo "
                        <table class=\"products\">
                            <tr>
                                <th>
                                    ID
                                </th>
                                <th>
                                    Név
                                </th>
                                <th>
                                    Ár (Ft)
                                </th>
                                <th>
                                    Leírás
                                </th>
                                <th>
                                    Kép
                                </th>
                                <th>
                                    Link
                                </th>
                                <th>
                                    Szerkesztés
                                </th>
                                <th>
                                    Törlés
                                </th>
                            </tr>
                        ";

                    $count = 0;
                    if (mysqli_num_rows($result) > 0) {
                        while ($record = mysqli_fetch_array($result)) {
                            $price = number_format(
                                $record["price"],
                                0,
                                ".",
                                " "
                            );
                            $count++;

                            if ($count % 2 == 1) {
                                echo "<tr class=\"light\" id=\"$record[id]\">";
                            } else {
                                echo "<tr class=\"dark\" id=\"$record[id]\">";
                            }
                            echo "
                                        <td style=\"text-align: center;\">
                                            $record[id]
                                        </td>
                                        <td>
                                            $record[name]
                                        </td>
                                        <td style=\"white-space: nowrap;\">
                                            $price
                                        </td>
                                        <td>
                                            $record[description]
                                        </td>
                                        <td style=\"background-color: #fff;\">
                                            <img src=\"$record[pic]\" alt=\"$record[id].jpg\" width=\"100%\">
                                        </td>
                                        <td style=\"word-wrap: break-word;\">
                                            <a href=\"$record[link]\" target=\"blank\">$record[link]</a>
                                        </td>
                                        <td>
                                            <form method=\"GET\" action=\"update.php\">
                                                <button type=\"submit\" class=\"update\" value=\"$record[id]\" name=\"id\"><i class=\"fa fa-edit\"></i>Szerkesztés</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form method=\"POST\" action=\"delete.php\" onSubmit=\"if(!confirm('Biztosan ki szeretnéd törölni ezt a terméket? ID: $record[id]')){return false;}\">
                                                <button type=\"submit\" class=\"delete\" value=\"$record[id]\" name=\"id\"><i class=\"fa fa-trash\"></i>Törlés</button>
                                            </form>
                                        </td>
                                    </tr>
                                ";
                        }

                        mysqli_free_result($result);
                    } else {
                        echo "<td colspan=\"8\" class=\"no-data\" style=\"padding: 10px;\">Nincs adat az adatbázisban!</td>";
                    }
                    echo "</table>";

                    mysqli_close($connection);

                    echo "<div class=\"info\">";
                    if (!empty($_GET["search-admin"])) {
                        echo "<div class=\"result\">'<i><b><big>" .
                            $_GET["search-admin"] .
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
        </main>

        <footer>
        Copyright ©
            <?php echo date("Y"); ?>
             Fábián Dániel. Minden jog fent van tartva.<br>• • •<br>
            Szemináriumi munka
        </footer>

        <script>
            // Get the modal
            var insert_modal = document.getElementById("insert-modal");
            var update_modal = document.getElementById("update-modal");

            // Get the button that opens the modal
            var insert = document.getElementById("insert");

            // Get the <span> element that closes the modal
            var spanInsert = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal 
            insert.onclick = function() {
                insert_modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            spanInsert.onclick = function() {
                insert_modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
            if (event.target == insert_modal || (update_modal !== null && event.target == update_modal)) {
                    insert_modal.style.display = "none";
                    update_modal.style.display = "none";
                }
            }
        </script>

        <?php if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if (isset($_GET["insert"]) && $_GET["insert"] == "true") {
                echo "
                        <script>
                            window.scrollTo(0,document.body.scrollHeight);
                        </script>
                    ";
            } elseif (isset($_GET["update"]) && $_GET["update"] == "true") {
                echo "
                        <script>
                            var element = document.getElementById(\"" .
                    $_GET["updated-id"] .
                    "\");
                            var headerOffset = 53;
                            var elementPosition = element.getBoundingClientRect().top;
                            var offsetPosition = elementPosition - headerOffset;

                            window.scrollTo({
                                top: offsetPosition
                            });
                        </script>
                    ";
            } elseif (isset($_GET["id"])) {
                echo "
                    <script>
                        var element = document.getElementById(\"" .
                    $_GET["id"] .
                    "\");
                        var headerOffset = 53;
                        var elementPosition = element.getBoundingClientRect().top;
                        var offsetPosition = elementPosition - headerOffset;

                        window.scrollTo({
                            top: offsetPosition
                        });
                    </script>
                ";
            }
        } ?>

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