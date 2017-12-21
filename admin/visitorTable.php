<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src = "js/bootsrap.js"></script>
    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
    <script src="js/jquery.js"></script>

</head>
<body>

<div class="textword_about" data-link="first">

 <?php
                                include 'db.php';

                                $sql = "SELECT * FROM visitors";
                                $get = mysqli_query($con,$sql);

                                echo "<table class='table table-striped table-bordered'>
                                	<tr>
                                	<th>No.</th>
                                	<th>Visitors Name</th>
                                	<th>Email</th>
                                	<th>Mobile Number</th>
                                	<th>Visiting</th>
                                	</tr>";

                                while ($record = mysqli_fetch_array($get)) {
                                	echo "<tr>";
                                	echo "<td>" . $record['Index'] . "</td>";
                                	echo "<td>" . $record['Name'] . "</td>";
                                	echo "<td>" . $record['Email'] . "</td>";
                                	echo "<td>" . $record['Phone'] . "</td>";
                                	echo "<td>" . $record['Visiting'] . "</td>";
                                	echo "</tr>";
                                }
                                echo "</table>";
                                	




                        ?>
                        </div>

</body>
</html>