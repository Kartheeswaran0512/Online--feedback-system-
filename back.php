<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="feedback";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
	 $number = $_POST['number'];
	 $email = $_POST['email'];
     $text=$_POST['text'];

	 $sql_query = "INSERT INTO details (first_name,last_name,number,email,text)
	 VALUES ('$first_name','$last_name','$number','$email','$text')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New students Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 /*$query="select *from register where email="siva@gmail.com";
	 $res=$mysqli_query($query);
	 if($res){
	 	if(mysqli_num_rows($res)>0){
	 		echo"found";
	 	}
	 	else{
	 		echo"not found";
	 	}
	 }*/
	 mysqli_close($conn);
}
?>