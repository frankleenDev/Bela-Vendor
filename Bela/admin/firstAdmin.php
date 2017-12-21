<?php
            require('db.php');
            // If form submitted, insert values into the database.
            

                $name = "Admin";
                $username = "admin";
                $mobile = "0715";
                $email = "mail@mail.com";
                $key = "king";

              

                
                $query = "INSERT into `admin` (Name, Username, Email, MobileNo, Password) VALUES ('$name', '$username', '$email', '$mobile', '".md5($key)."')";
                $result = mysqli_query($con,$query);

                echo "The admin has been added";
                echo "<br>";
                echo "<br>";
                echo "Username is: admin ";
                echo "<br>";
                echo "Password is: king ";


                
        ?>