<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "../db_config.php";

    $sql = "INSERT INTO `products`(`name`, `price`, `description`, `pic`, `link`)
            VALUES ('$_POST[name]', '$_POST[price]', '$_POST[description]', '$_POST[pic]', '$_POST[link]')";

    ($result = mysqli_query($connection, $sql)) or
        die(mysqli_error($connection));

    if (mysqli_affected_rows($connection) > 0) {
        header("Location: admin.php?insert=true");
    } else {
        header("Location: admin.php?insert=false");
    }

    mysqli_close($connection);
}
?>
