<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Kezdőlap - Szemináriumi munka</title>
        <meta charset="UTF-8">
        <meta name="description" content="Szeminariumi-IT">
        <meta name="keywords" content="HTML, CSS, PHP, MYSQL, SQL">
        <meta name="author" content="Dániel Fábián">
        <meta name="viewport" content="width=device-width, initial-scale=0.8">
        <meta name="robots" content="noarchive">
        <link rel="stylesheet" type="text/css" href="global-css.css">
        <link rel="stylesheet" type="text/css" href="index.css">
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
                    <a href="#main" class="active"><i class="fa fa-fw fa-home"></i>Kezdőlap</a>
                    <div class="dropdown">
                        <a href="webshop.php" class="dropbtn"><i class="fa fa-shopping-cart"></i>WebShop
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

            <div style="background: linear-gradient(90deg, rgba(217,217,217,1) 0%, rgba(252,114,51,1) 20%, rgba(252,114,51,1) 50%, rgba(252,114,51,1) 80%, rgba(217,217,217,1) 100%); height: 10px;"></div>
            <div class="dark">
                <div class="container">
                    <div class="darker flex1">
                        <div>
                            <span class="title">HTML</span><br><br>
                            <span class="description">Nyelv weboldalak felépítéséhez</span><br><br>
                            <a href="https://www.w3schools.com/html/default.asp" target="blank" class="buttons">HTML tanulása</a>
                            <a href="https://www.w3schools.com/tags/default.asp" target="blank" class="buttons">HTML referencia</a>
                        </div>
                    </div>

                    <div class="darker flex2">
                        <div class="example1">
                            <span>HTML Példa:</span><br>
                            <div>
                                <xmp>
<!DOCTYPE html>
<html>
    <head>
        <title>HTML bemutató</title>
    </head>
    <body>

        <h1>Ez a fejléc</h1>
        <p>Ez egy bekezdés.</p>

    </body>
</html>
                                </xmp>
                            </div><br>
                            <a href="https://www.w3schools.com/html/tryit.asp?filename=tryhtml_default" target="blank" class="try-it">Próbáld ki >></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- -------------------------------------------- -->
            <div class="container-css">
                <div class="flex2 content">
                    <div class="example2">
                        <span>CSS Példa:</span><br>
                        <div>
                            <xmp>
body {
    background-color: lightblue;
}

h1 {
    color: white;
    text-align: center;
}

p {
    font-family: verdana;
    font-size: 20px;
}
                            </xmp>
                        </div><br>
                        <a href="https://www.w3schools.com/css/tryit.asp?filename=trycss_default" target="blank" class="try-it">Próbáld ki >></a>
                    </div>
                </div>
                <div class="flex1 content">
                    <div>
                        <span class="title">CSS</span><br><br>
                        <span class="description">Nyelv a weboldalok kinéztéhez</span><br><br>
                        <a href="https://www.w3schools.com/css/default.asp" target="blank" class="buttons">CSS tanulása</a>
                        <a href="https://www.w3schools.com/cssref/default.asp" target="blank" class="buttons">CSS referencia</a>
                    </div>
                </div>
            </div>
            <!-- -------------------------------------------- -->
            <div class="dark">
                <div class="container">
                    <div class="darker flex1">
                        <div>
                            <span class="title">PHP</span><br><br>
                            <span class="description">A PHP egy szerver szkriptnyelv.</span><br><br>
                            <a href="https://www.w3schools.com/php/default.asp" target="blank" class="buttons">PHP tanulása</a>
                            <a href="https://www.w3schools.com/php/php_ref_overview.asp" target="blank" class="buttons">PHP referencia</a>
                        </div>
                    </div>

                    <div class="darker flex2">
                        <div class="example1">
                            <span>PHP Példa:</span><br>
                            <div>
                                <xmp>
<!DOCTYPE html>
<html>
    <body>
        <head>
            <title>PHP példa</title>
        </head>

        <?php echo "Az első PHP szkriptem!"; ?>

    </body>
</html>
                                </xmp>
                            </div><br>
                            <a href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_intro" target="blank" class="try-it">Próbáld ki >></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- -------------------------------------------- -->
            <div class="container-mysql">
                <div class="flex2 content">
                    <div class="example2">
                        <span>SQL Példa:</span><br>
                        <div>
                            <xmp>
SELECT * FROM Customers
WHERE Country='Mexico';




                            </xmp>
                        </div><br>
                        <a href="https://www.w3schools.com/sql/trysql.asp?filename=trysql_select_where" target="blank" class="try-it">Próbáld ki >></a>
                    </div>
                </div>

                <div class="flex1 content">
                    <div>
                        <span class="title">SQL</span><br><br>
                        <span class="description">Nyelv az adatbázisok hozzáféréséhez</span><br><br>
                        <a href="https://www.w3schools.com/sql/default.asp" target="blank" class="buttons">SQL tanulása</a>
                        <a href="https://www.w3schools.com/sql/sql_ref_keywords.asp" target="blank" class="buttons">SQL referencia</a>
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