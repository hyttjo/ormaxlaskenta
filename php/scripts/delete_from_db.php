<?php
    include "mysql.php";

    $table = $_POST["table"];
    $id = $_POST["id"];

    $sql = "DELETE FROM $table WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='pure-button button-success wrap'>ID: $id poistettu taulusta $table onnistuneesti</div>";
    } else {
        echo "<div class='pure-button button-error wrap'>Virhe: " . $conn->error . "</div>";
    }

    $conn->close();
?>