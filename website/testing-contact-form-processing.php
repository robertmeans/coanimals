<?php
function is_post_request() {
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}


$name = $_POST['name'];
$phone = $_POST['phone'];  
$email = $_POST['email'];
$message = $_POST['comments'];

mail($email, $name, "woot!");


?>