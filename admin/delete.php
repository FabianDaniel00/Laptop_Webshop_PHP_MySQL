<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "../db_config.php";

    $sql = "DELETE FROM `products` WHERE `id`='$_POST[id]'";

    ($result = mysqli_query($connection, $sql)) or
        die(mysqli_error($connection));

    if (mysqli_affected_rows($connection) > 0) {
        header("Location: admin.php?delete=true&deleted-id=" . $_POST["id"]);
    } else {
        header("Location: admin.php?delete=false&deleted-id=" . $_POST["id"]);
    }

    mysqli_close($connection);
}
?>
