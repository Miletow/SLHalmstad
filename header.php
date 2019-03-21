<?php
session_start();
include 'includes/dbh.inc.php';
include 'includes/phpFunctions.php';

?>
<!DOCTYPE html>
<html>

<link rel="icon" href="asset/img/StudentLeagueLogo2.png" type="image/gif" sizes="16x16">
<!-- Mirrored from www.superettan.se/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Dec 2018 09:01:07 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <title>Student League</title>
    <link rel="home" href="#" />
    <!-- Tungsten and Gotham -->


    <!--<link rel="stylesheet" type="text/css" href="/css/.css"/>-->
    <!-- <link rel="stylesheet" type="text/css" data-th-href="${mainCssFile}"/> -->

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy"
          crossorigin="anonymous">-->
    <link rel="stylesheet" type="text/css" href="asset/css/Added.css">
    <link rel="stylesheet" type="text/css" href="asset/css/Clock.css">
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="asset/css/countdown.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="asset/css/Sef-Style.css" />
    <link rel="stylesheet" type="text/css" href="asset/css/MainStyle.css" />



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="js/clock.js"></script>

    
    
<!-- <link rel="alternate" type="application/rss+xml" title="Fantasy Feed" href="fantasy-feed" /></head> -->
<body>


<div class="background"></div>
    <img id="backgroundIMG" src="asset/img/background.png" alt="">
</div>
<!-- <div style="width: 100%; height: 140px;"></div> -->
<img src="asset/img/Backlight.png" alt="" class="backLight">

<header class="header" id="myHeader">

    <div class="mainLogo">
        <img src="asset/img/StudentLeagueLogo.png" alt="" style="width: 200px;">
    </div>
  <div id="RedClock">
    <div class="leftofClock">
    <img src="asset/img/hif_logotyp_liggande-mindre.png" alt="" style="width:12vw;">
    <img  src="asset/img/HSIF.png" alt="" style="width:6vw; ">
    </div>
    


 <div class="countdown">
    <div class="countdown2"></div>
<script>
        
        $(document).ready(function(){
            
            var date1 = new Date();
           var dateString = <?php echo json_encode(getEarlyDate($conn))?>;
        var date2 = new Date(dateString.replace(/-/g, "/"));
       var time = date2.getTime() - date1.getTime();
       
    
            setTime(true, time);
            setInterval(function(){
               time = setTime(true, time);
            }, 1000);
            
        });</script>
    
    <div class="clock">


<div class="digit tendays">
    <span class="base"></span>
    <div class="flap over front"></div>
    <div class="flap over back"></div>
    <div class="flap under"></div>
</div>

<div class="digit days">
    <span class="base"></span>
    <div class="flap over front"></div>
    <div class="flap over back"></div>
    <div class="flap under"></div>
</div>

<div class="digit tenhour">
    <span class="base"></span>
    <div class="flap over front"></div>
    <div class="flap over back"></div>
    <div class="flap under"></div>
</div>

<div class="digit hour">
    <span class="base"></span>
    <div class="flap over front"></div>
    <div class="flap over back"></div>
    <div class="flap under"></div>
</div>

<div class="digit tenmin">
    <span class="base"></span>
    <div class="flap over front"></div>
    <div class="flap over back"></div>
    <div class="flap under"></div>
</div>

<div class="digit min">
    <span class="base"></span>
    <div class="flap over front"></div>
    <div class="flap over back"></div>
    <div class="flap under"></div>
</div>

<div class="digit tensec">
    <span class="base"></span>
    <div class="flap over front"></div>
    <div class="flap over back"></div>
    <div class="flap under"></div>
</div>

<div class="digit sec">
    <span class="base"></span>
    <div class="flap over front"></div>
    <div class="flap over back"></div>
    <div class="flap under"></div>
</div> 

</div>
    <!-- <img src="ClockBackground.png" alt="" id="clockBackground" style="width:700px"> -->
    <!-- <div id="tiles"></div> -->
  <div class="labels">
    <li>D</li>
    <li>T</li>
    <li>M</li>
    <li>S</li>
  </div>
</div>

<div class="rightofClock">
<img src="asset/img/hh-logo-2013-sve.png" alt="" style="width:8vw">
<img src="asset/img/StudentCentrum.png" alt="" style="width:7vw">
</div>




</div>
<div class="theHeader">

<nav  class="navbar navbar-expand-lg navbar-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbarEn navbar-collapse collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            
             <li id="theIndex" class="nav-item homeItem">
                    

                    <a class="nav-link"  href="index.php">Hem</a>

                </li>
                <li id="tabell" class="nav-item">
                    

                    <a class="nav-link" href="tabell.php">Tabell</a>

                </li>
            
            
                <li id="matcherNa" class="nav-item">
                    

                    <a class="nav-link" href="matcher.php">Spelprogram</a>

                </li>
            
            
            
            
               
                <li id="lagen" class="nav-item dropdown">
                    <div data-remove="tag">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Lagen</a>
                       <div class="dropdown-menu">
                      
                                <?php LoadTeamHeader($conn);?>
                            
                       
                              
                            
                        </div>
                    </div>

                    

                </li>
            
            
                <li id="omOss" class="nav-item">
                    

                    <a style="white-space:nowrap" class="nav-link" href="om-oss.php">Om oss</a>

                </li>
                <li id="medlemskap" class="nav-item">
                    

                    <a class="nav-link" href="medlemskap.php">Medlemskap</a>

                </li>
                <li id="regler" class="nav-item">
                    

                    <a class="nav-link" href="regler.php">Regler</a>

                </li>
                
            
        </ul>

        

    </div>

    

</nav>

</div>
</div>

    </div>
</header>
