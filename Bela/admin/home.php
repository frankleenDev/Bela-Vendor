<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="sidebar.css">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src = "js/bootsrap.js"></script>
    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
    <script src="js/jquery.js"></script>


</head>
<body onload="startsideBar()">



    <div id="wrapper">
        
        <nav class="navbar navbar-inverse">
        <div class="container-fluid">

            <!-- Logo -->
            <div class="navbar-header">
                <a href="#" class="navbar-brand"></a>
            </div>

            <!-- Menu Items -->
            <div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>

                    <!-- drop down menu -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">User<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a data-toggle="modal" data-target="#popUpWindow">Add School</a></li>
                            <li><a data-toggle="modal" data-target="#popUpWindow2">Add Machine</a></li>
                        </ul>
                    </li>
                </ul>

                <!--right align -->
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.php">Log Out</a></li>
                </ul>


            </div>

        </div>
    </nav>

 
        <!-- Sidebar -->
        <div id="sidebar-wrapper">

            <h2 class=""><font color="white"><strong><span id="clock"></span></strong></font></h2>

                <script type="text/javascript">
                   var clockElement = document.getElementById( "clock" );

                      function updateClock ( clock ) {
                        clock.innerHTML = new Date().toLocaleTimeString();
                      }

                      setInterval(function () {
                          updateClock( clockElement );
                      }, 1000);
                </script>

            <ul class="sidebar-nav">
                <li><a href="currentRecords.php" target="getTable">Today</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>

        <!-- Page content -->
        <div id="page-content-wrapper">
        
            <div class="container-fluid">
            <a href="#" id="menu-toggle"><span class="fa fa-bars" style="color: black; font-size: 160%;"></span></a>
                <button class="btn btn-info" ><a id="butt" href="empTable.php" target="getTable"> Schools </a> </button>
                <button class="btn btn-info" ><a id="butt" href="puchinTable.php" target="getTable"> Machines </a></button>
                <br>
            </div>
            <div class="container-fluid">
                <div class="row">

                

                    <div id="show-table" class="col-lg-12" style="height: 600px">
                    <iframe src="empTable.php" name="getTable" frameborder="0" style="overflow:hidden; height:100%; width:100%; margin-top: 1%" height="100%" width="100%"></iframe>
                        
                    </iframe>
                        

                    </div>
                </div>
            </div>
        </div>

        <?php include 'Add.php'; ?>

    </div>

    <!-- Menu toggle script -->
    <script>
        $("#menu-toggle").click( function (e){
            e.preventDefault();
            $("#wrapper").toggleClass("menuDisplayed");
        });
    </script>



</body>
</html>
