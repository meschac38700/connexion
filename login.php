<?php 
require "conn.php";
$username = $_POST['user_name'];
$user_pass = $_POST["password"];
$sign=$_POST["s"];

$req=$bdd->prepare("select password from employee_data where username=:username");
$response=$req->execute( array(':username'=>$username) ) or die('Erreur with SQL');

while ($row = $response->fetchALL()){
echo $row['password'];

}
$req = $bdd->prepare("select * from employee_data where username=:username and password=:user_pass ");
$response = $req->execute( array(':username'=>$username, ':user_pass'=>$password) ) or die('Erreur lors de execution');
 
  while ($row = $response->fetchALL()) {
	  
	  if($row>0){
	 	echo "ok";
	  }else{
		  echo "login failed !!!";
	  }


	  
}



 
?>