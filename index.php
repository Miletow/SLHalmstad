<?php
include 'header.php';
    
    ?>

    <!-- <div style="z-index:-5; position: absolute; top:0px; left: 0px;"><img src="cardboard_texture1000.jpg"></div> -->
  <?php
  //echo json_encode(getEarlyDate($conn))?>

    <script>//var countDownDate = new Date().getTime();</script>

    <script src="js/Index.js"></script>
    
      
    <!-- end matches -->
        </head>
        <body>
        
        



        
        <div _ngcontent-sc50=""  class="container eventbarContainer">
        <div class="GrayGameDiv">
        
        <?php getNextGame($conn); ?>

       
        <div class="redRibbon"><a id="VS">VS</a></div></div>
        <div class="redTriangle"></div>   
        
        
    <div class="ContainerPack">
    <!--<div class="leftContainer InstaWidth">

    <div style="height: 640px; overflow:hidden; margin-bottom:50px;" id="pixlee_container"></div>
    
        <script type="text/javascript">
        
        window.PixleeAsyncInit = function() {Pixlee.init({apiKey:'tdaLOeqwE9vnj1obVqQw'});
        Pixlee.addSimpleWidget({widgetId:'13200'});};
        </script>
        <script>

    
    // can load any script, from any domain
    try {
    let script = document.createElement('script');

    script.src = "//instafeed.assets.pixlee.com/assets/pixlee_widget_1_0_0.js"

        document.head.append(script);
        
    
        }
        catch(err) {
        alert("Error XD");
        }
    
  </script>
    </div>-->
  
        <div class="imgDiv">
        
        <div class="mySlides"><a href="https://www.instagram.com/p/BuKMyfQl3i_/"><div class="opacityDiv"></div></a><a href="https://www.instagram.com/p/BuKMyfQl3i_/"><img  src="asset/img/Gastrogron.png">
        <!--<div class="banner">
        <h2>Who will take home the finals!? Be there to find out!</h2>
        <p>The returning Morgan could be the one to land the decisive blow in the title race.</p>
        </div>--></a></div>
        <div class="mySlides"><a><div class="opacityDiv"></div></a><a><img src="asset/img/EngageraDig.png">
        <!--<div class="banner">
        <h2>Is James the man to lead Bayern's resugence?</h2>
        <p>The returning Morgan could be the one to land the decisive blow in the title race.</p>
        </div>--></a></div>
        <div class="mySlides"><a><div class="opacityDiv"></div></a><a><img  src="asset/img/FinalBakgrund.png">
        <!--<div class="banner">
        <h2>Who will take home the finals!? Be there to find out!</h2>
        <p>The returning Morgan could be the one to land the decisive blow in the title race.</p>
        </div>--></a></div>
        
        
        
        
        
        </div>
        </div>
 

                        <?php
                        
   
getTeams($conn);
             

?>
    
              
  
        </div>
        
    </div>
    </div>
    </div>
    </div>
    <script>
  var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  
  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 8000); // Change image every 2 seconds
}
</script>
    
<?php
include 'footer.php';
?>
 
