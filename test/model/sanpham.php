<?php 
function loadall_sp(){
  $sql = "SELECT * FROM sanpham";
  $list_sp = pdo_query($sql);
  return $list_sp;
}
function loadone_sp($id){
  $sql = "SELECT * FROM sanpham WHERE id=$id";
  $sp = pdo_query_one($sql);
  return $sp;
}
?>