<?php

$con=mysqli_connect("localhost","root","","web") or die("Burger of!");

$nm=$_POST['name'];
$cont=$_POST['number'];
$email=$_POST['email'];
$res_a=$_POST['res_add'];
$sup_a=$_POST['sup_add'];
$date=$_POST['ddate'];
$quantity=$_POST['no_jugs'];
$freq=$_POST['radio'];
$size=$_POST['radio111'];

$query="Insert into customer(Name,Contact_no,Email_id,Res_address,Supp_address,Del_date,num_of_jugs,Frequency,Size) values('".$nm."','".$cont."','".$email."','".$res_a."','".$sup_a."','".$date."','".$quantity."','".$freq."','".$size."');";

//rs=mysqli_query($con,$query);
/*if(mysqli_query($con,$query)) 
{
	echo "Success";
}
else{
	echo "better luck next time";
}*/

if(mysqli_query($con,$query))
{
    echo "Registered";
    mysqli_close($con);
	exit();   
}

?>