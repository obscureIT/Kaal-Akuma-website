<?php
    $conn = mysqli_connect("localhost", "root", "", "kaal_akuma");
    $query="SELECT * FROM booking";
    $result= $conn->query($query);
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!--<meta http-equiv="refresh" content="20">-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
    </head>
    <body  onload="getFiles()">

        <div class="header">
        <div class="inner_header">
            <div class="logo_container">
                <h1><img src="images/logo.jpg"></h1>
            </div>

            <ul class="navigation">
                <a href="http://localhost/kaalakuma/index.html"><li>Home</li></a>
                <a href="http://localhost/kaalakuma/music.html"><li>Music</li></a>
                <a href="http://localhost/kaalakuma/merchandise.html"><li>Merchandise</li></a>
                <a href=""><li>Tour</li></a>
                <a href="http://localhost/kaalakuma/booking.html"><li>Booking</li></a>
            </ul>
        </div>
    </div>

        

    <div class="content-adminpages" style="width: 80%">
        <table align="center"  style=" line-height: 20px; margin: 0 auto; padding:40px 20px 40px 20px; color: white" >
            <tr>
                <th colspan="8"><h2>Companies/Event Planners who have contacted you for concerts</h2></th>
            </tr>
            <t>
                <th>Appointment ID</th>
                <th>Client Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Company Name</th>
                <th>Gig Location</th>
                <th>Gig Date</th>
            </t>
        <?php
            while($rows=$result->fetch_assoc()) {
        ?>
                 <tr>
                    <td><?php echo $rows['APPOINTMENT_ID'];?></td>
                    <td><?php echo $rows['NAME'];?></td>
                    <td><?php echo $rows['PHONE'];?></td>
                    <td><?php echo $rows['EMAIL'];?></td>
                    <td><?php echo $rows['COMPANY_NAME'];?></td>
                    <td><?php echo $rows['GIG_LOCATION'];?></td>
                    <td><?php echo $rows['PREFERRED_DATE'];?></td>
                 </tr>
        <?php
            }
            $conn->close();
         ?>
        </table>
        
    </div>

    <div id="update-appointment-form">

        <form name="update_appointment" action="deleteappointment.php" method="POST">
            <p>
                <label style="padding-left: 5px; padding-right: 52px;">Select Appointment ID:</label>
                <input type="number" id="appointmentID" name="appointmentID" required />
            </p>
            
            
            <p>
                <input style="margin-left: 200px; background-color:#005FA1;margin-top: 30px;" type="submit" id="btn" name="btn" value="Delete Appointment">
            </p>
    
            </form>
        </div>
    </body>
    <style type="text/css">
    body{
        background-image: url(css/rrrrskullpattern_shop_preview.jpg);
        background-attachment: fixed;
    }
    h1{
        font-weight: bold;
        font-size: 30px;
        font-family: "calibri", Garamond, 'Comic Sans MS';
        text-align: center;
        margin-top:30px;
    }
    th,td{
        padding:10px; 
        text-align: center;
        border-bottom: 1px solid #ddd;
    }
    #frm{
            border: solid gray 5px;
            width: 50%;
            border-radius: 5px;
            margin: 50px auto;
            background: black;
            padding: 50px;
            color: white;
            margin-bottom: 0px;
    }
    #btn{
        background-color: #cd6155 ;
        border: none;
        color: white;
        padding: 5px 14px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        margin: 4px 2px;
        cursor: pointer;
    }
    </style>

    <script type="text/javascript">
      </script>

</html>