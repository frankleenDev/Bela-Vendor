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

                                $sql = "SELECT * FROM punch";
                                $get = mysqli_query($con,$sql);
                                echo"<div class='table-responsive'>";
                                echo "<table class='table table-striped table-bordered table-responsive'>
                                	<tr>
                                    <th>No.</th>
                                	<th>School Number</th>
                                	<th>School Name</th>
                                	<th>Email</th>
                                	<th>Mobile Number</th>
                                    <th>StatusQuo</th>
                                    <th>Date</th>
                                    <th>Last Fill</th>
                                	<th>Rate Weekly</th>
                                	</tr>";

                                

                                while ($record = mysqli_fetch_array($get)) {
                                	echo "<tr>";
                                    echo "<td>" . $record['Index'] . "</td>";
                                	echo "<td>" . $record['MachineNo'] . "</td>";
                                	echo "<td>" . $record['Name'] . "</td>";
                                	echo "<td>" . $record['Email'] . "</td>";
                                	echo "<td>" . $record['Mobile'] . "</td>";
                                    echo "<td>" . $record['StatusQuo'] . "</td>";
                                	echo "<td>" . $record['TheDate'] . "</td>";
                                    echo "<td>" . $record['TimeIn'] . "</td>";
                                    echo "<td>" . $record['TimeOut'] . "</td>";


                                	echo "</tr>";
                                }
                                echo "</table></div>";
                                	




                        ?>
                        </div>

</body>
</html>