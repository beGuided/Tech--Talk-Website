<?php 



function Read(){
global $connection;

	$query= 'SELECT * FROM users';
	$all_user_query =mysqli_query($connection, $query);

	  if (!$all_user_query) {
        die('failed'. mysqli_error($connection));}

while ($row = mysqli_fetch_assoc($all_user_query)){

$first_name= $row['first_name'];
$last_name= $row['last_name'];

// echo "$first_name";
// echo "$last_name";
}

};

// function createUser(){
// 	global $connection;
	
// }








?>