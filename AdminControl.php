<?php
  date_default_timezone_set('Europe/Copenhagen');
  include 'includes/dbh.inc.php';
  include 'includes/phpFunctions.php';
  include 'header.php';
 ?>

<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="_/asset/no.seeds.app.sef_1540574971/css/superettan.css" />
  
    <meta charset="utf-8">
    <title>Title of the document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>


<br><br>

<br><br>  

	     
    <div class="container">
        <div class="row">
            
            
            
            
            <div class="col-xs-12 col-sm-12 tbl">
                <div class="table-container">
                    <table style="margin:auto;" class="table table-striped table-borta">
                        <thead>
                            <tr>
                                <th colspan="2" class="standings-group" data-reactid=".0.0:$0.0.0.$standings-group">
                                    Team
                                </th>
                                <th>M</th>
                                <th class="collapsableCell">V</th>
                                <th class="collapsableCell">O</th>
                                <th class="collapsableCell">F</th>
                                <th class="collapsableCell">GM</th>
                                <th class="collapsableCell">IM</th>
                                <th class="collapsableCell">+/-</th>
                                <th>P</th>
                            </tr>
                        </thead>
                        <tbody>
<?php

adminGetTeams($conn);

?>
  </tbody>
                    </table>
                    
                    </div>
            </div>
   
</div>

<?php

 if(isset($_SESSION['id'])){
          echo "<form method='POST' action='".CreateTeam($conn)."'>
            <input type='text' name='team' placeholder='Team name'>
            <button type='submit' name='TeamSubmit'>Create team</button>
          </form>";
      }else {
        echo "You need to be logged in to comment!
        <br><br>";
      }




    ?>
  </body>
</html>
