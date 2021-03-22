<?php

$con = mysqli_connect('localhost','root');
if($con)
{
  echo "connection sucessful";

}else
{
  echo "no connection";
}

mysqli_select_db($con,'website30.09');

$user = $_POST['user'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];
$query = "insert into userinfodata (user, email, feedback) values('$user','$email','$feedback')";

echo "$query";
mysqli_query($con,$query);
?>
