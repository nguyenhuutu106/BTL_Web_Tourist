<?php
use UI\Controls\Button;
    $username = "root";
    $password = "";
    $server   = "localhost";
    $dbname   = "tour";
    $connection = mysqli_connect($server, $username, $password, $dbname) or die('Kết nối thất bại:'.mysqli_connect_error());
    mysqli_query($connection,"set names 'utf8'");
    // Nếu không phải là sự kiện đăng ký thì không xử lý
    if (!isset($_POST['name'])){
        die('');
    }
    //Lấy dữ liệu từ file dangky.php
    $fullname   = addslashes($_POST['name']);
    $password   = addslashes($_POST['password_register']);
    $email      = addslashes($_POST['email_register']);
    $phone   = addslashes($_POST['phone_number']);
    $birthday   = addslashes($_POST['birth-year']);
    $sex        = addslashes($_POST['sex']);
    $address        = addslashes($_POST['place']);
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$fullname || !$password || !$email || !$phone || !$birthday || !$sex || !$address)
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
        // Mã khóa mật khẩu
        //$password = md5($password);
    //Kiểm tra email có đúng định dạng hay không
    $regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i";
    if(!preg_match($regex, $email)) {
        echo "Địa chỉ email phù hợp";
        exit;
    }
    //Kiểm tra email đã có người dùng chưa
    $sql = "SELECT * FROM khach WHERE Gmail_TaiKhoan = '$email'";
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) > 0)
    {
        echo "Email bạn nhập đã bị trùng. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    //Thêm ID và kiểm tra trùng
    $ID = rand();
    $sql = "SELECT * FROM khach WHERE ID_Khach = '$ID'";
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) > 0)
    {
        $ID = rand();
        exit;
    }
    //Lưu thông tin thành viên vào bảng
    $sqlInsert = "INSERT INTO `khach`(`ID_Khach`, `Ten_Khach`, `NamSinh_Khach`, `GioiTinh_Khach`, `DiaChi_Khach`, `SDT_Khach`, `Gmail_TaiKhoan`, `MatKhau_TaiKhoan`) VALUES ('$ID','$fullname','$birthday','$sex','$address','$phone','$email','$password')";
    $isInsertTable = mysqli_query($connection,$sqlInsert);
    //Thông báo quá trình lưu
    if ($isInsertTable)
        Header( "Location: http://localhost:8089/BTL-Web/index2.php" );
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='register.html'>Thử lại</a>";
    mysqli_close($connection);

?>

