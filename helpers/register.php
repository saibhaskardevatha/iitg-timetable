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
    $sql1 = "SELECT roll from roll_data WHERE roll = $roll";
    $result = mysqli_query($conn, $sql1);
    $result = mysqli_fetch_assoc($result);
    if(!empty($result)){
        $sql3 = "DELETE FROM roll_data WHERE roll = $roll";
        $conn->query($sql3);
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