<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="pinvalidate.js" type="text/javascript"></script>
</head>
<body>

        

        <div class="modal fade" id="popUpWindow">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Register School</h3>
                </div>

                <!-- body (form) -->
                <div class="modal-body">
                    <form role="form" action="#" method="POST">
                    <div class="form-group">
                            <input type="number" class="form-control" name="No" placeholder="School No" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="School name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="mobile" placeholder="Mobile" required>
                        </div>
                        <div class="form-group">
                                    <div class="form-group">
                                        <input type="password" placeholder="PIN" name="pin" id="pin" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <input type="password" placeholder="confirm PIN" name="confirm_pin" id="confirm_pin" class="form-control" required onkeyup="checkPin(); return false;">
                                        <span class="confirmMessage" id="confirmMessage"></span>
                                </div>
                                </div>
                         <div class="modal-footer">
                    <button class="btn btn-primary value="submit" name="submit" btn-block">Submit</button>
                        </div>
                    </form>
                </div>

                <!-- button -->
               

            </div>
        </div>
    </div>

         <div class="modal fade" id="popUpWindow2">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Register Machine</h3>
                </div>

                <!-- body (form) -->
                <div class="modal-body">
                    <form role="form" action="#" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="trainee" placeholder="Full name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Machine Number">
                        </div>
                         <div class="form-group">
                                    <div class="form-group">
                                        <input type="password" placeholder="PIN" name="pin" id="pin" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <input type="password" placeholder="confirm PIN" name="confirm_pin" id="confirm_pin" class="form-control" required onkeyup="checkPin(); return false;">
                                        <span class="confirmMessage" id="confirmMessage"></span>
                                </div>
                                <div class="modal-footer">
                    <button class="btn btn-primary btn-block" name="submit" >Submit</button>
                </div>
                    </form>
                </div>

                <!-- button -->
                

            </div>
        </div>
    </div>

    <div class="modal fade" id="popUpWindow3">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Register Visitor</h3>
                </div>

                <!-- body (form) -->
                <div class="modal-body">
                    <form role="form" action="#" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="visitor" placeholder="Full name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="visitor_email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="visitor_phone" placeholder="Phone">
                        </div>
                        <div class="modal-footer">
                    <button class="btn btn-primary name="submit" btn-block">Submit</button>
                </div>
                    </form>
                </div>

                <!-- button -->
                

            </div>
        </div>
    </div>

    <div class="modal fade" id="popUpWindow4">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Register Administrator</h3>
                </div>

                <!-- body (form) -->
                <div class="modal-body">
                    <form role="form" action="#" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="admin" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="mobile" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="key" placeholder="password">
                        </div>
                        <div class="modal-footer">
                    <button class="btn btn-primary name="submit" btn-block">Submit</button>
                </div>
                    </form>
                </div>

                <!-- button -->
                

            </div>
        </div>
    </div>

</body>

        <?php
            require('db.php');
            // If form submitted, insert values into the database.
            if (isset($_POST['No'])&&(!empty($_POST['No']))){

                $number = ($_POST['No']);
                $name = ($_POST['name']);
                $mobile = ($_POST['mobile']);
                $email = ($_POST['email']);
                $pin = ($_POST['pin']);
                $status = "Employee";

                $check=mysqli_query($con,"select * from schoolTable where SchoolNo='$number' and Email='$email'");
                $checkrows=mysqli_num_rows($check);

               if($checkrows>0) {
                  //echo "customer exists";
               } else {  
                //$password = mysqli_real_escape_string($con,$password);

                $trn_date = date("Y-m-d H:i:s");
                $query = "INSERT into `schoolTable` (SchoolNo, Name, Email, MobileNo, PIN, Status) VALUES ('$number', '$name', '$email', '$mobile', '".md5($pin)."', '$status')";
                $result = mysqli_query($con,$query);
                unset($_POST['No']);

                }}

                
        ?>


         <?php
            require('db.php');
            // If form submitted, insert values into the database.
            if (isset($_POST['trainee'])&&(!empty($_POST['trainee']))){

                $number = "00";
                $name = ($_POST['trainee']);
                $mobile = ($_POST['mobile']);
                $email = ($_POST['email']);
                $pin = ($_POST['pin']);
                $status = "Trainee";

                 $check=mysqli_query($con,"select * from vendorMachine where MachineNo='$number' and Email='$email'");
                $checkrows=mysqli_num_rows($check);

               if($checkrows>0) {
                  //echo "customer exists";
               } else {  
                //$password = mysqli_real_escape_string($con,$password);

                $trn_date = date("Y-m-d H:i:s");
                $query = "INSERT into `vendorMachine` (MachineNo, Name, Email, MobileNo, PIN, Status) VALUES ('$number', '$name', '$email', '$mobile', '".md5($pin)."', '$status')";
                $result = mysqli_query($con,$query);
                }
            }
                
        ?>

        <?php
            require('db.php');
            // If form submitted, insert values into the database.
            if (isset($_POST['visitor'])&&(!empty($_POST['visitor']))){

                $name = ($_POST['visitor']);
                $mobile = ($_POST['visitor_phone']);
                $email = ($_POST['visitor_email']);

                 $check=mysqli_query($con,"select * from visitors where Name='$name' and Email='$email'");
                $checkrows=mysqli_num_rows($check);

               if($checkrows>0) {
                  //echo "customer exists";
               } else {  
                //$password = mysqli_real_escape_string($con,$password);

                $trn_date = date("Y-m-d H:i:s");
                $query = "INSERT into `visitors` (Name, Email, Phone) VALUES ('$name', '$email', '$mobile')";
                $result = mysqli_query($con,$query);
                }
            }
                
        ?>

        <?php
            require('db.php');
            // If form submitted, insert values into the database.
            if (isset($_POST['admin'])&&(!empty($_POST['admin']))){

                $name = ($_POST['admin']);
                $username = ($_POST['username']);
                $mobile = ($_POST['mobile']);
                $email = ($_POST['email']);
                $key = ($_POST['key']);

                $check=mysqli_query($con,"select * from admin where Name='$name' and Username='$username'");
                $checkrows=mysqli_num_rows($check);

               if($checkrows>0) {
                  //echo "customer exists";
               } else {  
                //$password = mysqli_real_escape_string($con,$password);

                
                $query = "INSERT into `admin` (Name, Username, Email, MobileNo, Password) VALUES ('$name', '$username', '$email', '$mobile', '".md5($key)."')";
                $result = mysqli_query($con,$query);
                unset($_POST['No']);

                }}

                
        ?>

</html>