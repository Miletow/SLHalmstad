<?php

function CreateTeam($conn){
	if(isset($_POST['TeamSubmit'])){
		$Team = $_POST['team'];
		$league = $_POST['league'];
		if($Team == null)
        echo "<meta http-equiv='refresh' content='0'>";

		$sql = "INSERT INTO teams (team, league) VALUES ('$Team', '$league')";
		$result = mysqli_query($conn, $sql);

		echo "<meta http-equiv='refresh' content='0'>";
        $_POST['TeamSubmit'] = null;
	}
}
?>
<style>

.inputStyle{
	width: 30px;
}
</style>

<?php

function adminGetTeams($conn){

	
	$sqlL = "SELECT * FROM leagues";
	$resultL = $conn->query($sqlL);
	while($rowL = $resultL->fetch_assoc()){
	$league = $rowL['id'];
	$league_name = $rowL['league_name'];
	$sql = "SELECT * FROM teams WHERE league='$league'";
	$result = $conn->query($sql);
	echo '<div class="col-xs-12 col-sm-12 tbl">
	<div class="table-container">
		<table style="margin:auto;" class="table table-striped table-borta">
		<h2 class="title">'.$league_name.'</h2>
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
			<tbody>';
	while($row = $result->fetch_assoc()){
    
	echo'<form method="POST" action="'.updateTeam($conn).'">
        <td>'.$row['team'].'</td>
        <td></td>
        <td class="collapsableCell"><input type="text" name="M" class="inputStyle" value="'.$row['M'].'"></td>
        <td class="collapsableCell"><input type="text" name="V" class="inputStyle" value="'.$row['V'].'"></td>
        <td class="collapsableCell"><input type="text" name="O" class="inputStyle" value="'.$row['O'].'"></td>
        <td class="collapsableCell"><input type="text" name="F" class="inputStyle" value="'.$row['F'].'"></td>
        <td class="collapsableCell"><input type="text" name="GM" class="inputStyle" value="'.$row['GM'].'"></td>
        <td class="collapsableCell"><input type="text" name="IM" class="inputStyle" value="'.$row['IM'].'"></td>
        <td class="collapsableCell"><input type="text" name="Diff" class="inputStyle" value="'.$row['Diff'].'"></td>
		<td class="collapsableCell"><input type="text" name="P" class="inputStyle" value="'.$row['P'].'"></td>
		<input type="hidden" name="cid" value="'.$row['cid'].'">
        <td><button class="GreenButton" type="submit" name="updateTeam">Update team</button></td
		</form>';
        echo "<td><form method='POST' action='".deleteTeam($conn)."'>
        <input type='hidden' name='cid' placeholder='Team name' value='".$row['cid']."'>
        <button class='GreenButton' type='submit' name='teamDelete'>Delete team</button>
      </form></td>
    </tr>";
  

		}
		echo ' </tbody>
		</table>
		';
		echo "<form method='POST' action='".CreateTeam($conn)."'>
<input type='text' name='team' placeholder='Team name'>
<input type='hidden' name='league' value='".$league."'>
<button class='GreenButton' type='submit' name='TeamSubmit'>Create team</button>
</form>";
echo '
		</div>

</div>';
		

	}
	}
	function getTeams($conn){
		$sqlL = "SELECT * FROM leagues";
	$resultL = $conn->query($sqlL);
	while($rowL = $resultL->fetch_assoc()){

		$league = $rowL['id'];
	$league_name = $rowL['league_name'];
	$sql = "SELECT * FROM teams WHERE league='$league' ORDER BY P DESC, Diff DESC";
	$result = $conn->query($sql);
	echo ' <div style="margin-bottom: 40px;" data-portal-component-type="part" class="row table-championship matcher ">
	<h2 class="title hundredpercent">'.$league_name.'</h2>

	<div class="container hundredpercent">
	
        <div class="row ">
            
            
            
            <div class="col-xs-12 col-sm-12 tbl ">
                <div class="table-container ">
                    <table class="table table-striped table-borta">
                        <thead>
                            <tr>
                            
                                <th colspan="2" class="standings-group" data-reactid=".0.0:$0.0.0.$standings-group">
                                    <span data-reactid=".0.0:$0.0.0.$standings-group.0"></span>
                                </th>
                                <th class="collapsableCell Indikator">Spelade</th>
                                <th class="collapsableCell Indikator">Poäng</th>
                                <th class="collapsableCell Indikator">V</th>
                                <th class="collapsableCell Indikator">O</th>
                                <th class="collapsableCell Indikator">F</th>
                                <th class="collapsableCell Indikator">M</th>
                                <th class="collapsableCell Indikator">IM</th>
                                <th class="collapsableCell Indikator">+/-</th>
                            </tr>
                        </thead>
                        <tbody>';
		$Rank = 1;
		while($row = $result->fetch_assoc()){
		
			echo'   
			<td>'.$Rank.'</td>
			
			<td>'.$row['team'].'</td>
			<td class="collapsableCell">'.$row['M'].'</td>
			<td class="collapsableCell Points">'.$row['P'].'</td>
			<td class="collapsableCell">'.$row['V'].'</td>
			<td class="collapsableCell">'.$row['O'].'</td>
			<td class="collapsableCell">'.$row['F'].'</td>
			<td class="collapsableCell">'.$row['GM'].'</td>
			<td class="collapsableCell">'.$row['IM'].'</td>
			<td class="collapsableCell">'.$row['Diff'].'</td>
		</tr>';
		$Rank++;
			}

			echo '</tbody>              
			</table>
				</div>
			  </div>
		  </div>
			</div>
			
				  </div>';
		}
	}

	function addLeague($conn){
	if(isset($_POST['LeagueSubmit'])){
		$league_name = $_POST['league'];

		$sql = "INSERT INTO leagues (league_name) VALUES ('$league_name')";
		$result = mysqli_query($conn, $sql);
		}
	}
	function updateTeam($conn){
		if(isset($_POST['updateTeam'])){
		$cid = $_POST['cid'];
		$M = $_POST['M'];
		$V = $_POST['V'];
		$O = $_POST['O'];
		$F = $_POST['F'];
		$GM = $_POST['GM'];
		$IM = $_POST['IM'];
		$Diff = $_POST['Diff'];
		$P = $_POST['P'];

			$sql = "UPDATE teams SET M='$M', V='$V', O='$O', F='$F', GM='$GM', IM='$IM', Diff='$Diff', P='$P' WHERE cid='$cid'";
			$result = mysqli_query($conn, $sql);
	
			header("Location: AdminControl.php?Update=success");
			$_POST['updateTeam'] = null;
		}
	}

