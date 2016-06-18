<html>
<head>
	<title>Your Information System</title>
</head>
<body>

<?php

                $db = mysqli_connect("localhost","root","","t"); 
                    //echo "<p>connection establish</p>";
                    if (!$db) {
                        die("Database connection failed miserably: " . mysql_error());
                    }

                    //-----------------------customer details-------------------------

                    $Grooms_Name = mysqli_real_escape_string($db,$_POST['gName']);
                    $Brides_Name = mysqli_real_escape_string($db,$_POST['bName']);
                    $Date = mysqli_real_escape_string($db,$_POST['date']);
                    $Address_1 = mysqli_real_escape_string($db,$_POST['address_1']);
                    $Address_2 = mysqli_real_escape_string($db,$_POST['address_2']);
                    $Address_3 = mysqli_real_escape_string($db,$_POST['address_3']);
                    $tel = mysqli_real_escape_string($db,$_POST['tp']);

                    mysqli_query($db,"SELECT * FROM customer_details");
                    $sql1 = "INSERT INTO customer_details(Grooms_Name,Brides_Name,Wedding_Date,Address_1,Address_2,Address_3,Contact_Number)
                    VALUES ('$Grooms_Name','$Brides_Name','$Date','$Address_1','$Address_2','$Address_3','$tel') " ;
                    $retval1 = mysqli_query($db,$sql1);

                    //--------------------------Booking hotel---------------------------

                    $Hotel_Name = mysqli_real_escape_string($db,$_POST['hotelName']);
                    $Booking_Period1 = mysqli_real_escape_string($db,$_POST['to']);
                    $Booking_Period2 = mysqli_real_escape_string($db,$_POST['from']);
                    $Theme = mysqli_real_escape_string($db,$_POST['colour']);

                    mysqli_query($db,"SELECT * FROM Booking_Hotel");
                    $sql2 = "INSERT INTO Booking_Hotel(Hotel_Name,Booking_Period_time1,Booking_Period_time2,Theme)
                    VALUES('$Hotel_Name','$Booking_Period1','$Booking_Period2','$Theme') " ;
                    $retval2 = mysqli_query($db,$sql2);

                    //------------------------Transport package-----------------------------
                    $Transport_package = mysqli_real_escape_string($db,$_POST['transport']);

                    mysqli_query($db,"SELECT * FROM Transport");
                    //$reg_number = "SELECT Reg_number FROM customer_details";
                    //$reg = mysqli_query($db, $reg_number);
                    
                    $sql3 = "INSERT INTO Transport(Transport_package)
                    VALUES('$Transport_package') " ;
                    $retval3 = mysqli_query($db,$sql3);
                    
                    

                    //-------------------------beauty palour---------------------------------

                    $Address = mysqli_real_escape_string($db,$_POST['address']);
                    $Saloon = mysqli_real_escape_string($db,$_POST['saloon']);

                    mysqli_query($db,"SELECT * FROM Beauty_parlour");
                    $sql4 = "INSERT INTO Beauty_parlour(Saloon,Address)
                    VALUES('$Saloon','$Address') " ;
                    $retval4 = mysqli_query($db,$sql4);

                    //--------------------Wedding Packages------------------------------

                    
                    $pkg = mysqli_real_escape_string($db,$_POST['pkg']);

                    mysqli_query($db,"SELECT * FROM Wedding_Packages");
                    $sql5 = "INSERT INTO Wedding_Packages(Packages)
                    VALUES('$pkg') " ;
                    $retval5 = mysqli_query($db,$sql5);

                    //------------------------------------------------------------------

                    if(! ($retval1  && $retval2 && $retval3 && $retval4) ) {
                        echo "<p>Entered Values successfully</p>";
                        echo "<p>Thank You!!!</p>";
                    }

                
                    /*
                     echo "<p>$Grooms_Name</p>";
                     echo "<p>$Brides_Name</p>";
                     echo "<p>$Date </p>";
                     echo "<p><i>$Address_1</i></p>";
                     echo "<p><i>$Address_2</i></p>";
                     echo "<p><i>$Address_3</i></p>";

                     echo "<p>$Hotel_Name</p>";
                     echo "<p>$Booking_Period1</p>";
                     echo "<p>$Booking_Period2</p>";
                     echo "<p>$Theme </p>";

                    echo "<p><i>$Transport_package</i></p>";
                    echo "<p>$Cosmatics_Packages </p>";
                    echo "<p>$Saloon </p>";

                    echo "<p>$pkg</p>";
                    */

                      mysqli_close($db);
                ?>

                   <div style="text-align:center"><h1 ><p>Entered Values successfully</p>
                            <p>Thank You!!!</p>
                   </h1></div>
                       

    


</body>
</html>