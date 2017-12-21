
<?php

        require('db.php');
            // If form submitted, insert values into the database.
            if (isset($_POST['pin'])){

                $pin = ($_POST['pin']);

                $price = mysqli_query($con, "SELECT EmpNo, Name, Email, MobileNo, Currently FROM employees WHERE PIN = '".md5($pin)."'");
                $row = mysqli_fetch_array($price);

                $checkrows=mysqli_num_rows($price);


                  $time = "0";

                  $empno = $row['EmpNo'];
                  $name = $row['Name'];
                  $email = $row['Email'];
                  $mobile = $row['MobileNo'];
                  $current = $row['Currently'];

                  $trn_time = date("H:i:s");
                  $trn_date = date("Y-m-d");

                  if ($name==null) {

                     echo "<script>
                           alert( ' Incorrect Pin '); 
                           window.history.go(-1);
                        </script>";
                    
                  }


                  if ($current=="Out") {

                    $price = mysqli_query($con, "SELECT TheDate FROM punch WHERE Name = '$name' AND (relevance <= (SELECT MAX(TheDate) FROM punch)");
                    $row = mysqli_fetch_array($price);

                    $lateDate = $row['TheDate'];

                    if ($lateDate==$trn_date) {
                      
                      echo "<script>
                           alert( ' $name you have already Punched Out for the Day. '); 
                           window.history.go(-1);
                        </script>";
                    }
                    else{

                    $update= "UPDATE employees SET Currently = 'In' WHERE EmpNo = '$empno' AND Name = '$name'";
                     if(mysqli_query($con, $update)){
                      //echo "In updated";
                    }
                     }


                  
                $query = "INSERT into `punch` (TimeIn, TheDate, TimeOut, EmpNo, Name, Email, Mobile, StatusQuo) VALUES ('$trn_time', '$trn_date', '$time', '$empno', '$name', '$email', '$mobile', 'Punched In')";
                
                $result = mysqli_query($con,$query);


                echo "<script>
                           alert( ' $name you have successfully Punched in. '); 
                           window.history.go(-1);
                        </script>";


                  }
                  else if($current=="In"){

                    $update= "UPDATE employees SET Currently = 'Out' WHERE EmpNo = '$empno' AND Name = '$name'";
                     if(mysqli_query($con, $update)){
                      //echo "Out updated";
                     }
                  
                  $update2= "UPDATE punch SET StatusQuo = 'Punched Out', TimeOut = '$trn_time' WHERE TheDate = '$trn_date' AND Name = '$name'";
                     if(mysqli_query($con, $update2)){
                      //echo "Out updated2";
                     }



                

                echo "<script>
                           alert( ' $name you have successfully Punched Out. '); 
                           window.history.go(-1);
                        </script>";

                  }
                  }


                  
?>

