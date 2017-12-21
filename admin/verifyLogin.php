<?php
    require('db.php');
    session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        
        $username = stripslashes($_REQUEST['username']); // removes backslashes
        $username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
        $password = stripslashes($_REQUEST['key']);
        $password = mysqli_real_escape_string($con,$password);
        
    //Checking is user existing in the database or not
        $query = "SELECT * FROM `admin` WHERE Username='$username' and Password='".md5($password)."'";
        $result = mysqli_query($con,$query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if($rows==1){
            //$_SESSION['username'] = $username;
            header("Location: home.php"); // Redirect user to index.php
            }else{
                echo "<script>
                           alert('username or password incorrect'); 
                           window.history.go(-1);
                        </script>";
                }
  
         
    }
?>