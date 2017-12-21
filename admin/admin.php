<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <script src = "js/bootsrap.js"></script>
    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
    <script src="js/jquery.js"></script>

    <style type="text/css">
      .center {
             float: none;
             margin-left: auto;
             margin-right: auto;
             vertical-align: center;
             margin-top: 7%;
            }
    </style>

</head>
<body>


      <div class="container">
         
            <div class="col-sm-3 center">
                    <h3>Admin Login</h3>
                <!-- body (form) -->
                <div class="center">
                    <form role="form" action="verifyLogin.php" method="POST" autocomplete="off">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="username">
                        </div>
                         <div class="form-group">
                            <input type="password" name="key" class="form-control" placeholder="password">
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary name="submit" btn-block">Login</button>
                        </div>

                    </form>
                </div>
                </div>

</div>                


</body>
</html>