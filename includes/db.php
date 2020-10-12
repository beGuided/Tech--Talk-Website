<?php

$connection=mysqli_connect("localhost", "root","","tech_talk");

if(!$connection){
	die('failed query' . mysql_error($connection));
}else{
	//echo'connecttion is successful';
}

 

?>