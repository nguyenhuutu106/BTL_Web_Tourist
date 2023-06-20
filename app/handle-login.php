<?php
use UI\Controls\Button;
session_start();
    $username = "root";
    $password = "";
    $server   = "localhost:3307";
    $dbname   = "tour";
    $connection = mysqli_connect($server, $username, $password, $dbname) or die('Kết nối thất bại:'.mysqli_connect_error());
    mysqli_query($connection,"set names 'utf8'");
    // Nếu không phải là sự kiện đăng ký thì không xử lý

        //Lấy dữ liệu nhập vào
        $email = addslashes($_POST['email-register']);
        $password = addslashes($_POST['password-register']);

        //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
        if (!$email || !$password) {
            echo "Vui lòng nhập đầy đủ tên Email và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }

        // mã hóa pasword
        //$password = md5($password);

        //Kiểm tra tên đăng nhập có tồn tại không
        $sql = "SELECT * FROM khach WHERE Gmail_TaiKhoan = '$email'";
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) == 0) {
            echo"Email này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        }
        else{
            //Lấy mật khẩu trong database ra
            $row = mysqli_fetch_array($result);

            //So sánh 2 mật khẩu có trùng khớp hay không
            if ($password != $row['MatKhau_TaiKhoan']) {
                echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
                exit;
            }

            //Hiện tên của người đăng nhập
            $_SESSION['email-register'] = $email;
            $_SESSION['user-id'] = $row['ID_Khach'];
            $sql = "SELECT `Ten_Khach`,Gmail_TaiKhoan FROM `khach`";
            $result = mysqli_query($connection, $sql);
            if ($result->num_rows > 0) {
                //  đăng đăng nhập thành công
                Header( "Location: http://localhost/BTL-Web/index2.php" );
            } else {
                echo "Có lỗi xảy ra trong quá trình đăng nhập. <a href='handle-register.php'>Thử lại</a>";
            }
        }
        mysqli_close($connection);

?>

