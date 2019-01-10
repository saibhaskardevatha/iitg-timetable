<?php
    $roll = $_POST["roll"];

    echo '<script type="text/javascript">
        window.location = "../timetable?'.$roll.'"
    </script>';

    $conn->close();
?>