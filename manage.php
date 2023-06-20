<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý</title>
    <link rel="icon" href="./assets/img/Logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="./assets/boostrap/bootstrap-4.5.2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="./assets/responsive.css">
    <script src="./assets/js/main.js"></script>
    <link rel="stylesheet" href="./assets/js/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="./assets/js/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="./assets/js/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body>
    <!-- Main -->
    <div class="app-manage">
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
                            <span id="manage-info-tour-link" class="nav-link" href="#">Quản lý tour</span>
                        </li>
                      <li class="nav-item">
                        <span id="manage-user-link" class="nav-link" href="#trend-places">Quản lý người dùng</span>
                      </li>
                      <li class="nav-item">
                        <span id="manage-user-booked-tour-link" class="nav-link" href="#category">Quản lý đơn đặt tour</span>
                       
                      </li>
                         
                    </ul>

                    <div class="nav-item logout-text">
                        <a href="../BTL-WEB/app/log-in-manage.html" class="nav-link logout-link" style="color: var(--white-color)">Đăng xuất</a>
                    </div>
                  </div>  

                  
            </nav>
        </header>

        <!-- Manage infor tour -->
        <div class="row manage-content manage-info-tour" >
            <div class="col-xl-3 col-md-3 col-sm-12 contain-list-manage">
                <form action="" method="POST">
                    <div class="mange-info-tour__item">
                        <p for="">Mã tour</p>
                        <input type="text" name="tour-id" id="tour-id" placeholder="Mã tour">
                    </div>
                    <div class="mange-info-tour__item">
                        <p for="">Tên tour</p>
                        <input type="text" name="tour-name" id="tour-name" placeholder="Tên tour">
                    </div>
                    <div class="mange-info-tour__item">
                        <p for="">Địa điểm tour</p>
                        <input type="text" name="tour-address" id="tour-address" placeholder="Địa điểm tour">
                    </div>
                    <div class="mange-info-tour__item">
                        <p for="">Ảnh tour</p>
                        <input type="text" name="tour-img" id="tour-img" placeholder="Đường dẫn ảnh tour">
                    </div>
                    <div class="mange-info-tour__item">
                        <p for="">Giá tour</p>
                        <input type="number" name="tour-price" id="tour-price" placeholder="Giá tour">
                    </div>
                    <div class="mange-info-tour__item">
                        <p for="">Số lượng</p>
                        <input type="number" name="tour-list" id="tour-list" placeholder="Số lượng">
                    </div>
                    <div class="mange-info-tour__item">
                        <p for="">Thể loại</p>
                        <input type="text" name="tour-type" id="tour-type" placeholder="Thể loại">
                    </div>
                    <div class="mange-info-tour__item">
                        <p for="">Nội dung</p>
                        <input type="text" name="tour-content" id="tour-content" placeholder="Nội dung">
                    </div>
                    <div class="row manage-info-tour__control-btns">
<!--                        Thêm Tour-->
                        <?php
                        require_once 'connect.php';
                        if (isset($_POST['mange-info-tour__btn--save'])){
                            if (!empty($_POST['tour-id']) && !empty($_POST['tour-name']) && !empty($_POST['tour-address']) && !empty($_POST['tour-img']) && !empty($_POST['tour-price']) && !empty($_POST['tour-list']) && !empty($_POST['tour-type']) && !empty($_POST['tour-content'])) {
                                $id = $_POST['tour-id'];
                                $name = $_POST['tour-name'];
                                $address = $_POST['tour-address'];
                                $img = $_POST['tour-img'];
                                $price = $_POST['tour-price'];
                                $list = $_POST['tour-list'];
                                $type = $_POST['tour-type'];
                                $content = $_POST['tour-content'];

                                $query = "insert into tour (ID_Tour,Ten_Tour,DiaDiem_Tour,Anh_Tour,SoLuong_Tour,Gia_Tour,NoiDung_Tour,TheLoai_Tour) values ('$id','$name','$address','$img','$list','$price','$content','$type')";

                                $tourQuery = mysqli_query($conn, $query)  ;

                                if ($tourQuery != $id) {
                                    echo "Tạo Tour mới thất bại";
                                } else {
                                    echo "Tạo Tour thành công ";
                                }
                            }
                            else {
                                echo "Bạn chưa nhập tất cả các ô nhập!" ;
                            }
                        }
                        ?>
                        <button type="submit" name="mange-info-tour__btn--save" id="mange-info-tour__btn--save" class="btn btn-success">Lưu</button>
