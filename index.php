<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="sidebar.css">
    <link href="demo.css" rel="stylesheet">
    <script type="text/javascript" src="js/cycle2.js"></script>


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
 
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <div class="col-md-12">
                <div class="col-md-2">
                </div>
            </div>
            <div class="col-md-12">
                <div id="menu-items" class="col-md-6 col-md-offset-2">
                    <ul class="notextdeco">
                        <li><i class="fa fa-home" aria-hidden="true"></i>&ensp;&ensp;<a href="index.php">Home</a></li>
                        <li><i class="fa fa-puzzle-piece" aria-hidden="true"></i>&ensp;&ensp;<a href="index.php#Mission">Mission</a></li>
                        <li><i class="fa fa-info-circle" aria-hidden="true"></i>&ensp;&ensp;<a href="index.php#aboutus">About Us</a></li>
                        <li><i class="fa fa-users" aria-hidden="true"></i>&ensp;&ensp;<a href="index.php#team">Team</a></li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>&ensp;&ensp;<a href="index.php#contact">Get Intouch</a></li>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>&ensp;&ensp;<a href="index.php#coverage">Coverage</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Page content -->
        <div id="page-content-wrapper">
        
            <div class="container-fluid">
                <div id="" class="col-md-1" style="z-index: 3000">
                    <a href="#" id="menu-toggle"><img src="images/menu.png" width="100%"></a>                    
                </div>
                <div class="welcomediv row">
                    <div class="col-md-1">
                        <img src="images/logo.png" width="100%">   
                    </div>
                    <div class="followup row">
                        <div class="col-md-6 col-md-offset-1 topmarg30 wyttxt">
                            <div class="col-md-12">
                                <center><h1 data-scroll="toggle(.fromLeftIn, .fromLeftOut)">Be a Lady</h1></center>
                            </div>
                            <div class="col-md-12">
                                <center><h2 data-scroll="toggle(.fromRightIn, .fromRightOut)" class="googlefont">Introducing the all new <span class="bella">
                                    <td style="border:1px solid black;color: #b276ba;">
                                        <a href="#bellavendor"> Bela Vendor</a></td></span></h2></center>
                            </div>
                        </div>
                    </div>
                </div>
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
                <img src="images/changombe.jpg" class="shadow" width="100%">
            </div>
            <div data-scroll="toggle(.fromRightIn, .fromRightOut)" class="col-md-5 col-md-offset-1" style="margin-top: 5%">
                <center><h2 class="googlefont">Changombe High School.</h2></center><br>
                <center><span style="font-size: 120%">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                </span></center>
            </div>
        </div>

        <div class="col-md-12" style="margin-top: 5%;margin-bottom: 5%">
        <div data-scroll="toggle(.fromBottomIn, .fromBottomOut)" class="col-md-5" style="margin-top: 5%">
                <center><h2>Oysterbay High School.</h2></center><br>
                <center><span style="font-size: 120%">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                </span></center>
            </div>
            <div data-scroll="toggle(.fromBottomIn, .fromBottomOut)" class="col-md-5 col-md-offset-1">
                <img src="images/oysterbay.jpg" class="shadow" width="100%">
            </div>
        </div>

        <div class="col-md-12" style="margin-top: 5%;margin-bottom: 5%">
            <div data-scroll="toggle(.fromBottomIn, .fromBottomOut)" class="col-md-5 col-md-offset-1">
                <img src="images/kibasila.jpg" class="shadow" width="100%">
            </div>
            <div data-scroll="toggle(.fromBottomIn, .fromBottomOut)" class="col-md-5 col-md-offset-1" style="margin-top: 5%">
                <center><h2>Kibasila High School.</h2></center><br>
                <center><span style="font-size: 120%">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. 
                </span></center>
            </div>
        </div>

        <div class="col-md-12" style="margin-top: 5%;margin-bottom: 5%">
        <div data-scroll="toggle(.fromLeftIn, .fromLeftOut)" class="col-md-5 col-md-offset-1" style="margin-top: 5%">
                <center><h2>Jangwani High School.</h2></center>
                <center><span style="font-size: 120%">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                </span></center>
            </div>
            <div data-scroll="toggle(.fromRightIn, .fromRightOut)" class="col-md-5 col-md-offset-1">
                <img class="shadow" src="images/jangwani.jpg" width="100%">
            </div>
        </div>

        <div class="col-md-4 col-md-offset-4" style="margin-bottom: 10vh;">
            <center><h1>The Bela Vendor</h1></center>
        </div>

        <!--Bella Vendor-->
        <div id="bellavendor" class=" row" style="height: 100vh">
            <div class="col-md-4 col-md-offset-9" >

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
            <span style="margin-left: 30%"> With quite a <b>capacity</b> Bela Vendor can house <span style="font-size: 150">50</span> pads when full.</span>
        </div>
        <div>
            <center><h1>Bela</h1> <span> initiated date by Lulu to help girls and specifically girls in schools. This aims to help a girl coup with her daily routine and academic activities during menstral circles.</span></center>
        </div>
        <div>
            <center><h1>Be A Lady</h1> <span>is now a successful project currently serving 3 Schools and expanding.</span></center>
        </div>

        
    </div>
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
            <div class="col-md-4 col-md-offset-4" style="margin-top: 10vh;">
                <center><h1>About Us<hr></h1></center>
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

        <div id="team" class="col-md-4 col-md-offset-4" style="margin-bottom: 5vh;margin-top: 10vh;">
            <center><h1>Meet the Team <hr></h1></center>
        </div>

        <div class="col-md-12 row team" style="height: 50vh;background-color:">
            <div class="col-md-2 col-md-offset-1" style="margin-top: 10vh">
                <div class="col-md-12">
                    <img src="images/imports/lulu.png" width="100%" style="border-radius: 100%">
                </div>
                <div class="col-md-12">
                    <center><h3>Lulu Ameir</h3></center>
                    <center><span>Project & Team Manager</span></center>
                </div>
            </div>
            <div class="col-md-2 col-md-offset-1" style="margin-top: 10vh">
                <div class="col-md-12">
                    <img src="images/imports/kaijuko.png" width="100%" style="border-radius: 100%">
                </div>
                <div class="col-md-12">
                    <center><h3>Kaijuko Mkandala</h3></center>
                    <center><span>Project Coordinator</span></center>
                </div>
            </div>
            <div class="col-md-2 col-md-offset-1" style="margin-top: 10vh">
                <div class="col-md-12">
                    <img src="images/imports/james.png" width="100%" style="border-radius: 100%">
                </div>
                <div class="col-md-12">
                    <center><h3>James Osidore</h3></center>
                    <center><span>Data Collector</span></center>
                </div>
            </div>
            <div class="col-md-2 col-md-offset-1" style="margin-top: 10vh">
                <div class="col-md-12">
                    <img src="images/imports/melania.png" width="100%" style="border-radius: 100%">
                </div>
                <div class="col-md-12">
                    <center><h3>Melania Chamlonde</h3></center>
                    <center><span>Data Collector</span></center>
                </div>
            </div>
        </div>

        <div id="coverage" class="col-md-12 wallppr2" style="height: 100vh;">
            <div id="contactmap" class="col-md-6 row">
                <div class="col-md-6 col-md-offset-2" style="margin-top: 10%;">
                    <center><h2>Contact Us</h2></center>
                </div>
                <div class="col-md-6 col-md-offset-1">
                    <p>Address</p>
                    <p>phone</p>
                    <p>email</p>
                </div>
                <div class="col-md-6 col-md-offset-2">
                    <center><h2>Visit Us</h2></center>
                </div>
                <div class="col-md-6 col-md-offset-1">
                    <p>Location</p>
                    <p>City</p>
                </div>

            </div>
        </div>

        

        <div class="col-md-12 row">

                <div id="contact" class="col-md-6" style="">
                    <div class="col-md-12"><center><h2>Contact Form</h2></center></div>
                <form class="form-group">
                <div class="col-md-8 col-md-offset-2" style="margin-top: 5%;margin-bottom: 5%;border: .6px solid #dbdbdb">
                    <div class="col-md-12 form-group" style="margin-top: 5%"><br><h5>Name</h5></div>
                    <div class="col-md-6 form-group">
                        First<br><input class="form-control" type="text" name="">
                    </div>
                    <div class="col-md-6">
                        Last<br><input class="form-control" type="text" name="">
                    </div>
                    <div class="col-md-12">
                        Email<br><input class="form-control" type="text" name="">
                    </div>
                    <div class="col-md-12">
                        Message<br><textarea class="form-control"></textarea><br>
                    </div>
                    <div class="col-md-12" style="margin-bottom: 10%">
                        <button class="btn col-md-12" style="background-color: #b276ba">Send</button>
                    </div>
                </div>
            </form>
            </div>

            <div class="col-md-6">
                <div class="col-md-10 col-md-offset-1" style="border:solid 1px #dbdbdb;margin-top: 12vh">
                    <div class="row" style="height: 10vh;background-color: #b276ba">
                        <center><h2>Coverage</h2></center>
                    </div>
                    <div class="col-md-12" style="height: 35vh">
                        <center style="margin-top: 10vh">
                            <span style="font-size: 135%" >
                                On the above map representation we have set markers that show areas that the 
                                <span style="color: #b276ba"> Bela Vendor </span> machine is currently serving. The mission is by next
                                is to cover more schools at an exponential growth and eventually national wide.
                            </span>
                        </center>
                    </div>
                </div>
            </div>
        </div>
   

        <div class="col-md-12 row" style="height: 60vh;background-color: #b276ba;position: relative;">
                <div class="col-md-12" style="height: 50vh;background-color: ">
        <div class="col-md-6 col-md-offset-3" style="margin-top: 10%">
            <div class="col-md-3 instagram" style="background-color: ;"><center>
                <a href=""><img src="logo/instagram.png" height="auto" onmouseover="this.src='logo/instagrambk.png';" onmouseout="this.src='logo/instagram.png';"></a>
            </center></div>
            <div class="col-md-3 instagram" style="background-color: ;"><center>
                <a href=""><img src="logo/facebook.png" height="auto" onmouseover="this.src='logo/facebookbk.png';" onmouseout="this.src='logo/facebook.png';"></a>
            </center></div>
            <div class="col-md-3 instagram">
                <center>
                <a href="">
                    <img src="logo/twitter.png" height="auto" onmouseover="this.src='logo/twitterbk.png';" onmouseout="this.src='logo/twitter.png';">
                </a>
                </center>
            </div>
            <div class="col-md-3 instagram">
                <center>
                <a href="">
                    <img src="logo/linked.png" height="auto" onmouseover="this.src='logo/linkedbk.png';" onmouseout="this.src='logo/linked.png';">
                </a>
                </center>
            </div>
            </div>
            </div>
        </div>


        <script src="js/ScrollTrigger.min.js"></script>
                    <script>
                        document.addEventListener('DOMContentLoaded', function(){
                        var trigger = new ScrollTrigger();
                            });
                    </script>

        <script>
            window.counter = function() {
                // this refers to the html element with the data-scroll-showCallback tag
                var span = this.querySelector('span');
                var current = parseInt(span.textContent);

                span.textContent = current + 1;
            };

            document.addEventListener('DOMContentLoaded', function(){
              var trigger = new ScrollTrigger({
                  addHeight: true
              });
            });
        </script>


   



</body>
</html>
