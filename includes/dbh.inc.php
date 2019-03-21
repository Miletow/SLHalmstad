<?php

$conn = mysqli_connect('slhalmstad.se.mysql', 'slhalmstad_se', 'ZDN7pUcmKtgukyjMfZGVKzPR', 'slhalmstad_se');

if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}