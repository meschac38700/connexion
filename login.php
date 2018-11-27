<?php 
require "conn.php";
$username = $_POST['user_name'];
$user_pass = $_POST["password"];
$sign=$_POST["s"];

$req=$bdd->prepare("select password from employee_data where username like "joel"");
$response=$req->execute() or die('Erreur with SQL');

while ($row = $req->fetchALL()){
echo $row['password'];

}
$req = $bdd->prepare("select * from employee_data where username like '$username' and password like '$user_pass' ");
 $response = $req->execute() or die('Erreur lors de execution');
 
  while ($row = $req->fetchALL()) {
	  
	  if($row>0){
	 	echo "ok";
	  }else{
		  echo "login failed !!!";
	  }


	  
}



 
?>