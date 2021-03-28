<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "../db_config.php";

    $sql = "UPDATE `products`
            SET `name`='$_POST[name]', `price`='$_POST[price]', `description`='$_POST[description]', `pic`='$_POST[pic]', `link`='$_POST[link]'
            WHERE `id`='$_POST[id]'";

    ($result = mysqli_query($connection, $sql)) or
        die(mysqli_error($connection));

    if (mysqli_affected_rows($connection) > 0) {
        header("Location: admin.php?update=true&updated-id=" . $_POST["id"]);
    } else {
        header("Location: admin.php?update=false&updated-id=" . $_POST["id"]);
    }

    mysqli_close($connection);
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!empty($_GET["id"]) && isset($_GET["id"])) {
        header("Location: admin.php?id=" . $_GET["id"]);
    }
}
?>
