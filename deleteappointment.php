<?php
    $conn = mysqli_connect("localhost", "root", "", "kaal_akuma");
    
    $appid=$_POST['appointmentID'];
  	$btn=$_POST['btn'];

    if($btn=="Delete Appointment"){
      $query="DELETE FROM booking WHERE APPOINTMENT_ID='$appid';";
      mysqli_query($conn,$query);
      if($query)
        echo "Appointment Deleted Successfully. <a href='http://localhost/kaalakuma/adminpages.php'>Click Here to Continue</a>";
      mysqli_close($conn);
    }

?>