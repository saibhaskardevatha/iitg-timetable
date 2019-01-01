<?php
    $roll = $_POST["roll"];
    $de1 = $_POST["de-1"];
    $de2 = $_POST["de-2"];
    $de3 = $_POST["de-3"];
    $oe = $_POST["oe"];
    $hss = $_POST["hss"];

    include("config.php");
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "INSERT INTO roll_data (roll, de1, de2, de3, oe, hss)
    VALUES ($roll, '$de1', '$de2', '$de3', '$oe', '$hss')";

    if ($conn->query($sql) === TRUE) {
        echo '<script type="text/javascript">
            window.location = "../timetable?'.$roll.'"
        </script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>