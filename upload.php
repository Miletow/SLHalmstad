<?php
session_start();
include 'includes/dbh.inc.php';

if(isset($_POST['submit'])){
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    $team = $_SESSION['team'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if (in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if ($fileSize < 5000000) {
                $sql = "DELETE FROM img WHERE team='$team'";
                $result = mysqli_query($conn, $sql);
                $sql = "INSERT INTO img (img, team) VALUES ('$fileName', '$team')";
                $result = mysqli_query($conn, $sql);
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileName;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: lagen.php?uploadsuccess");
            }else{
                echo "Your file is too big!";
            }
        }else{
            echo "There was an error uploading your file!";
        }
    }else{
        echo "You cannot upload files of this type!";
    }

}