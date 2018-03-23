<?php
$conn = mysqli_connect("localhost", "root", "5583sw");
mysqli_select_db($conn, "newdata");
$sql="INSERT INTO note(name,email,title,message) VALUES('".$_POST['name']."','".$_POST['email']."','".$_POST['title']."','".$_POST['message']."')";
$result = mysqli_query($conn, $sql);
header('Location:http://121.128.156.42/bokji/freeboard.php');
// 로컬 호스트가 아닌 IP 주소로 입력해야됨
?>
