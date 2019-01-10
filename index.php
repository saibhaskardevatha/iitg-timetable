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
						<h4>If already registered, Search your Roll Number below!</h4>
					</header>
                    <form method="POST" action="helpers/search">
                    <div class="row uniform">
                        <div class="2u 12u$(small)"></div>
                        <div class="5u 12u$(small)">
                            <input type="text" name="roll" id="roll" value="" placeholder="Roll Number" />
                        </div>
                        <div class="3u$ 12u$(small)">
                            <input type="submit" value="Search" class="fit" />
                        </div>
                        <div class="2u 12u$(small)"></div>
                    </div></form>
                    <hr>

                    <!-- Intro -->
                    <header class="align-center">
                        <h4>If you want to edit or add your preferences, register below!</h4>
					</header>
                    <form method="POST" action="helpers/register">
                    <div class="row uniform">
                        <div class="6u 12u(medium)">
                            <h3 class="align-center">Departmental Electives</h3>
                            <div class="select-wrapper">
                                <select name="de-1" id="de-1" required>
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
                                <select name="de-2" id="de-2" required>
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
                                <select name="de-3" id="de-3" required>
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

                        </div>
                        <div class="6u 12u(medium)">
                            <h3 class="align-center">Open Elective</h3>
                            <div class="select-wrapper">
                                <select name="oe" id="oe" required>
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
                                </select>
                            </div>
                        </div>
                        <div class="6u 12u(medium)">
                            <h3 class="align-center">HSS Course</h3>
                            <div class="select-wrapper">
                                <select name="hss" id="hss" required>
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
                        </div>
                    </div>
                    
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
                <header class="align-center">
						<p>Designed and Developed by <a href="https://www.saibhaskardevatha.co.in">Sai Bhaskar Devatha</a></p>
					</header>
				</div>

			</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>