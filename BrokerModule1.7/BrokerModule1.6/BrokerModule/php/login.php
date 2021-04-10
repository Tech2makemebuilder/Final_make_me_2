<?php
    session_start();
    if (isset($_POST['login']))
    {
      $host = "localhost";
      $dbUsername = "root";
      $dbPassword = "";
      $dbname = "brokerinfo";
      //create connection
      $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

      if (mysqli_connect_error()) {
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
      } 
      $email = $_POST['user'];
      $password = $_POST['pass'];
        //to prevent from mysqli injection
      $email = stripcslashes($email);
      $password = stripcslashes($password);
      $email = mysqli_real_escape_string($conn, $email);
      $password = mysqli_real_escape_string($conn, $password);

      $sql = "select * from register where email = '$email' and password = '$password'";  
      $result = mysqli_query($conn, $sql);  
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
      $count = mysqli_num_rows($result); 

      if($count == 1){
        $_SESSION['valid'] = true;
        $_SESSION['UserName'] = $row['UserName'];
        $_SESSION['Email'] = $row['Email'];
        $_SESSION['FName'] = $row['FName'];
        $_SESSION['LName'] = $row['LName'];
        $_SESSION['Number'] = $row['Number'];
        $_SESSION['Address1'] = $row['Address1'];
        $_SESSION['Address2'] = $row['Address2'];
        $_SESSION['City'] = $row['City'];
        $_SESSION['State'] = $row['State'];
        $_SESSION['Pincode'] = $row['Pincode'];
        $_SESSION['Experience'] = $row['Experience'];
        $_SESSION['ProfPic'] = $row['profPic'];
        header("Location: profile.php");
      }
      else{
        echo "<h1> Login failed. Invalid email or password.</h1>";
      }
    }
    

?>