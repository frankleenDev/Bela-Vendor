<!DOCTYPE html>
<html lang="en">
<head>
    <title>BeaLady</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="demo.css" rel="stylesheet">
    <script type="text/javascript" src="js/cycle2.js"></script>

    <script src="http://maps.google.com/maps/api/js?key=AIzaSyAIPgjrr6EtysU8E8VAlqqOZedrMINdMHk&callback=initMap" type="text/javascript"></script>



    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src = "js/bootsrap.js"></script>
    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
    <script src="js/jquery.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Bangers');
    </style>

</head>
<body onload="startsideBar()">



    <div id="wrapper">
 
        <?php include 'slider.php'; ?>

        <!-- Page content -->
        <div id="page-content-wrapper">
        
            <div class="row">
                <div id="" class="col-md-1" style="z-index: 1900;position: fixed;">
                    <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img src="images/menu.png"></span>                    
                </div>

                <div class="col-md-1" style="position: absolute;right: 0px;z-index: 1000">
                                <a href="index.php"><img src="images/logo.png" width="100px"></a>
                             </div>

                <div id="slideshow" class="cycle-slideshow img-responsive"
                            data-cycle-fx = "scrollHorz"
                            data-cycle-speed = "900"
                            data-cycle-timeout = "6500"
                            data-cycle-pager = "#pager"
                            data-cycle-pager-template = "<a href = '#'><img src='{{scr}}' height=50 width=48/></a>"
                            data-cycle-next = "#next"
                            data-cycle-prev = "#prev"
                            data-cycle-manual-speed = "600"
                            data-cycle-manual-fx = "scrollHorz"
                            data-cycle-pager-fx = "fade" >
                                <img src="images/bealady.png" alt="">
                                <img src="images/dimple.png" alt="">
                                <img src="images/flag.png" alt="">
                                <img src="images/out.png" alt="">
                                <img src="images/tree.png" alt="">
                                <img src="images/jangwani.png" alt="">
                            <div class="col-md-12" id="title">
                                <center><h1 data-scroll="toggle(.fromLeftIn, .fromLeftOut)">Be a Lady</h1></center>
                                <center><h2 data-scroll="toggle(.fromRightIn, .fromRightOut)" class="txtShadow googlefont">Introducing the all new 
                                   <a href="#order"><button class="btn" ><span>Bela Vendor</span></button></a></h2></center>
                            </div>
                            </div>
                            
                <!--<div class="welcomediv row">
                    <div class="col-md-1" style="position: absolute;right: 0px;">
                        <a href="index.php"><img src="images/logo.png" width="100%"></a>
                    </div>
                    <div class="followup row">
                        <div class="col-md-6 col-md-offset-3 topmarg30 wyttxt">
                            <div class="col-md-12">
                                <center><h1 data-scroll="toggle(.fromLeftIn, .fromLeftOut)">Be a Lady</h1></center>
                            </div>
                            <div class="col-md-12">
                                <center><h2 data-scroll="toggle(.fromRightIn, .fromRightOut)" class="txtShadow googlefont">Introducing the all new 
                                    <span class="bella">
                                    <td>
                                        <a href="#bellavendor"> Bela Vendor</a>
                                    </td></span></h2></center>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>

        </div>
        <!--The motos
        <div class="row">
            <div class="row catalogue topmargin10">
                <div class="col-md-2" style="margin-left: 2%;">
                    <img src="images/xulintro.png" width="100%">
                </div>
                <div class="col-md-2">
                    <img src="images/changombename.png" onmouseover="this.src='images/changombe.jpg'" onmouseout="this.src='images/changombename.png'" style="transition: transform .2s ease-in-out">
                </div>
                <div class="col-md-2">
                    <img src="images/oysterbayname.png" onmouseover="this.src='images/oysterbay.jpg'" onmouseout="this.src='images/oysterbayname.png'">
                </div>
                <div class="col-md-2">
                    <img src="images/kibasilaname.png" onmouseover="this.src='images/kibasila.jpg'" onmouseout="this.src='images/kibasilaname.png'">
                </div>
                <div class="col-md-2">
                    <img src="images/jangwaniname.png" onmouseover="this.src='images/jangwani.jpg'" onmouseout="this.src='images/jangwaniname.png'">
                </div>
            </div>
        </div>-->


        <!--Our Mission-->
        <div id="Mission" class="col-md-12" style="margin-top: 5%;margin-bottom: 5%">
            <div data-scroll="toggle(.fromBottomIn, .fromBottomOut)" class="col-md-4 col-md-offset-4" >
                <center><h1 style="margin-bottom: 15vh">Our Mission<hr></h1></center>
            </div>
            <div data-scroll="toggle(.fromBottomIn, .fromBottomOut)" class="col-md-10 col-md-offset-1" style="margin-bottom:10vh;font-size: 160%">
                <span>
                    To help young ladies understand MHM (Menstrual Hygiene Management), While providing a safe, convenient, reliable and hygienic solution through Bela Vendor.
                </span>
            </div>

            <div data-scroll="toggle(.fromLeftIn, .fromLeftOut)" class="col-md-5 col-md-offset-1">
                <img src="images/changombe.png" class="shadow" width="100%">
            </div>
            <div data-scroll="toggle(.fromRightIn, .fromRightOut)" class="col-md-5 col-md-offset-1" style="margin-top: 5%">
                <center><h2 class="googlefont">Changombe High School.</h2></center><br>
                <center><span style="font-size: 120%">
                   
                </span></center>
            </div>
        </div>

        <div class="col-md-12" style="margin-top: 5%;margin-bottom: 5%">
        <div data-scroll="toggle(.fromBottomIn, .fromBottomOut)" class="col-md-5" style="margin-top: 5%">
                <center><h2>Oysterbay High School.</h2></center><br>
                <center><span style="font-size: 120%">
                    </span></center>
            </div>
            <div data-scroll="toggle(.fromBottomIn, .fromBottomOut)" class="col-md-5 col-md-offset-1">
                <img src="images/Oysterbay.png" class="shadow" width="100%">
            </div>
        </div>

        <div class="col-md-12" style="margin-top: 5%;margin-bottom: 5%">
            <div data-scroll="toggle(.fromBottomIn, .fromBottomOut)" class="col-md-5 col-md-offset-1">
                <img src="images/Kibasila.png" class="shadow" width="100%">
            </div>
            <div data-scroll="toggle(.fromBottomIn, .fromBottomOut)" class="col-md-5 col-md-offset-1" style="margin-top: 5%">
                <center><h2>Kibasila High School.</h2></center><br>
                <center><span style="font-size: 120%">
                </span></center>
            </div>
        </div>

        <div class="col-md-12" style="margin-top: 5%;margin-bottom: 5%">
        <div data-scroll="toggle(.fromLeftIn, .fromLeftOut)" class="col-md-5 col-md-offset-1" style="margin-top: 5%">
                <center><h2>Jangwani High School.</h2></center>
                <center><span style="font-size: 120%">
                </span></center>
            </div>
            <div data-scroll="toggle(.fromRightIn, .fromRightOut)" class="col-md-5 col-md-offset-1">
                <img class="shadow" src="images/jangwani.png" width="100%">
            </div>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <b><hr></b>
        </div>

        <div class="col-md-12 img-responsive" style="background-image: url('images/thee vendor.jpg');height: ;background-size: cover;background-attachment: fixed;">

            <div id="order" class="col-md-6 col-md-offset-3" style="margin-top: 10vh">
                <center><h2>The Bela Vendor</center>
                    <div class=" col-md-12" style="margin-top: 2vh;margin-bottom: 5vh"><div class="col-md-8 col-md-offset-2"><hr></div></div>
                <span style="font-size: 140%;text-shadow: -.08px -.08px 0px #dbdbdb;">
                    The sanitary vending machine can dispense a single sanitary pad at a time depending on the needs of the client through the use of a coin. The sanitary  pad will be priced for 200tsh and the second sanitary pad will be priced for 500tsh:
                    <li>A Bela Vendor with GSM and a capacity of 30 pads.</li>
                    <li>A Bela Vendor without GSM and a capacity of 30 pads.</li>
                    <li>A Bela Vendor with GSM and a capacity of 50 pads.</li>
                    <li>A Bela Vendor without GSM and a capacity of 50 pads.</li>
                </span>
                <div id="order" class="col-md-4 col-md-offset-4" style="margin-top: 15vh">
                    <center><button class="btn btn-block" data-toggle="modal" data-target="#popUpWindow" border: 1px solid white"><h4>Place Your Order</h4></button></center>
                </div>
            </div>
            
        </div>

        <div class="col-md-4 col-md-offset-4" style="margin-bottom: 10vh;">
            <center><h1>The Bela Vendor</h1></center>
        </div>

        <!--Bella Vendor-->
        <div id="bellavendor" class=" row" style="height: 100vh">
            <div class="col-md-4 col-md-offset-9" >

    <!--
    <div class="info cycle-slideshow" 
        data-cycle-fx="fade" 
        data-cycle-timeout="6500"
        data-cycle-speed = "900"
        data-cycle-manual-speed = "600"      
        data-cycle-slides="> div"
        >
        <div>
            <center><h1 style="margin-top: 60%;margin-left: -45%">The Bela Vendor.</h1></center>
        </div>
        <div>
            <center><h1>Easy, Simple, Straight Forward.</h1></head>
            <span>The Bela Vendor is easily accessed and simple to use, a couple of steps no skill required.</span></center>
        </div>
        <div>
            <center><h1>Cheap.</h1></head></center>
            <span>At an affordable price of Ths 200/- only a student can get one pad.<br>1.Insert a Tsh 200/- coin in the machine...</span>
        </div>
         <div>
            <center><h1>Cheap.</h1></head></center>
            <span>At an affordable price of Ths 200/- only a student can get one pad.<br>1.Insert a Tsh 200/- coin in the machine...<br>2.Turn a norb just below the coin slot to release the paid for piece...</span>
        </div>
        <div>
            <center><h1>Collect.</h1></head></center>
            <span>Congratulations! Now you can collect your piece.</span>
        </div>
        <div>
            <center><h1>Collect.</h1></head></center>
            <span>Congratulations! Now you can collect your piece...<br><h4>It's as easy as that.</h4></span>
        </div>
        <div>
            <span style="margin-left: 30%"> With quite a <b>capacity</b> Bela Vendor can house <span style="font-size: 150">30</span> pads when full.</span>
        </div>
        <div>
            <center><h1>Bela</h1> <span> initiated date by Lulu to help girls and specifically girls in schools. This aims to help a girl coup with her daily routine and academic activities during menstral circles.</span></center>
        </div>
        <div>
            <center><h1>Be A Lady</h1> <span>is now a successful project currently serving 3 Schools and expanding.</span></center>
        </div>

        
    </div>-->
            </div>
            <div id="slideshow" class="cycle-slideshow col-md-12 row"
                            data-cycle-fx = "scrollHorz"
                            data-cycle-speed = "900"
                            data-cycle-timeout = "6500"
                            data-cycle-pager = "#pager"
                            data-cycle-pager-template = "<a href = '#'><img src='{{scr}}' height=50 width=48/></a>"
                            data-cycle-next = "#next"
                            data-cycle-prev = "#prev"
                            data-cycle-manual-speed = "600"
                            data-cycle-manual-fx = "scrollHorz"
                            data-cycle-pager-fx = "fade" >
                                <img src="machine/machine1.jpg" class="img-fluid" alt="">
                                <img src="machine/machine2.jpg" class="img-fluid" alt="">
                                <img src="machine/machine3.jpg" class="img-fluid" alt="">
                                <img src="machine/machine (4).jpg" alt="">
                                <img src="machine/machine (5).jpg" alt="">
                                <img src="machine/machine (6).jpg" alt="">
                                <img src="machine/machine (7).jpg" alt="">
                                <img src="machine/machine (8).jpg" alt="">
                                <img src="machine/machine (9).jpg" alt="">
                            </div>
        </div>

        <div data-scroll="toggle(.fromBottomIn, .fromBottomOut)" id="aboutus" class="col-md-12">
            <div class="col-md-4 col-md-offset-4">
                <center><h1 style="margin-top: 15vh;">About Us<hr></h1></center>
            </div>
            <div class="col-md-8 col-md-offset-2" style="margin-top: 10vh;margin-bottom: 15vh">
                
                    <span style="font-size: 140%">    
                        Our story in a nutshell<br><br></span>
                    <center>
                        <span style="font-size: 140%">
                        Be A Lady (B.A.L) is a bright new company that started in April 2017, through the help of DLI (Data for Local Impact). The B.A.L team was able to conduct a study throughout various districts in Dar Es Salaam to see if there is a problem with the availability adn accessibility of sanitary pads within there schools. We discovered that many of these young girls do not have the economic power to buy a full packet of sanitary pads. These leads them to use alterntive methods such as handkerchiefs, khangas and even newspapers. Due to this problem many young girls choose to stay home and not attend school til they are feeling better.
                        Thus the Bela Vendor was born, an automated sanitary pad dispenser that is located within the girls bathroom, allowing the female students to be away from prying eyes as they take care of their needs.
                        </span>
                    </center>

            </div>
            <div class="col-md-4 col-md-offset-4">
            </div>
        </div>

        <div class="col-md-12">
        
        <div class="col-md-10 col-md-offset-1" style="background-color: #b43db8">            
            <iframe class="col-md-10 col-md-offset-1" width="90%" height="550" src="https://www.youtube.com/embed/lCzn7089GI0" frameborder="0" gesture="media" allowfullscreen></iframe>
        </div>

        <div class="col-md-4 col-md-offset-4" style="margin-top: 10vh">
            <center><h1>Testimonies<hr></h1></center>
        </div>

        <div class="col-md-12" style="margin-top: 5vh;">
        <div class="col-md-6">
            <div align="center" class="col-md-12 col-md-offset- embed-responsive embed-responsive-16by9">
                <iframe width="100%" height="250" src="https://www.youtube.com/embed/UIKwOEoaWm8" frameborder="0" gesture="media" allowfullscreen></iframe>
            </div>
        </div>

        <div class="col-md-6">
            <div align="center" class="col-md-12 col-md-offset- embed-responsive embed-responsive-16by9">
                <iframe width="100%" height="250" src="https://www.youtube.com/embed/FEehirxbOC4" frameborder="0" gesture="media" allowfullscreen></iframe>
            </div>
        </div>
        </div>
        </div>


        <div id="team" class="col-md-4 col-md-offset-4" style="margin-bottom: 5vh;margin-top: 10vh;">
            <center><h1>Meet the Team <hr></h1></center>
        </div>

        <div class="col-md-12 row team" style="margin-bottom: 5vh;background-color:">
            <div class="col-md-2 col-md-offset-1" style="margin-top: 10vh">
                <div class="col-md-12">
                    <img src="images/imports/lulu.jpg" width="100%" style="border-radius: 100%">
                </div>
                <div class="col-md-12">
                    <center><h3>Lulu Ameir</h3></center>
                    <center><span>Project & Team Manager</span></center>
                </div>
            </div>
            <div class="col-md-2 " style="margin-top: 10vh">
                <div class="col-md-12">
                    <img src="images/imports/kaijuko2.jpg" width="100%" style="border-radius: 100%">
                </div>
                <div class="col-md-12">
                    <center><h3>Kaijuko Mkandala</h3></center>
                    <center><span>Project Coordinator</span></center>
                </div>
            </div>
            <div class="col-md-2 " style="margin-top: 10vh">
                <div class="col-md-12">
                    <img src="images/imports/frank.jpg" width="100%" style="border-radius: 100%">
                </div>
                <div class="col-md-12">
                    <center><h3>James Osidore</h3></center>
                    <center><span>Data Collector</span></center>
                </div>
            </div>
            <div class="col-md-2 " style="margin-top: 10vh">
                <div class="col-md-12">
                    <img src="images/imports/melania2.jpg" width="100%" style="border-radius: 100%">
                </div>
                <div class="col-md-12">
                    <center><h3>Melania Chamlonde</h3></center>
                    <center><span>Data Collector</span></center>
                </div>
            </div>
            <div class="col-md-2 " style="margin-top: 10vh">
                <div class="col-md-12">
                    <img src="images/imports/rehema2.jpg" width="100%" style="border-radius: 100%">
                </div>
                <div class="col-md-12">
                    <center><h3>Melania Chamlonde</h3></center>
                    <center><span>Data Collector</span></center>
                </div>
            </div>
        </div>

        <div class="col-md-12 row">
            <?php include 'map.php'; ?>            
        </div>


        <div class="col-md-12 row">
            <div class="col-md-12" style="margin-top: 15vh">
                <div class="col-md-4 col-md-offset-4">
                    <center><h1>Get In Touch</h1><hr></center>
                </div>
            </div>

                <div id="contact" class="col-md-6" style="">
                    <div class="col-md-12"><center><h2>Contact Form</h2></center></div>

                <form method="POST" action="cont.php">
                <div class="col-md-8 col-md-offset-2" style="margin-top: 5%;margin-bottom: 5%;border: .6px solid #dbdbdb">
                    <div class="col-md-12 form-group" style="margin-top: 5%"><br><h5>Name</h5></div>
                    <div class="col-md-6 form-group">
                        First<br><input class="form-control" type="text" name="first_name">
                    </div>
                    <div class="col-md-6">
                        Last<br><input class="form-control" type="text" name="event">
                    </div>
                    <div class="col-md-12">
                        Email<br><input class="form-control" type="text" name="email">
                    </div>
                    <div class="col-md-12">
                        Message<br><textarea class="form-control" name="venue">
                            
                        </textarea><br>
                    </div>
                    <div class="col-md-12" style="margin-bottom: 10%">
                        <button type="Submit" name="first_name" class="btn col-md-12" style="background-color: #b43db8">Send</button>
                    </div>
                </div>
            </form>
            </div>

            <div class="col-md-6">
                <div class="col-md-6 col-md-offset-2" style="margin-top: 10%;">
                    <center><h2>Contact Us</h2></center>
                </div>
                <div class="col-md-6 col-md-offset-1">
                    <table class="table">
                        <tr>
                            <td>Address:</td><td></td>
                        </tr>
                        <tr>
                            <td>Phone:</td><td>+255687217884</td>
                            <td></td><td>+25568523910</td>
                        </tr>
                        <tr>
                            <td>Email:</td><td>luluameir@bealady.co.tz</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6 col-md-offset-2">
                    <center><h2>Visit Us</h2></center>
                </div>
                <div class="col-md-6 col-md-offset-1">
                    <table class="table">
                        <tr>
                            <td>Location:</td><td>Mikocheni B, plot 389 House No.27</td>
                        </tr>
                        <tr>
                            <td>City:</td><td>Dar es Salaam</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
   

        <div class="col-md-12 row" style="height: 60vh;background-color: #b43db8;position: relative;">
                <div class="col-md-12" style="height: 50vh;background-color: ">
        <div class="col-md-6 col-md-offset-3" style="margin-top: 10%">
            <div class="col-md-2 col-md-offset-3 instagram" style="background-color: ;"><center>
                <a target="_blank" href="https://www.instagram.com/bealadytz/?hl=en"><img src="logo/instagram.png" height="auto" onmouseover="this.src='logo/instagrambk.png';" onmouseout="this.src='logo/instagram.png';"></a>
            </center></div>
            <div class="col-md-2 instagram" style="background-color: ;"><center>
                <a href=""><img src="logo/facebook.png" height="auto" onmouseover="this.src='logo/facebookbk.png';" onmouseout="this.src='logo/facebook.png';"></a>
            </center></div>
            <div class="col-md-2 instagram">
                <center>
                <a href="https://twitter.com/BBealady?lang=en" target="_blank">
                    <img src="logo/twitter.png" height="auto" onmouseover="this.src='logo/twitterbk.png';" onmouseout="this.src='logo/twitter.png';">
                </a>
                </center>
            </div>
            </div>
            </div>
            <div class="col-md-12">
                <center><p style="bottom: 0;position:;"> BeaLady &copy; 2017 </p></center>
            </div>
        </div>


        <div class="modal fade" id="popUpWindow">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Order</h3>
                </div>

                <!-- body (form) -->
                <div class="modal-body col-md-12">
                    <form role="form" method="POST" action="order.php">
                        <div class="form-group col-md-12">
                            <input type="text" name="first_name" class="form-control" placeholder="Full name">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                         <div class="form-group col-md-6">
                            <input type="tel" name="telephone" class="form-control" placeholder="Mobile No.">
                        </div>
                        <div class="form-group col-md-6">
                            <select name="event" class="form-control show-tick show-menu-arrow" onchange="val()" id="selected">
                              <option selected disabled hidden>Choose a type of machine...</option>
                              <option>30 pads capacity Bela Vendor with GSM</option>
                              <option>30 pads capacity Bela Vendor without GSM</option>
                              <option>50 pads capacity Bela Vendor with GSM</option>
                              <option>50 pads capacity Bela Vendor without GSM</option>
                            </select>
                        </div>

                         <div class="form-group col-md-6">
                            <input type="Number" name="people" class="form-control" placeholder="Number of users">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" name="venue" class="form-control" placeholder="Location">
                        </div>
                </div>

                <!-- button -->
                <div class="modal-footer">
                    <button class="btn btn-block" style="background-color: #b43db8; black;color:white">Submit</button>
                     <center><p style=" margin-top: 3%;color: #6d6b6c">* Thank you. Once you've submitted our people will get back to you within 1 working day.</p></center>
                </div>

                 </form>
            </div>
        </div>
    </div>



        <script src="js/ScrollTrigger.min.js"></script>

        <script src="ScrollTrigger.min.js"></script>
                    <script>
                        document.addEventListener('DOMContentLoaded', function(){
                        var trigger = new ScrollTrigger();
                            });
                    </script>


        <script type="text/javascript">
    var locations = [
      ['Changombe Secondary Schools', -6.8492366, 39.271656, 4],
      ['Jangwani Secondary Schools', -6.8120169, 39.2708682, 5],
      ['Kibasila Secondary Schools', -6.852262, 39.2655537, 3]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 13,
      center: new google.maps.LatLng(-6.8280906,39.1910649),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) { 
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>

</body>
</html>