function deleteTeam($conn){
if(isset($_POST['teamDelete'])){
    $cid = $_POST['cid'];

    $sql = "DELETE FROM teams WHERE cid='$cid'";
    $result = mysqli_query($conn, $sql);

    //header("Location: AdminControl.php?".$cid."Delete=success");

  }
}

function getLogin($conn){
	if(isset($_POST['loginSubmit'])){
		$uid = $_POST['uid'];
		$pwd = $_POST['pwd'];

		$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
		$result = $conn->query($sql);
		if (mysqli_num_rows($result) > 0) {
			if($row = $result->fetch_assoc()){	
				$_SESSION['id'] = $row=['id'];
				header("Location: index.php?loginsuccess");
				exit();
			}
		}else {
			header("Location: index.php?loginfailed");
			exit();
		}
	}
}

function userLogout(){
	if(isset($_POST['logoutSubmit'])){
		session_start();
		session_destroy();
		header("Location: index.php");
		exit();
	}
}

function createGame($conn){
	if(isset($_POST['CreateGame'])){
		$Team = $_POST['Round'];
		if($Team == null)
        echo "<meta http-equiv='refresh' content='0'>";

	$Round = $_POST['Round'];
	$Date = $_POST['Date'];
	$Team1 = $_POST['Team1'];
	$Team2 =$_POST['Team2'];

		$sql = "INSERT INTO games (round, date, team1, team2) VALUES ('$Round', '$Date', '$Team1', '$Team2')";
		$result = mysqli_query($conn, $sql);

		echo "<meta http-equiv='refresh' content='0'>";
        $_POST['CreateGame'] = null;
	}
}

