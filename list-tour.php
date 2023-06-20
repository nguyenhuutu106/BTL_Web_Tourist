
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách tour</title>
    <link rel="icon" href="./assets/img/Logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="./assets/boostrap/bootstrap-4.5.2.css">
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/main.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="./assets/responsive.css">
</head>

<style>
    .app-list-tour .header{
        z-index: 1;
    }

    .list-tour__pagination{
        padding: 32px 0;
    }

    .list-tour__pagination li{
        padding: 0 4px;
    }

    .page-item .page-link{
      z-index: 0 !important;
    }
   
</style>
<body>
<?php
    require_once 'connect.php';
    $query = "select * from tour";
    $tourQuery = mysqli_query($conn, $query);
    $tours = array();
    while ($record = mysqli_fetch_assoc($tourQuery)) {
        $tours[] = $record;
    }
?>
  <!-- Main list-tour -->
    <div class="app-list-tour">
        <header class="header">
            <nav class="navbar navbar-expand-md ">
                <a class="navbar-brand" href="#">
                    <img src="./assets/img/Logo.png" class="logo" alt="logo" width="80" height="80">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon">
                    <i class="fas fa-bars bar-icon"></i>
                  </span>
                </button>
    
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav navbar-main-nav">
                        <li class="nav-item">
                            <a class="nav-link nav-link--view-all" href="#">Tất cả</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Văn hóa lịch sử</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="">Khám phám sinh thái</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Nghỉ dưỡng</a>
                        </li>  
                        <li class="nav-item">
                          <button class="nav-link active user-booked-tour-link" >
                            <i class="fas fa-check"></i>
                          Tour đã chọn</button>
                      </li>   
                    </ul>
                    <ul class="navbar-nav user-control user-control-list-tour">
                      <!-- <li class="nav-item login-text">
                        <a href="./app/log-in.html" class="nav-link login-link">Đăng nhập</a>
                      </li>
                      <li class="nav-item register-text">
                        <a href="./app/register.html" class="nav-link register-link">Đăng ký</a>
                      </li> -->
                      <li class="nav-item logout-text">
                        <a href="./log-out.php" class="nav-link logout-link">Đăng xuất</a>
                      </li>
                      
                      <!-- Notify -->
                      <!-- <span class="notification-icon">
                        <i class="far fa-bell"></i>
                        <div class="notification-content">
                            <div class="text-center notification-title">Thông báo</div>
                            <ul class="list-notification">
                              <li>Chọn tour thành công</li>
                              <li>Chọn tour thất bại</li>
                              <li>Chúc mừng bạn nhận được ưu đãi</li>
                             
                            </ul>
                            <div class="text-center view-all">Xem tất cả</div>
                        </div>
                      </span> -->
                      <!-- User -->
                      <li class="nav-item user">
                        <i class="far fa-user"></i>
                        <div class="user-options">
                          <div class="user__setting"><i class="fas fa-user-cog"></i>Sửa thông tin</div>
                          <!-- <div class="user__logout"><i class="fas fa-sign-out-alt"></i>Đăng xuất</div> -->
                        </div>
                      </li>
                    </ul>
    
                   
                </div>  
                <button class="show-nav-btn">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars bar-icon"></i></span>
                </button>
                
            </nav>
        </header>

        <!-- Main content -->
        <div id="js-list-tour__content" class="container content list-tour__content" >
          <input type="text" class="list-tour__search" placeholder="Tìm kiếm">
          <div id="page-one" class="row list-tour">
              <!-- Place-item -->
              <?php foreach ($tours as $tour) :?>
              <form class="col-sm-12 col-md-6 col-xl-3 card tour" action="btn-buy.php" method="GET" style="width:400px">
              <input type="hidden" name="tourId" value="<?= $tour['ID_Tour']?>">  
              <div class="tour__img">
                      <img class="card-img-top" src="./assets/img/<?= $tour['Anh_Tour'] ?>" alt="Card image" style="width:100%">
                      <h4 class="card-title tour__title"><?= $tour['Ten_Tour'] ?></h4>
                      <p class="quantity-customers"><?= $tour['SoLuong_Tour'] ?>
                          <span>Số lượng Tour</span>
                      </p>
                  </div>
                  <div class="card-body">
                      <h4 class="tour__city"><?= $tour['DiaDiem_Tour'] ?></h4>
                      <p class="card-text tour__desc"><?= $tour['NoiDung_Tour'] ?></p>
                      <input type="hidden" name="tourPrice" value="<?= $tour['Gia_Tour']?>"> Giá: <?= $tour['Gia_Tour'] ?> VNĐ</p>
                    <p class="row quantity-bookers">
                        <button class="btn reduce-btn">-</button>
                        <span class="quantity-booker">1</span>
                        <button class="btn increase-btn">+</button>
                    </p>
                    <button class="btn buy-btn" type="submit" >Đặt ngay</button>

                    <!-- Nút thành công -->
                    <button class="btn buy-btn buy-btn--success"> <i class="fas fa-check"></i>Đặt thành công</button>
                    
                  </div>
              </form>
              <?php endforeach; ?>
              </div>
          </div>
         
        </div>
        
         <!-- Setting -->
        <div id="setting" >
          <div id="modal-setting">
              <div class="btn-close ">
                <i class="fas fa-times"></i>
              </div>

              <div class="modal-setting__label">
                <img class="text-center" src="./assets/img/Logo.png" alt="" width="80" height="80">
                <span class="label-app">Viet Tour</span>
              </div>

              <!-- Setting content -->
              <div class="modal-setting__content">
                  <form action="" method="POST">
                <div class="modal-setting__input-section">
                  <label for="name-setting">Họ tên:</label>
                  <input type="text" name="name" id="name-setting" placeholder="Họ tên">
                </div>

                <div class="modal-setting__input-section">
                  <label for="place-setting">Địa chỉ:</label>
                  <input type="text" name="place" id="place-setting" placeholder="Địa chỉ">
                </div>

                <div class="modal-setting__input-section">
                  <label for="phone-number-setting">Số điện thoại:</label>
                  <input type="tel" name="phone-number" id="phone-number-setting" placeholder="Số điện thoại">
                </div>

                <div class="modal-setting__input-section">
                  <label for="old-password-setting">Mật khẩu cũ:</label>
                  <input type="password" name="password-register" id="old-password-setting" placeholder="Mật khẩu">
                </div>

                <div class="modal-setting__input-section">
                  <label for="password-setting">Mật khẩu mới:</label>
                  <input type="password" name="password-setting" id="password-setting" placeholder="Mật khẩu mới">
                </div>
                  <?php
                  require_once 'connect.php';
                  if (isset($_POST['setting__btn'])){
                      if (!empty($_POST['name']) && !empty($_POST['place']) && !empty($_POST['phone-number']) && !empty($_POST['password-register']) && !empty($_POST['password-setting']) ) {
                          $newName = $_POST['name'];
                          $newPlace = $_POST['place'];
                          $newPhoneNumber = $_POST['phone-number'];
                          $oldPwdRegister = $_POST['password-register'];
                          $newPwdSetting = $_POST['password-setting'];

                          $userID =$_SESSION['user-id'];
                          $query = "update khach set Ten_Khach = '$newName' ,DiaChi_Khach = '$newPlace' , SDT_Khach = '$newPhoneNumber' , MatKhau_TaiKhoan = '$newPwdSetting' WHERE ID_Khach = '$userID' ";

                          $userQuery = mysqli_query($conn, $query)  ;

                          if ($userQuery == $userID) {
                              echo "Cập nhật thành công";
                          } else {
                              echo "Cập nhật thất bại";
                          }
                      }
                      else {
                          echo "Bạn chưa nhập tất cả các ô nhập!" ;
                      }
                  }
                  ?>
                  <button type="submit" name="setting__btn" class="btn setting__btn">Lưu</button>
                  </form>
              </div>


          </div>
        </div>

        <!-- User tour -->
        <!-- Thêm các tour đã chọn ở đây -->
