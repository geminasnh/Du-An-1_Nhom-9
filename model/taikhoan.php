<?php 
function insert_taikhoan($email, $user, $pass){
  $sql = "INSERT INTO taikhoan(email,user,pass) VALUES ('$email','$user','$pass')";
  pdo_execute($sql);
}
function check_user($user, $pass){
$sql = "SELECT * FROM taikhoan WHERE user='".$user."' AND pass='".$pass."'";
$sp = pdo_query_one($sql);
return $sp;
}
function update_taikhoan($idtk,$email, $user, $pass,$tel,$address){
  $sql = "UPDATE taikhoan SET email='".$email."', user='".$user."',pass='".$pass."',tel='".$tel."', address='".$address."' where idtk=".$idtk;
  pdo_execute($sql);
}
?>