<!--                      Sửa Tour  -->
                        <?php
                        require_once 'connect.php';
                        if (isset($_POST['mange-info-tour__btn--fix'])){
                            if (!empty($_POST['tour-id']) && !empty($_POST['tour-name']) && !empty($_POST['tour-address']) &&  !empty($_POST['tour-price']) && !empty($_POST['tour-list']) && !empty($_POST['tour-type']) && !empty($_POST['tour-content'])) {
                                $id = $_POST['tour-id'];
                                $name = $_POST['tour-name'];
                                $address = $_POST['tour-address'];
                                $img = $_POST['tour-img'];
                                $price = $_POST['tour-price'];
                                $list = $_POST['tour-list'];
                                $type = $_POST['tour-type'];
                                $content = $_POST['tour-content'];

                                $query = "update tour set Ten_Tour = '$name' ,DiaDiem_Tour = '$address' , Anh_Tour = '$img' , SoLuong_Tour = '$list' ,  Gia_Tour = '$price',NoiDung_Tour = '$content' ,TheLoai_Tour = '$type' WHERE ID_Tour = '$id' ";

                                $tourQuery = mysqli_query($conn, $query)  ;

                                if ($tourQuery == $id) {
                                    echo "Sửa Tour thành công";
                                } else {
                                    echo "Sửa Tour thất bại";
                                }
                            }
                            else {
                                echo "Bạn chưa nhập tất cả các ô nhập!" ;
                            }
                        }
                        ?>
                        <button type="submit" name="mange-info-tour__btn--fix" id="mange-info-tour__btn--fix" class="btn btn-info">Sửa</button>
                        <button type="submit" name="mange-info-tour__btn--delete" id="mange-info-tour__btn--delete" class="btn btn-warning">Xóa</button>
<!--                        Xóa Tour-->
                        <?php
                        require_once 'connect.php';
                        if (isset($_POST['mange-info-tour__btn--delete'])){
                            if (!empty($_POST['tour-id'])) {
                                $id = $_POST['tour-id'];

                                $query = "delete from tour WHERE ID_Tour = '$id'";

                                $tourQuery = mysqli_query($conn, $query)  ;

                                if ($tourQuery == $id) {
                                    echo "Xóa Tour thành công ";
                                } else {
                                    echo "Xóa Tour thất bại";
                                }
                            }
                            else {
                                echo "Bạn chưa nhập ô ID TOUR" ;
                            }
                        }
                        ?>
                    </div>
                </form>
            </div>
<!--         Hiển thị Tour-->
            <?php
            require_once 'connect.php';
            $query = "select * from tour";
            $tourQuery = mysqli_query($conn, $query);
            $tours = array();
            while ($record = mysqli_fetch_assoc($tourQuery)) {
                $tours[] = $record;
            }
            ?>
            <div class="col-xl-9 col-md-9 col-sm-12 manage__info" >
                <h1 class="text-center">Quản lý tour</h1>

                <table class="table table-hover table-bordered table-responsive-sm results" id="mange-info-tour__table">
                    <thead>
                        <th class="">STT</th>
                        <th class="">Mã tour</th>
                        <th class="">Tên tour</th>
                        <th class="">Địa điểm</th>
                        <th class="">Ảnh</th>
                        <th class="">Đơn giá</th>
                        <th class="">Số lượng</th>
                        <th class="">Thể loại</th>
                        <th class="">Nội dung</th>
                    </thead>
                    <?php $stt = 1;
                    foreach ($tours as $tour) :?>
                        <tr class="list-info-user__table" onClick="getValue(this)" tabindex="0" >
                            <th><?= $stt?></th>
                            <th class="id_tour"><?= $tour['ID_Tour'] ?></th>
                            <th class="ten-tour"><?= $tour['Ten_Tour'] ?></th>
                            <th class="diadiem-tour"><?= $tour['DiaDiem_Tour'] ?></th>
                            <th class="anh-tour"><img class="card-img-top" src="./assets/img/<?= $tour['Anh_Tour'] ?>" alt="Card image" style="width:100%"></th>
                            <th class="gia-tour"><?= $tour['Gia_Tour'] ?></th>
                            <th class="soluong-tour"><?= $tour['SoLuong_Tour'] ?></th>
                            <th class="theloai-tour"><?= $tour['TheLoai_Tour'] ?></th>
                            <th class="noidung-tour"><?= $tour['NoiDung_Tour'] ?></th>
                        </tr>
                        <?php $stt ++;
                    endforeach; ?>
                </table>
            </div>
        </div>

        <!-- Manage user -->
