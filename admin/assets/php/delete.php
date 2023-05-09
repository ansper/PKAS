<?php
  $id = $_POST['id'];
  $table = $_POST['table'];
  include('../../../assets/php/connect.php');
  $sql = "DELETE FROM $table WHERE id=$id";
  mysqli_query($conn, $sql);
  mysqli_close($conn);
  header('Location: ../../admin.php');
?>