<!DOCTYPE html>
<html>
<head>
<style>
@import url('https://fonts.googleapis.com/css?family=Acme|Merienda+One|Oswald');

.sidenav {
    height: 100vh;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #b43db8;
    overflow-x: hidden;
    transition: 0.5s;
    opacity: .9;
    z-index: 2000;
}
#menu-items{
  margin-top: 5%;
}
#menu-items li{
  margin-top: 2%;
}
#menu-items ul li a{
  color: #898e95;
  font-size: 170%;
  font-style: bold;
  font-family: 'Merienda One', cursive;
}
#menu-items ul li a:hover{
  text-decoration: none;
  color: #ffffff;
}
#menu-items ul li i{
  font-size: 160%;
  color: #ffffff;
  padding:5%;
}
.sidenav li {
    list-style-type: none;
}

.sidenav a:hover {
    color: #fff;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    color: white;
    right: 25px;
    font-size: 56px;
    margin-left: 50px;
}


@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

  <div class="row sidenav" id="mySidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div id="menu-items" class="col-md-6 col-md-offset-2">
                    <ul class="">
                        <li><i class="fa fa-home" aria-hidden="true"></i>&ensp;&ensp;<a href="index.php" onclick="closeNav()">Home</a></li>
                        <li><i class="fa fa-puzzle-piece" aria-hidden="true"></i>&ensp;&ensp;<a style="transition: 1s;" href="#Mission" onclick="closeNav()">Mission</a></li>
                        <li><i class="fa fa-info-circle" aria-hidden="true"></i>&ensp;&ensp;<a href="#aboutus" onclick="closeNav()">About Us</a></li>
                        <li><i class="fa fa-users" aria-hidden="true"></i>&ensp;&ensp;<a href="#team" onclick="closeNav()">Team</a></li>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>&ensp;&ensp;<a href="#coverage" onclick="closeNav()">Coverage</a></li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>&ensp;&ensp;<a href="#contact" onclick="closeNav()">Get Intouch</a></li>

                    </ul>
                </div>
  </div>


<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "75%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
     
</body>
</html> 