<!--        Hiển Thị khách -->
        <?php
        require_once 'connect.php';
        $query = "select * from khach";
        $tourQuery = mysqli_query($conn, $query);
        $tours = array();
        while ($record = mysqli_fetch_assoc($tourQuery)) {
            $tours[] = $record;
        }
        ?>
        <div class="row manage-content manage-user">
            <div class="col-xl-12 col-md-12 col-sm-12 manage__user">
                <h1 class="text-center">Quản lý người dùng</h1>
                <input type="text" class="manage__search" placeholder="Tìm kiếm ...">

                <table id="mange-user__table">
                    <tr class="list-info-user__table">
                        <th class="">STT</th>
                        <th class="">Mã người dùng</th>
                        <th class="">Họ tên</th>
                        <th class="">Năm sinh</th>
                        <th class="">Giới tính</th>
                        <th class="">Địa chỉ</th>
                        <th class="">Số điện thoại</th>
                        <th class="">Email</th>
                    </tr>
                    <?php $stt = 1;
                    foreach ($tours as $tour) :?>
                    <tr class="list-info-user__table">
                        <th><?= $stt?></th>
                        <th><?= $tour['ID_Khach'] ?></th>
                        <th><?= $tour['Ten_Khach'] ?></th>
                        <th><?= $tour['NamSinh_Khach'] ?></th>
                        <th><?= $tour['GioiTinh_Khach'] ?></th>
                        <th><?= $tour['DiaChi_Khach'] ?></th>
                        <th><?= $tour['SDT_Khach'] ?></th>
                        <th><?= $tour['Gmail_TaiKhoan'] ?></th>
                    </tr>
                    <?php $stt ++;
                    endforeach; ?>
                </table>
            </div>
        </div>
<!--        Hiển thị đặt tour-->
        <?php
        require_once 'connect.php';
        $query = "select a.ID_DatTour, b.Ten_Khach , b.ID_Khach ,  b.SDT_Khach , b.Gmail_TaiKhoan , a.Soluong_DatTour , c.ID_Tour , c.Ten_Tour , c.SoLuong_Tour , a.NgayDat_DatTour , a.TrangThai_DatTour
                     From dattour as a , khach as b , tour as c
                     WHERE a.ID_Tour = c.ID_Tour AND a.ID_Khach = b.ID_Khach ;";
        $tourQuery = mysqli_query($conn, $query);
        $tours = array();
        while ($record = mysqli_fetch_assoc($tourQuery)) {
            $tours[] = $record;
        }
        ?>
        <!-- Manage booked tours -->
        <div class="row manage-content manage-booked-tour" >
            <div class="col-xl-12 col-md-12 col-sm-12 manage__booked-tour">
                <h1 class="text-center">Danh sách đơn đặt tour</h1>
                <input type="text" class="manage__search" placeholder="Tìm kiếm ...">

                <table id="manage-booked-tour__table">
                    <tr class="list-info-booked-tour__table">
                        <th class="">STT</th>
                        <th class="">Mã đơn</th>
                        <th class="">Mã người dùng</th>
                        <th class="">Họ tên</th>
                        <th class="">Số điện thoại</th>
                        <th class="">Email</th>
                        <th class="">Số lượng khách</th>
                        <th class="">Mã tour</th>
                        <th class="">Tên tour</th>
                        <th class="">Số tour còn</th>
                        <th class="">Ngày đặt tour</th>
                        <th class="">Xử lý </th>
                    </tr>

                    <?php $stt = 1;
                    foreach ($tours as $tour) :?>
                    <tr class="list-info-booked-tour__table">
                        <th><?= $stt?></th>
                        <th><?= $tour['ID_DatTour'] ?></th>
                        <th><?= $tour['ID_Khach'] ?></th>
                        <th><?= $tour['Ten_Khach'] ?></th>
                        <th><?= $tour['SDT_Khach'] ?></th>
                        <th><?= $tour['Gmail_TaiKhoan'] ?></th>
                        <th><?= $tour['Soluong_DatTour'] ?></th>
                        <th><?= $tour['ID_Tour'] ?></th>
                        <th><?= $tour['Ten_Tour'] ?></th>
                        <th><?= $tour['SoLuong_Tour'] ?></th>
                        <th><?= $tour['NgayDat_DatTour'] ?></th>
                        <?php if (!$tour['TrangThai_DatTour']):?>
                        <th><a href="accept.php?tourId=<?= $tour['ID_DatTour']?>">Chấp nhận</a><br><a href="reject.php?tourId=<?= $tour['ID_DatTour']?>">Từ chối</a></th>
                        <?php else: ?>
                        <th><?= $tour['TrangThai_DatTour'] ?></th>
                        <?php endif ?>
