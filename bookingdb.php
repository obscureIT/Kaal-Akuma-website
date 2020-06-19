<?php
	$conn = mysqli_connect("localhost", "root", "", "kaal_akuma", "3306");

	$username = $_POST['username']; //username
  $phone = $_POST['phone']; //phonenumber
  $email = $_POST['email']; //email
  $companyname = $_POST['companyname']; //new
	$location = $_POST['location']; //address
	$dates1 =$_POST['dates']; //date of gig
 	$dates2 = date("yy-m-d", strtotime($dates1));

	
  /*$count=0;
  $usercount=0;

  $query="SELECT * FROM users WHERE PREFERRED_DATE='$dates2' AND COMPANY_NAME='$companyname';";
  $result=$conn->query($query);
  while($rows=$result->fetch_assoc()){
      $count=$count+1;
  }
  $query="SELECT * FROM users WHERE PREFERRED_DATE='$dates2' AND NAME='$username';";
  $result=$conn->query($query);
  while($rows=$result->fetch_assoc()){
      $usercount=$usercount+1;
  }/**/


  /*if($count>=4) {
    echo "Appointment Cannot be Made. Mechanic is busy on that day. Please chose another mechanic. <a href='http://localhost/assignment3/user_panel.html'>Click Here to return to appointment page</a>";

  } else if($usercount==1){
    echo "Appointment already made for that day. <a href='http://localhost/assignment3/user_panel.html'>Click Here to return to appointment page</a>";

  }else{
    $query2 = "INSERT INTO users (NAME, PHONE, EMAIL, COMPANY_NAME, GIG_LOCATION, PREFERRED_DATE)VALUES ('$username', '$phone','$email','$companyname','$location','$dates2');";
    mysqli_query($conn,$query2);
    if($query2)
      echo"We have been notified about the Gig. We will contact via email. <a href='http://localhost/kaalakuma/index.html'>Click Here to return to home</a>";
  }*/

  $query2 = "INSERT INTO booking (NAME, PHONE, EMAIL, COMPANY_NAME, GIG_LOCATION, PREFERRED_DATE)VALUES ('$username', '$phone','$email','$companyname','$location','$dates2');";
    mysqli_query($conn,$query2);
    if($query2)
      echo"We have been notified about the Gig. We will contact you via email. <a href='http://localhost/kaalakuma/index.html'>Click Here to return to home</a>";
?>