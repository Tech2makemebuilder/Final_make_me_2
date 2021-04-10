<?php
if(isset($_POST['submit'])){

$FName = $_POST["FName"];
$LName = $_POST["LName"];
$Number=$_POST["Number"];
$Address1=$_POST["Address1"];
$Address2=$_POST["Address2"];
$City=$_POST["City"];
$State=$_POST["State"];
$Pincode=$_POST["Pincode"];
$Experience=$_POST["Experience"];


$Email=$_POST["Email"];
$UserName=$_POST["UserName"];
$Password=$_POST["Password"];


$target_id_dir = "images/idproof/";
$target_profpic_dir = "images/profpic/";
$profPicName=time() . '_' . $UserName . "_profilePic.png";
$idProofName=time() . '_' . $UserName . "_idProof.png";
$targetid = $target_id_dir . $idProofName;
$targetprof = $target_profpic_dir . $profPicName;

if (move_uploaded_file($_FILES["profPic"]["tmp_name"], $targetprof) && move_uploaded_file($_FILES["idProof"]["tmp_name"], $targetid) && !empty($FName) || !empty($LName) || !empty($Number) || !empty($Address1) || !empty($Address2) || !empty($City) || !empty($State) || !empty($Pincode) || !empty($Experience) || !empty($UserName) || !empty($email) || !empty($Password)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "brokerinfo";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT Email, UserName From register Where Email = ? or UserName = ? Limit 1";
     $INSERT = "INSERT Into register values('$FName', '$LName', '$Number', '$Address1', '$Address2', '$City', '$State', '$Pincode', '$Experience', '$targetid', '$targetprof', '$Email', '$UserName', '$Password')";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("ss", $Email, $UserName);
     $stmt->execute();
     $stmt->bind_result($Email, $UserName);
     $stmt->store_result();
     $stmt->fetch();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
        $stmt = $conn->prepare($INSERT);
        if(mysqli_query($conn, $INSERT)){
            echo "<h1><center>Thank you for registering.<br>We will get back to you shorty after reviewing</center></h1>";
      }
      else{
          echo "<h1><center>Error ". $conn->error ." </h1></center>";
      }
     } else {
      echo "Someone already has this email/username";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
}
?>