<!--                        <form method="POST">-->
<!--                        <label class="manage__booked-tour--accept">-->
<!--                            <input type="radio" name="manage__booked-tour-check" id="manage__booked-tour--accept" value="Thành công" >-->
<!--                            Chấp nhận-->
<!--                        </label>-->
<!--                        <br/>-->
<!--                        <label class="manage__booked-tour--reject">-->
<!--                            <input type="radio" name="manage__booked-tour-check" id="manage__booked-tour--reject" value="Thất bại" >-->
<!--                            Từ chối-->
<!--                        </label>-->
<!--                        <button type="submit" name="manage__booked-tour-proces" id="manage__booked-tour-proces" class="btn btn-info">Xử Lý</button>-->
<!--                        </form>-->
                        </th>
                    </tr>
                    <?php $stt ++;
                    endforeach; ?>
                </table>
            </div>
        </div>
    </div>

<script>
    function getValue(a){
        $('input[name="tour-id"]').val($(a).find('.id_tour').text());
        $('input[name="tour-name"]').val($(a).find('.ten-tour').text());
        $('input[name="tour-address"]').val($(a).find('.diadiem-tour').text());
        $('input[name="tour-img"]').val($(a).find('.anh-tour').text());
        $('input[name="tour-price"]').val($(a).find('.gia-tour').text());
        $('input[name="tour-list"]').val($(a).find('.soluong-tour').text());
        $('input[name="tour-type"]').val($(a).find('.theloai-tour').text());
        $('input[name="tour-content"]').val($(a).find('.noidung-tour').text());
        _elem = $(a);

    };
    $(document).ready(function () {
        $('.table').DataTable({
            language: {
                sProcessing:   "Đang xử lý...",
                sLengthMenu:   "Xem _MENU_ mục",
                sZeroRecords:  "Không tìm thấy dòng nào phù hợp",
                sInfo:         "Đang xem _START_ đến _END_ trong tổng số _TOTAL_ mục",
                sInfoEmpty:    "Đang xem 0 đến 0 trong tổng số 0 mục",
                sInfoFiltered: "(được lọc từ _MAX_ mục)",
                sInfoPostFix:  "",
                sSearch:       "Tìm:",
                sUrl:          "",
                oPaginate: {
                    sFirst:    "Đầu",
                    sPrevious: "Trước",
                    sNext:     "Tiếp",
                    sLast:     "Cuối"
                }
            }
        })
    })
</script>
    <script src="./assets/js/datatables/jquery.dataTables.min.js"></script>
    <script src="./assets/js/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="./assets/js/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="./assets/js/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="./assets/js/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="./assets/js/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="./assets/js/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="./assets/js/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="./assets/js/datatables-buttons/js/buttons.colVis.min.js"></script>
</body>
