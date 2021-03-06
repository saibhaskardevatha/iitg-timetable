<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="assets/favicon.png" type="image/png"/>

	<link rel="stylesheet" href="assets/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="assets/css/style.css"> <!-- Resource style -->

	<title>Timetable</title>
</head>
<body>
<?php
include("helpers/config.php");

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$url = $_SERVER['REQUEST_URI'];
$url = explode("?", $url);
$roll = $url[1];

if(empty($roll)){
	echo '<script type="text/javascript">
           window.location = "/"
    </script>';
}

$sql = "SELECT * from roll_data where roll = $roll";

$result = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($result);

if(empty($result)){
	echo '<script type="text/javascript">
           window.location = "/"
    </script>';
}

$de1 = $result['de1'];
$de2 = $result['de2'];
$de3 = $result['de3'];
$oe = $result['oe'];
$hss = $result['hss'];

?>
<header class="cd-intro">
	<h1>8th Sem Timetable</h1> 
	<h3>You can bookmark this link for future use</h3> 
</header>
<div class="cd-schedule loading">
	<div class="timeline">
		<ul>
			<li><span>08:00</span></li>
			<li><span>08:30</span></li>
			<li><span>09:00</span></li>
			<li><span>09:30</span></li>
			<li><span>10:00</span></li>
			<li><span>10:30</span></li>
			<li><span>11:00</span></li>
			<li><span>11:30</span></li>
			<li><span>12:00</span></li>
			<li><span>12:30</span></li>
			<li><span>13:00</span></li>
			<li><span>13:30</span></li>
			<li><span>14:00</span></li>
			<li><span>14:30</span></li>
			<li><span>15:00</span></li>
			<li><span>15:30</span></li>
			<li><span>16:00</span></li>
			<li><span>16:30</span></li>
			<li><span>17:00</span></li>
		</ul>
	</div> <!-- .timeline -->

	<div class="events">
		<ul>
			<li class="events-group">
				<div class="top-info"><span>Monday</span></div>

				<ul>
					<?php						
						$sql = "SELECT * FROM monday where id = '$de1' OR id = '$de2' OR id = '$de3' OR id = '$oe' OR id = '$hss' ORDER BY start_time";
						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) {
						    // output data of each row
						    while($row = mysqli_fetch_assoc($result)) {
						        echo "<li class=\"single-event\" data-start=".$row["start_time"]." data-end=".$row["end_time"]."  data-event=".$row["event_id"].">
						<a>
							<em class=\"event-name\">".$row["name"]."</em>
							<em class=\"event-date\">".$row["venue"]."</em>
						</a>
					</li>";
					
						    }
						} 
					?>
				</ul>
			</li>

			<li class="events-group">
				<div class="top-info"><span>Tuesday</span></div>

				<ul>
				<?php

						$sql = "SELECT * FROM tuesday where id = '$de1' OR id = '$de2' OR id = '$de3' OR id = '$oe' OR id = '$hss' ORDER BY start_time";
						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) {
						    // output data of each row
						    while($row = mysqli_fetch_assoc($result)) {
						        echo "<li class=\"single-event\" data-start=".$row["start_time"]." data-end=".$row["end_time"]."  data-event=".$row["event_id"].">
						<a>
							<em class=\"event-name\">".$row["name"]."</em>
							<em class=\"event-date\">".$row["venue"]."</em>
						</a>
					</li>";
						    }
						}
					?>
				</ul>
			</li>

			<li class="events-group">
				<div class="top-info"><span>Wednesday</span></div>

				<ul>
				<?php

						$sql = "SELECT * FROM wednesday where id = '$de1' OR id = '$de2' OR id = '$de3' OR id = '$oe' OR id = '$hss' ORDER BY start_time";
						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) {
						    // output data of each row
						    while($row = mysqli_fetch_assoc($result)) {
						        echo "<li class=\"single-event\" data-start=".$row["start_time"]." data-end=".$row["end_time"]."  data-event=".$row["event_id"].">
						<a>
							<em class=\"event-name\">".$row["name"]."</em>
							<em class=\"event-date\">".$row["venue"]."</em>
						</a>
					</li>";
						    }
						}
					?>
				</ul>
			</li>

			<li class="events-group">
				<div class="top-info"><span>Thursday</span></div>

				<ul>
				<?php

						$sql = "SELECT * FROM thursday where id = '$de1' OR id = '$de2' OR id = '$de3' OR id = '$oe' OR id = '$hss' ORDER BY start_time";
						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) {
						    // output data of each row
						    while($row = mysqli_fetch_assoc($result)) {
						        echo "<li class=\"single-event\" data-start=".$row["start_time"]." data-end=".$row["end_time"]."  data-event=".$row["event_id"].">
						<a>
							<em class=\"event-name\">".$row["name"]."</em>
							<em class=\"event-date\">".$row["venue"]."</em>
						</a>
					</li>";
						    }
						}
					?>
				</ul>
			</li>

			<li class="events-group">
				<div class="top-info"><span>Friday</span></div>

				<ul>
				<?php
						$sql = "SELECT * FROM friday where id = '$de1' OR id = '$de2' OR id = '$de3' OR id = '$oe' OR id = '$hss' ORDER BY start_time";
						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) {
						    // output data of each row
						    while($row = mysqli_fetch_assoc($result)) {
						        echo "<li class=\"single-event\" data-start=".$row["start_time"]." data-end=".$row["end_time"]."  data-event=".$row["event_id"].">
						<a>
							<em class=\"event-name\">".$row["name"]."</em>
							<em class=\"event-date\">".$row["venue"]."</em>
						</a>
					</li>";
						    }
						}
					?>
				</ul>
			</li>
		</ul>
	</div>
	<?php mysqli_close($conn); ?>
</div> <!-- .cd-schedule -->
<script src="assets/js/modernizr.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script>
	if( !window.jQuery ) document.write('<script src="assets/js/jquery-3.0.0.min.js"><\/script>');
</script>
<script src="assets/js/main1.js"></script> <!-- Resource jQuery -->
</body>
</html>