<?php
    $type = $_POST["type"];
    $id = $_POST["id"];
    $name = $_POST["name"];
    $venue = $_POST["venue"];
    $day1 = $_POST["day1"];
    $day2 = $_POST["day2"];
    $day3 = $_POST["day3"];
    $time1_old = $_POST["time1"];
    $time1_explode = explode('|', $time1_old);
    $time2_old = $_POST["time2"];
    $time2_explode = explode('|', $time2_old);
    $time3_old = $_POST["time3"];
    $time3_explode = explode('|', $time3_old);
    $time1 = $time1_explode[0];
    $time2 = $time2_explode[0];
    $time3 = $time3_explode[0];
    $time4 = $time1_explode[1];
    $time5 = $time2_explode[1];
    $time6 = $time3_explode[1];

    if($type == 'de'){
        $event_id = 'event-1';
    }else if($type == 'oe'){
        $event_id = 'event-2';
    }else if($type == 'hss'){
        $event_id = 'event-4';
    }

    include("config.php");
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql1 = "INSERT INTO course (type, id, name)
    VALUES ('$type', '$id', '$name')";

    $sql2 = "INSERT INTO {$day1} (id, name, start_time, end_time, venue, event_id)
    VALUES ('$id', '$name', '$time1', '$time4', '$venue', '$event_id')";

    $sql3 = "INSERT INTO {$day2} (id, name, start_time, end_time, venue, event_id)
    VALUES ('$id', '$name', '$time2', '$time5', '$venue', '$event_id')";

    $sql4 = "INSERT INTO {$day3} (id, name, start_time, end_time, venue, event_id)
    VALUES ('$id', '$name', '$time3', '$time6', '$venue', '$event_id')";

    if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE && $conn->query($sql3) === TRUE && $conn->query($sql4) === TRUE) {
        echo '<script type="text/javascript">
            window.location = "../add"
        </script>';
    } else {
        echo "Error: " . $sql1 . "<br>" . $conn->error;
    }

    $conn->close();
?>