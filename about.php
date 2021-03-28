<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Rólam - Szemináriumi munka</title>
        <meta charset="UTF-8">
        <meta name="description" content="Szeminariumi-IT">
        <meta name="keywords" content="HTML, CSS, PHP, MYSQL, SQL">
        <meta name="author" content="Dániel Fábián">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="noarchive">
        <link rel="stylesheet" type="text/css" href="global-css.css">
        <link rel="stylesheet" type="text/css" href="about.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="js.js"></script>
        <link rel="shortcut icon" type="image/jpg" href="https://img.icons8.com/color/48/000000/code.png">
    </head>
    <body>
        <main id="main">
            <header>
                <span class="this-site">Ehhez a projekthez ezeket használtam</span><br><br>
                HTML, CSS, PHP + MYSQL
            </header>
            
            <div class="sticky">
                <div class="topnav" id="myTopnav">
                    <a href="index.php"><i class="fa fa-fw fa-home"></i>Kezdőlap</a>
                    <div class="dropdown">
                        <a href="webshop.php" class="dropbtn"><i class="fa fa-shopping-cart"></i>WebShop
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <div class="dropdown-content">
                            <a href="admin/admin.php"><i class="fa fa-lock"></i>Admin</a>
                        </div>
                    </div> 
                    <a href="#main" class="active"><i class="fa fa-address-card"></i>Rólam</a>
                    <a href="javascript:myFunction();" class="icon">
                        <i style="margin: 0;" class="fa fa-bars"></i>
                    </a>
                </div>
            </div>

            <div style="background: linear-gradient(90deg, rgba(242,242,242,1) 0%, rgba(178,179,86,1) 20%, rgba(178,179,86,1) 50%, rgba(178,179,86,1) 80%, rgba(242,242,242,1) 100%); height: 10px;"></div>
            <div class="container">
                <div class="img">
                    <img src="https://scontent.fbeg5-1.fna.fbcdn.net/v/t1.0-9/136331954_4900705316669058_8029506045708686213_o.jpg?_nc_cat=105&ccb=2&_nc_sid=09cbfe&_nc_ohc=3AuTnw7gJGwAX__D6MD&_nc_ht=scontent.fbeg5-1.fna&oh=63384cde47dc3e3f6cbf2bfdce79543b&oe=602DDA87" alt="me.jpg" width="100%">
                </div>
                <div class="info">
                    <div>
                        <span class="title">Magamról pár szó</span><br><br>
                        <span class="description">
                            Fábián Dánielnek hívnak, 20 éves vagyok. A középiskolát Szabadkán az Ivan Saric Műszaki középiskolában fejeztem Információs technológiá elektrotechnikusa szakon. 
                            Jelenleg a szabadkai VTS főiskolán vagyok hallgató. Szintén informatika szakon tanulok tovább. Második évfolyamot folytatom a háromból. 
                            A főiskola után szeretnék munkába állni a szakmámban itt Szabadkán, pár évig. Utána Magyarország a cél.
                        </span>
                    </div>
                </div>
            </div>

            <div class="dark">
                <div class="container">
                    <div class="info">
                        <div>
                            <span class="title">Skilljeim</span><br><br>
                            <span class="description">
                                <ul type="circle" class="skills">
                                    <li>C#</li>
                                    <i>- Középszint</i>
                                    <br><br>
                                    <li>C/C++</li>
                                    <i>- Alapszint</i>
                                    <br><br>
                                    <li>PHP</li>
                                    <i>- Alapszint</i>
                                    <br><br>
                                    <li>JavaScript</li>
                                    <i>- Középszint</i>
                                    <br><br>
                                    <li>React JS</li>
                                    <i>- Középszint</i>
                                </ul>
                            </span>
                        </div>
                    </div>
                    <div class="img">
                        <img src="https://images.pexels.com/photos/546819/pexels-photo-546819.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="skills.jpg" width="100%">
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="info">
                    <div>
                        <span class="title">Kedvenc linkjeim</span><br><br>
                        <span class="description">
                            <table>
                                <tr>
                                    <td class="link">
                                        <a href="https://www.youtube.com/" target="blank">YouTube</a>
                                    </td>
                                    <td class="logo">
                                        <a href="https://www.youtube.com/" target="blank">
                                            <img src="https://i.pinimg.com/originals/de/1c/91/de1c91788be0d791135736995109272a.png" alt="youtube logo" width="100%">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="link">
                                        <a href="https://www.instagram.com/" target="blank">Instagram</a>
                                    </td>
                                    <td class="logo">
                                        <a href="https://www.instagram.com/" target="blank">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/1200px-Instagram_logo_2016.svg.png" alt="instagram logo" width="100%">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="link">
                                        <a href="https://www.facebook.com/" target="blank">Facebook</a>
                                    </td>
                                    <td class="logo">
                                        <a href="https://www.facebook.com/" target="blank">
                                            <img src="https://i.pinimg.com/originals/30/99/af/3099aff4115ee20f43e3cdad04f59c48.png" alt="facebook logo" width="100%">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="link">
                                        <a href="https://stackoverflow.com/" target="blank">Stack Overflow</a>
                                    </td>
                                    <td class="logo">
                                        <a href="https://stackoverflow.com/" target="blank">
                                            <img src="https://stackoverflow.design/assets/img/logos/so/logo-stackoverflow.png" alt="stack overflow logo" width="100%">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="link">
                                        <a href="https://github.com/" target="blank">GitHub</a>
                                    </td>
                                    <td class="logo">
                                        <a href="https://github.com/" target="blank">
                                            <img src="https://image.flaticon.com/icons/png/512/25/25231.png" alt="github logo" width="100%">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="link">
                                        <a href="https://www.fiverr.com/" target="blank">Fiverr</a>
                                    </td>
                                    <td class="logo">
                                        <a href="https://www.fiverr.com/" target="blank">
                                            <img src="https://assetsv2.fiverrcdn.com/assets/v2_globals/fiverr_logo/fiverr-ligature-logo-f1036f121ed1b599ea498d70d98844b4.png" alt="fiverr logo" width="100%">
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </span>
                    </div>
                </div>
            </div>

            <div class="dark">
                <div class="container">
                    <div class="info">
                        <div>
                            <span class="title">Elérhetőségek</span><br><br>
                            <span class="description">
                                <ul type="none" class="contact">
                                    <li><a href="https://www.facebook.com/daniel.fabian.334" target="blank"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                                    <li><a href="https://www.instagram.com/fabian_daniel00/" target="blank"><i class="fa fa-instagram"></i> Instagram</a></li>
                                    <li><a href="https://github.com/FabianDaniel00" target="blank"><i class="fa fa-github"></i> GitHub</a></li>
                                    <li>
                                        <div class="tooltip">
                                            <a href="javascript:copyEmail();" onmouseout="outFunc()" style="background-color: #f2f2f2;">
                                                <span class="tooltiptext" id="myTooltip">Vágólapra másolás</span>
                                                <i class="fa fa-envelope"></i> Gmail
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                <input type="text" value="danielfabian090@gmail.com" id="email" class="hide">
                            </span>
                        </div>
                    </div>
                    <div class="img">
                        <img src="https://www.iconarchive.com/download/i86044/graphicloads/100-flat-2/contacts.ico" alt="contact.jpg" width="100%" style="box-shadow: none">
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