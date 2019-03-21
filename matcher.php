<?php
include 'header.php'
	?>
	   <script>
var buten = document.getElementById("matcherNa");
Func();

function Func() {
  
    buten.classList.add("active2");
}
    </script>
<link rel="stylesheet" type="text/css" href="asset/css/Sef.css" />


    <div data-portal-region="main">
        
            <div data-portal-component-type="layout" class="container one-column">
			<div class="GrayGameDiv FoldedGray"></div>
        <div class="redTriangle FoldedTriangle"></div>   
	<div class="row" style="marign:auto;">
	  <div data-portal-region="main" class="col-xs-12 col-sm-12" >
    
	    
	      <div data-portal-component-type="part" class="matcher" style="border-radius: 5px; margin-top:30px">
	<h2 class="title">Matcher</h2>
	<div class="section-wrapper">
		<nav>
		
			
		</nav>
		
		<?php

if(isset($_SESSION['id'])){
    echo" <form method='POST' action='".createGame($conn)."'>"?>
	<input type='text' name='Round' placeholder='Round'>
	<input type='datetime-local' name='Date' placeholder='Date'>
   	
	<input type='text' name='Score1' placeholder='Score1'>	  
	<input type='text' name='Score2' placeholder='Score2'>
	<br>
	<a>Team1:  </a><select name='Team1'>
    <?php echo getTeamNames($conn);?>
	</select>
    <a>Team2:  </a><select name='Team2'>
    <?php echo getTeamNames($conn);?>
	</select>
    <div class='GameBarDiv'>

	  <button class='GameBar GreenButton' type='submit' name='CreateGame'>Create game</button>
	</form>
    <?php
    echo"<form method='POST' action='".editGamesMode($conn)."'>";?>
	<button class='GameBar GreenButton' name='editGamesMode' type='submit'>Edit games</button>
	</form>
    <?php
    echo"<form method='POST' action='".CreateSeason($conn)."'>";?>
	<button class='GameBar GreenButton' name='CrateSeason' type='submit'>Create Season</button>
	</form>
	</div>
<?php
}
?>
		<div class="matches-sorted-by-date">
			<div class="rows">
				
				
							<?php

							if(isset($_SESSION['id']) && isset($_SESSION['gameEditMode']))
							adminGetGame($conn);
							else
							getGame($conn);

							?>
							</div>  
							</div>  

							</div>  
							</div>  
							</div>  
							</div>  

	  </div>
	
	  
	</div>


   <?php
include 'footer.php';
   ?>
 

   </body>


<!-- Mirrored from www.superettan.se/matcher by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Dec 2018 09:05:05 GMT -->
</html>