<?php
require_once 'connect.php';

$userID =$_SESSION['user-id'];
$query = "select a.ID_DatTour, b.ID_Tour , b.Ten_Tour , a.NgayDat_DatTour , a.Soluong_DatTour , a.TongTien_DatTour , c.ID_Khach , a.TrangThai_DatTour
                     From dattour as a , tour as b , khach as c 
                     WHERE c.ID_Khach = a.ID_Khach AND c.ID_Khach = '$userID' AND a.ID_Tour = b.ID_Tour ; ";
$tourQuery = mysqli_query($conn, $query);
$tours = array();
while ($record = mysqli_fetch_assoc($tourQuery)) {
    $tours[] = $record;
}
?>
        <div id="user-booked-tour" class="list-tour__content " style="display: none;">
          <div class="user__booked-tour">
              <h3 class="text-center">Danh sách đơn đặt tour</h3>
              <table id="user-booked-tour__table">
                  <thead >
                      <th class="">STT</th>
                      <th class="">Mã đơn</th>
                      <th class="">Mã tour</th>
                      <th class="">Tên tour</th>
                      <th class="">Ngày đặt tour</th>
                      <th class="">Số lượng khách</th>
                      <th class="">Tổng tiền</th>
                      <th class="">Xử lý <br/>
                      </th>
                  </thead>
                  <?php $stt = 1;
                  foreach ($tours as $tour) :?>
                  <thead class="list-info-booked-tour__table">
                  <th><?= $stt?></th>
                  <th><?= $tour['ID_DatTour'] ?></th>
                  <th><?= $tour['ID_Tour'] ?></th>
                  <th><?= $tour['Ten_Tour'] ?></th>
                  <th><?= $tour['NgayDat_DatTour'] ?></th>
                  <th><?= $tour['Soluong_DatTour'] ?></th>
                  <th><?= $tour['TongTien_DatTour'] ?></th>
                  <?php if (!$tour['TrangThai_DatTour']):?>
                      <th><a href="reject1.php?tourId=<?= $tour['ID_DatTour']?>">Từ chối</a></th>
                  <?php else: ?>
                  <th><?= $tour['TrangThai_DatTour'] ?></th>
                  <?php endif ?>
                </thead>
                  <?php $stt ++;
                  endforeach; ?>
              </table>
          </div>
      </div>

     </body>