function getGame($conn){
	$round = 1;

	$test = true;
	while($test){
		
	$test = false;
	$sql = "SELECT * FROM games WHERE round='$round'";
	$result = $conn->query($sql);
		if(mysqli_num_rows($result) > 0){
			echo '
			<div class="matchesRounds">
			<h3 class="current-round">Omgång '.$round.'</h3>
			<div class="item">';
		}
		while($row = $result->fetch_assoc()){
		
			
			echo' 
			  
			<div class="summary match-events">

			<div class="date">'.$row['date'].'</div>
							
							
			<div class="arena">&nbsp;&nbsp;&nbsp;&nbsp;</div>
							
							<div class="teams">
								<!-- <span class="icon-info-circle">i</span> -->

								'.$row['team1'].' - '.$row['team2'].'
							</div>
							<div class="match-score">
								<div>
								'.$row['score1'].' - '.$row['score2'].'
								</div>
							</div></div>';
							
		$test = true;	
		}
		echo "</div></div>";
		$round++;
		
	}
}

function adminGetGame($conn){
	$round = 1;

	$test = true;
	while($test){
		
	$test = false;
	$sql = "SELECT * FROM games WHERE round='$round'";
	$result = $conn->query($sql);
		if(mysqli_num_rows($result) > 0){
			echo '
			<div class="matchesRounds">
			<h3 class="current-round">Omgång '.$round.'</h3>
			<div class="item">';
		}
		while($row = $result->fetch_assoc()){
		
			
	
	echo'   <form method="POST" action="'.updateGame($conn).'">
			<div class="summary match-events">
			<input type="hidden" name="cid"  value="'.$row['cid'].'">
			<div class="date">
			
			<input type="datetime-local" id="meeting-time"
			name="date" value="'.$row['date'].'"
			min="2019-1-01T00:00" max="2019-12-30T00:00">
			</div>
							
							
			<div class="arena">Tunavallen</div>
							
							<div class="teams">
								<!-- <span class="icon-info-circle">i</span> -->

								<input type="text" name="team1"  value="'.$row['team1'].'"> - <input type="text" name="team2"  value="'.$row['team2'].'">
							</div>
							<div class="match-score">
								<div>
								<input type="text" name="score1" class="inputStyle" value="'.$row['score1'].'"> - <input type="text" name="score2" class="inputStyle" value="'.$row['score2'].'">
							<button class="updateButton GreenButton" type="submit" name="updateGame">Update</button>

								</div>

							</div>
							
							</div>


							</form>';
							
		$test = true;	
		}
		echo "</div></div>";
		
		$round++;
		
	}
}
function updateGame($conn){
	if(isset($_POST['updateGame'])){
	$cid = $_POST['cid'];
	$date = $_POST['date'];
	$team1 = $_POST['team1'];
	$team2 = $_POST['team2'];
	$score1 = $_POST['score1'];
	$score2 = $_POST['score2'];
	

		$sql = "UPDATE games SET date='$date', team1='$team1', team2='$team2', score1='$score1', score2='$score2' WHERE cid='$cid'";
		$result = mysqli_query($conn, $sql);

		$_POST['updateGame'] = null;

	}
}

function editGamesMode($conn){

	if(isset($_POST['editGamesMode'])){
	if(isset($_SESSION['gameEditMode'])){
	$_SESSION['gameEditMode'] = null;
	getTableDone($conn);
	}
	else{
	$_SESSION['gameEditMode'] = "ON";
	}
}
}


function getTeamNames($conn){

	
	$teams = array();
	$sql = "SELECT * FROM teams";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()){
		$teams[] .= $row['team'];
	}

	$str= "";
	foreach($teams as $team){
		$str.='<option value="'.$team.'">'.$team.'</option>';
	}
	return $str;
}

