
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alumni Monitoring System</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=ASSETS.FRONT;?>css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="<?=ASSETS;?>dmarkdevin.css" rel="stylesheet"> -->
    <!-- Custom CSS -->
    <link href="<?=ASSETS.FRONT;?>css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=ASSETS.FRONT;?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="Shortcut Icon" type="image/ico" href="<?=ASSETS;?>images/favicon.ico" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation" style="background-color: #FFF; " style="padding:20px;">
        <div class="container topnav" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
       <div style="margin:20px;">
            <img src="<?=ASSETS;?>images/favicon.png" height="80px;"  class="logo"> 
       </div>         
               



            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->


<style type="text/css">
    .nav a {
        font-family: Century Gothic;
        font-size: 14px;
    }
</style>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                <ul class="nav navbar-nav navbar-right" style="margin:20px;padding-top:18px; ; ">
                    <li >
                        <a style="color: #FD550C;" href="http://www.cit.edu/v6/" target="_blank" class="text-center">CIT-U HOME</a>
                    </li>
                    <li>
                        <a style="color: #FD550C;" data-toggle="modal" data-target="#modal-default" href="" class="text-center">ABOUT Alumni Monitoring System</a>
                    </li>
                    <li>
                        <a style="color: #FD550C;" href="<?=URL_ROOT;?>admins/login" class="text-center">ADMIN LOGIN</a>
                    </li>
                    <!-- <li>
                        <a style="color: #FD550C;" href="<?=URL_ROOT;?>logout()">CONTACT US</a>
                    </li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h3>CIT-U | Alumni Monitoring System</h3> 
                        <h1>Update, Be updated <br>and Keep updated</h1>
                        <ul class="list-inline intro-social-buttons">
                        <li>
                            <a href="<?=URL_ROOT;?>alumni/login" class="btn btn-primary btn-lg sign-in"   >
                            <span class="network-name">SIGN IN HERE</span>
                            </a>
                        </li>
                        </ul>
                        
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                     
                </div>
            </div>

        </div>
 

    </div> 
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">About</h4>
              </div>
              <div class="modal-body">
                <p>Alumni Monitoring System aims to bridge the gap between the alumni and the institution. It allows the school to keep track of their alumni activity after graduating from the institution and to view trends in the post-graduation activities of the alumni including further studies and employment. Alumni can register to this and fill-out the information sheet provided which includes educational and employment history for record purposes. They can also view the admin posts regarding school alumni activities to keep them updated. </p>
              </div>
              <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div> -->
            </div>
            <!-- /.modal-content -->
        </div>
          <!-- /.modal-dialog -->
    </div>
<!--    <a  name="services"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Death to the Stock Photo:<br>Special Thanks</h2>
                    <p class="lead">A special thanks to <a target="_blank" href="http://join.deathtothestockphoto.com/">Death to the Stock Photo</a> for providing the photographs that you see in this template. Visit their website to become a member.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="<?=ASSETS.FRONT;?>img/ipad.png" alt="">
                </div>
            </div>

        </div>
 

    </div>  -->
    <!-- /.content-section-a -->

<!--     <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">3D Device Mockups<br>by PSDCovers</h2>
                    <p class="lead">Turn your 2D designs into high quality, 3D product shots in seconds using free Photoshop actions by <a target="_blank" href="http://www.psdcovers.com/">PSDCovers</a>! Visit their website to download some of their awesome, free photoshop actions!</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="<?=ASSETS.FRONT;?>img/dog.png" alt="">
                </div>
            </div>

        </div>
        

    </div> -->
    <!-- /.content-section-b -->

<!--     <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Google Web Fonts and<br>Font Awesome Icons</h2>
                    <p class="lead">This template features the 'Lato' font, part of the <a target="_blank" href="http://www.google.com/fonts">Google Web Font library</a>, as well as <a target="_blank" href="http://fontawesome.io">icons from Font Awesome</a>.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="<?=ASSETS.FRONT;?>img/phones.png" alt="">
                </div>
            </div>

        </div>
        

    </div> -->
    <!-- /.content-section-a -->

<!--    <a  name="contact"></a>
    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Connect to Start Bootstrap:</h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                                <a href="<?=URL_ROOT;?>admins/login" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">BUYERS LOGIN</span></a>
                            </li>
                            <li>
                                <a href="<?=URL_ROOT;?>alumni/login" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">MEMBERS LOGIN</span></a>
                            </li>
                    </ul>
                </div>
            </div>

        </div>
        

    </div> -->
    <!-- /.banner -->

    <!-- Footer -->
    <footer style="background: #FD550C;text-align: center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">


<img src="<?=ASSETS;?>images/favicon.png" style='height:160px;margin-bottom:30px;' >
 

<div class="text1">Copyright © 2017 <b>Cebu Institute of Technology - University</b> All Rights Reserved</div>
<div class="text2">Tel. No: (032) 261 7741    |    Email: information@cit.edu</div>
<div class="text1">N. Bacalso Avenue Cebu City 6000 Cebu Philippines</div>


<style type="text/css">
    .social-icons{
        margin-top: 20px;
    }
    .social-icons a{
         margin-right: 15px !important;
        
        font-size: 20px;
        color: #fff;
    }
</style>

<div class="social-icons" >
<a href="https://www.youtube.com/user/CITdotedu" target="_blank"><i class="fa fa-youtube"></i></a>
<a href="https://www.facebook.com/CITUniversity" target="_blank"><i class="fa fa-facebook"></i></a>
<!-- <a href="" target="_blank" mailto=""  ><i class="fa fa-envelope"></i></a> -->
</div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?=ASSETS.FRONT;?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=ASSETS.FRONT;?>js/bootstrap.min.js"></script>

</body>

</html>
