<?php

require_once 'connect.php';

$tourID = $_GET['tourId'];
$userID =$_SESSION['user-id'];
$tourPrice= $_GET['tourPrice'];
$query = "insert into dattour(ID_DatTour,TongTien_DatTour,Soluong_DatTour,TrangThai_DatTour,ID_Khach,ID_Tour) values ('','$tourPrice','1','','$userID','$tourID')" ;

$tourQuery = mysqli_query($conn,$query);

$query1 = "update tour set SoLuong_Tour = SoLuong_Tour - '1' where ID_Tour = '$tourID';" ;

$tourQuery1 = mysqli_query($conn,$query1);

header( "Location: http://localhost/BTL-Web/list-tour.php" );
?>