function getTableDone($conn){

	$sql = "UPDATE teams SET M=0, V=0, O=0, F=0, GM=0, IM=0, Diff=0, P=0 ";
	$result = mysqli_query($conn, $sql);

	$sql = "SELECT * FROM games ";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()){
		
			if($row['score1']>$row['score2']){
				updateTeamScore($row['team1'], $row['score1'],$row['score2'], 1, $conn);
				updateTeamScore($row['team2'], $row['score2'],$row['score1'], 0, $conn);

			}else if($row['score1']== $row['score2']){
				updateTeamScore($row['team1'], $row['score1'],$row['score2'], 2, $conn);
				updateTeamScore($row['team2'], $row['score2'],$row['score1'], 2, $conn);
			}else
			{
				updateTeamScore($row['team1'], $row['score1'],$row['score2'], 0, $conn);
				updateTeamScore($row['team2'], $row['score2'],$row['score1'], 1, $conn);
			}
		}	
}

function updateTeamScore($team, $score1, $score2, $won, $conn){
	
	if(isset($score1)){
	$points = 0;
	$Oavgjort = false;
	$Vinst = false;
	$Forlust = false;
	if($won==1){
		$Vinst = true;
		}else if($won == 2){
			$Oavgjort = true;
		}else{
			$Forlust = true;
		}
	$sql = "SELECT * FROM teams WHERE team='$team'" ;
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();

	
	$M = $row['M']+1;
	$V = $Vinst ? $row['V'] +1 : $row['V'];
	$O = $Oavgjort ? $row['O']+1 : $row['O'];
	$F = $Forlust ? $row['F']+1 : $row['F'];
	$GM = $row['GM']+$score1;
	$IM = $row['IM']+$score2;
	$Diff = $GM-$IM;
	$P = $Vinst ? $row['P']+3 : $row['P'];
	$P = $Oavgjort ? $row['P']+1 : $P;


	$sql = "UPDATE teams SET M='$M', V='$V', O='$O', F='$F', GM='$GM', IM='$IM', Diff='$Diff', P='$P' WHERE team='$team'";
	$result = mysqli_query($conn, $sql);
	}

}


// echo'    
// 			<td>'.$row['team'].'</td>
// 			<td></td>
// 			<td class="collapsableCell">'.$row['M'].'</td>
// 			<td class="collapsableCell">'.$row['V'].'</td>
// 			<td class="collapsableCell">'.$row['O'].'</td>
// 			<td class="collapsableCell">'.$row['F'].'</td>
// 			<td class="collapsableCell">'.$row['GM'].'</td>
// 			<td class="collapsableCell">'.$row['IM'].'</td>
// 			<td class="collapsableCell">'.$row['Diff'].'</td>
// 			<td class="collapsableCell">'.$row['P'].'</td>
// 		</tr>';

function createSeason($conn){
	
	if(isset($_POST['CrateSeason'])){
	$sql = "DELETE FROM games";
	$result = mysqli_query($conn, $sql);

	$teams = array();
	$sql = "SELECT * FROM teams " ;
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()){

		$teams[] = $row['team'];
	}

	$num_team = count($teams);
	$num_week = count($teams)-1;
	
	 if($num_team % 2 != 0){
	 	$num_week += 2 ;
	 }
	
	$n2 = ($num_team-1)/2;
	
	for($x = 0; $x < $num_team; $x++){
		$teams[$x] = $teams[$x];
	}
	
	for($x = 0; $x < $num_week; $x++){
		for($i = 0; $i < $n2; $i++){
		$team1 = $teams[$n2 - $i];
		$team2 = $teams[$n2 + $i + 1];
		// $results[$team1][$x] = $team2;
		// $results[$team2][$x] = $team1;
		
		$sql = "INSERT INTO games (round, team1, team2, score1, score2) VALUES ('$x', '$team1', '$team2', null, null)";

		$result = mysqli_query($conn, $sql);
	//	echo $team1 . " vs " . $team2 . "<br>";
		}
	//	echo "<br>";
		$tmp = $teams[0]; 
		for($i = 0; $i < count($teams)-1; $i++){
			$teams[$i] = $teams[$i+1];
		}
		$teams[sizeof($teams)-1] = $tmp;
	}
	}
}

