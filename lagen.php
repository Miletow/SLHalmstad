<?php
include "header.php";
    if(isset($_POST['team'])){
        $_SESSION['team'] = $_POST['team'];
    }
    ?>

<script>
var buten = document.getElementById("lagen");
Func();

function Func() {
  
    buten.classList.add("active2");
}
    </script>

<div data-portal-region="main">
<div data-portal-component-type="layout" class="container one-column">
<div class="GrayGameDiv FoldedGray"></div>
        <div class="redTriangle FoldedTriangle"></div>   
<div class="row">
	  <div data-portal-region="main" class="col-xs-12 col-sm-12">

    
      <div data-portal-component-type="part" class="content article-page">
<div class="row">
    <article class="col-xl-12 article teams">
        <h2 class="title">
            <?php echo $_SESSION['team'];?>
            <div class="links-club">
                
                
                    
                </a>
            </div>
        </h2>

        <div class="content-article">
            <div class="img-club">
            <?php echo '<img src="uploads/'.getTeamImg($conn).'" height="600"  >';
             ?>

            </div>
            <?php
            if(isset($_SESSION['id'])){?>
            <form action="upload.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="file">
                <button type="submit" name="submit">UPLOAD</button>
                </form>
                <?php
            }?>
        </div>

       

        <!-- <h2 class="title">Spelare</h2>
        <div class="players">

            <div class="row players-positions">
                
                    <a class="player" data-slide-to="0.0">
                        <img src="falkenbergs-ff/_/image/d57c72cd-53ab-4675-af02-0df7ed81152a_32aae5aced018f4aa67ed8d0da530e7aba6cae46/height-180/m%c3%a5lvakt%20Johan%20Brattberg.jpg">
                        
                        <span class="name-player">1. Johan Brattberg</span>
                    </a>
                
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="file">
                <button type="submit" name="submit">UPLOAD</button>
                </form>
            </div>

            

        </div> -->

        <h2 class="title">Spelare</h2>
        <div class="statistics">
            <div class="table-container">
                <table class="table table-striped table-laguppstallning">
                    <thead>
                        <tr class="evenRow">
                            <th style="text-align: left;">Tröja</th>
                            <th>Spelare</th>
                            <th>Program</th>
                        </tr>
                    </thead>
                    <tbody class="no-side-border">
                        
                        <?php
                        if(isset($_SESSION['id'])){
                            adminGetPlayers($conn, $_SESSION['team']);
                        }else{
                            getPlayers($conn, $_SESSION['team']);
                        }

                        ?>
                            
                                    </tbody>
                                </table>

                               <?php

  if(isset($_SESSION['id'])){
    echo "<form method='POST' action='".createPlayer($conn)."'>
    <input type='text' name='nummer' placeholder='Nummer'>
    <input type='text' name='spelare' placeholder='Namn'>
    <input type='text' name='program' placeholder='Program'>                    
    <input type='hidden' name='lag' value='".$_SESSION['team']."'>                    
    <button type='submit' name='createPlayerSubmit'>Create Player</button>
  </form>";
  }
                ?>
                            </div>
                            
                        </div>
                       
                </div>
                <!-- <a class="carousel-control-prev" href="#galleryPlayers" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#galleryPlayers" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a> -->
            </div>

        </div>
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
 

</html>