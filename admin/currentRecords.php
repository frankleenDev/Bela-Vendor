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

                                $trn_date = date("Y-m-d");
                                $sql = "SELECT * FROM punch WHERE TheDate='$trn_date' ";
                                $get = mysqli_query($con,$sql);

                                echo "<table class='table table-striped table-bordered'>
                                    <tr>
                                    <th>No.</th>
                                    <th>School Number</th>
                                    <th>School Name</th>
                                    <th>Email</th>
                                    <th>Mobile Number</th>
                                    <th>StatusQuo</th>
                                    <th>Date</th>
                                    <th>Last Refill</th>
                                    <th>Time</th>
                                    </tr>";

                                while ($record = mysqli_fetch_array($get)) {
                                    echo "<tr>";
                                    echo "<td>" . $record['Index'] . "</td>";
                                    echo "<td>" . $record['EmpNo'] . "</td>";
                                    echo "<td>" . $record['Name'] . "</td>";
                                    echo "<td>" . $record['Email'] . "</td>";
                                    echo "<td>" . $record['Mobile'] . "</td>";
                                    echo "<td>" . $record['StatusQuo'] . "</td>";
                                    echo "<td>" . $record['TheDate'] . "</td>";
                                    echo "<td>" . $record['TimeIn'] . "</td>";
                                    echo "<td>" . $record['TimeOut'] . "</td>";


                                    echo "</tr>";
                                }
                                echo "</table>";
                                    




                        ?>
                        </div>

</body>
</html>