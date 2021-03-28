<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (empty($_GET["search"]) || !isset($_GET["search"])) {
        header("Location: webshop.php");
    } else {
        header("Location: webshop.php?search=" . $_GET["search"]);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["search-admin"]) || !isset($_POST["search-admin"])) {
        header("Location: admin/admin.php");
    } else {
        header(
            "Location: admin/admin.php?search-admin=" . $_POST["search-admin"]
        );
    }
}
?>
