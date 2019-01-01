<!DOCTYPE HTML>
<html>
	<head>
		<title>Timetable</title>
		<meta charset="utf-8" />
    	<link rel="shortcut icon" href="assets/favicon.png" type="image/png"/>

		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Main -->
			<section id="main" class="wrapper" style="padding-top:1.5em;padding-bottom: 0">
				<div class="inner">
					<header class="align-center">
						<h2>8th Sem Timetable</h2>
						<p>Select three Department Electives, one Open Elective, and one HSS Course</p>
					</header>

                    <!-- Intro -->
                    <form method="POST" action="helpers/register">
                    <div class="row">
                        <section class="6u 16u(medium)">
                            <h3 class="align-center">Departmental Electives</h3>
                            <div class="select-wrapper">
                                <select name="de-1" id="de-1">
                                    <option value="" selected disabled hidden>Please select one option</option>
                                    <?php        
                                        include("helpers/config.php");

                                        // Create connection
                                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                                        
                                        // Check connection
                                        if (!$conn) {
                                            die("Connection failed: " . mysqli_connect_error());
                                        }
                                        
                                        $sql = "SELECT * FROM course where type = 'de'";
                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysqli_fetch_assoc($result)) {
                                                echo "<option value=".$row["id"].">".$row["name"]."</option>";
                                            }
                                        } 
                                    ?>
                                </select><br>
                            </div>
                            
                            <div class="select-wrapper">
                                <select name="de-2" id="de-2">
                                    <option value="" selected disabled hidden>Please select one option</option>
                                    <?php
                                        $sql = "SELECT * FROM course where type = 'de'";
                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysqli_fetch_assoc($result)) {
                                                echo "<option value=".$row["id"].">".$row["name"]."</option>";
                                            }
                                        }
                                    ?>
                                </select><br>
                            </div>

                            <div class="select-wrapper">
                                <select name="de-3" id="de-3">
                                    <option value="" selected disabled hidden>Please select one option</option>
                                    <?php
                                        $sql = "SELECT * FROM course where type = 'de'";
                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysqli_fetch_assoc($result)) {
                                                echo "<option value=".$row["id"].">".$row["name"]."</option>";
                                            }
                                        }
                                    ?>
                                </select><br>
                            </div>

                        </section>
                        <section class="6u 6u(medium)">
                            <h3 class="align-center">Open Elective</h3>
                            <div class="select-wrapper">
                                <select name="oe" id="oe">
                                    <option value="" selected disabled hidden>Please select one option</option>
                                    <?php
                                        $sql = "SELECT * FROM course where type = 'oe'";
                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysqli_fetch_assoc($result)) {
                                                echo "<option value=".$row["id"].">".$row["name"]."</option>";
                                            }
                                        }
                                    ?>
                                </select><br>
                            </div>
                        </section>
                        <section class="6u 6u(medium)">
                            <h3 class="align-center">HSS Course</h3>
                            <div class="select-wrapper">
                                <select name="hss" id="hss">
                                    <option value="" selected disabled hidden>Please select one option</option>
                                    <?php
                                        $sql = "SELECT * FROM course where type = 'hss'";
                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysqli_fetch_assoc($result)) {
                                                echo "<option value=".$row["id"].">".$row["name"]."</option>";
                                            }
                                        }

                                        mysqli_close($conn);
                                    ?>
                                </select>
                            </div>
                        </section>
                    </div>
                    <hr>
                    <div class="row uniform">
                        <div class="3u 12u$(small)"></div>
                        <div class="4u 12u$(small)">
                            <input type="text" name="roll" id="roll" value="" placeholder="Roll Number" />
                        </div>
                        <div class="2u$ 12u$(small)">
                            <input type="submit" value="Submit" class="fit" />
                        </div>
                        <div class="3u 12u$(small)"></div>
                    </div>
                </form>
				</div>

			</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>