function LoadTeamHeader($conn){

	$sql = "SELECT * FROM teams " ;
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()){
		
		 echo '<form method="POST" action="lagen.php"><input type="hidden" name="team" value="'.$row['team'].'"><button type="submit" href="google.com" name="teamSubmit" class="dropdown-item" href="lagen.php">'.$row['team'].'</button></form>';
	}

	
}


function adminGetPlayers($conn, $team){

	$sql = "SELECT * FROM players WHERE team='$team'";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()){

	echo'<tr>
	<td>'.$row['nummer'].'</td>
	<td>
		<a href="http://www.elitefootball.com/player?playerId=28653" target="_blank">'.$row['spelare'].'</a>
	</td>
	<td>'.$row['program'].'<form method="POST" action="'.deletePlayer($conn).'">
	<input type="hidden" name="id" placeholder="Team name" value="'.$row['id'].'">
	<button style="float:right;" type="submit" name="playerDelete">Delete player</button></form></td>
	<td></td>
</tr>';
	}
}
function getPlayers($conn, $team){

	$sql = "SELECT * FROM players WHERE team='$team'";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()){

	echo'<tr>
	<td>'.$row['nummer'].'</td>
	<td>
		<a href="http://www.elitefootball.com/player?playerId=28653" target="_blank">'.$row['spelare'].'</a>
	</td>
	<td>'.$row['program'].'</td>
	<td></td>
</tr>';
	}
}

function createPlayer($conn){
	if(isset($_POST['createPlayerSubmit'])){
		$nummer = $_POST['nummer'];
		$spelare = $_POST['spelare'];
		$program = $_POST['program'];
		$team = $_POST['lag'];

		if($spelare == null)
        echo "<meta http-equiv='refresh' content='0'>";

		$sql = "INSERT INTO players (nummer, spelare, program, team) VALUES ('$nummer', '$spelare', '$program', '$team')";
		$result = mysqli_query($conn, $sql);

		echo "<meta http-equiv='refresh' content='0'>";
        $_POST['createPlayerSubmit'] = null;
	}
}

function deletePlayer($conn){
	if(isset($_POST['playerDelete'])){
		$id = $_POST['id'];
	
		$sql = "DELETE FROM players WHERE id='$id'";
		$result = mysqli_query($conn, $sql);
	
		echo "<meta http-equiv='refresh' content='0'>";
		
		//header("Location: AdminControl.php?".$cid."Delete=success");
	
	  }
}

function getTeamImg($conn){

	$team = $_SESSION['team'];
	$sql = "SELECT * FROM img WHERE team='$team'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	
	return $row['img'];
}

function getEarlyDate($conn){

    date_default_timezone_set('Europe/Berlin');
	$CurrentTime = date('Y-m-d H:i:s');
	$sql = "SELECT MIN(date) as EarliestDate FROM games WHERE date>'$CurrentTime'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();

	return $row['EarliestDate'];
}

function getNextGame($conn){

	 $date = getEarlyDAte($conn);
	 $time = date("Y-m-d",strtotime($date));
	 $sql = "SELECT * FROM games WHERE Convert(DATE, date) = '$time'";
	 $result = $conn->query($sql);
	 
	 while($row = $result->fetch_assoc()){
		$newDate = date("Y-m-d", strtotime($row['date']));
		echo'<div class="NextGameDiv">

						
						
						
							<!-- <span class="icon-info-circle">i</span> -->

							<p class="gameDivLeftP">'.$row['team1'].'</p>  <p class="gameDivRightP">'.$row['team2'].'</p>
						</div>';
	 }
}

		//<div class="NextGameDate">'.$row['date'].'</div>
		//<div class="NextGameArena">Tunavallen</div>
