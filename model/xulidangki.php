<?php
	if (!isset($_POST['signup'])){
        die('');
    }
    include('ket_noi.php');
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
    //Lấy dữ liệu từ file dangky.php
    $username   = addslashes($_POST['username']);
    $password   = addslashes($_POST['password']);
     if (!$username || !$password )
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    // Mã khóa mật khẩu
    $password = md5($password);
    //Kiểm tra tên đăng nhập này đã có người dùng chưa
    if (mysql_num_rows(mysql_query("SELECT username FROM member WHERE username='$username'")) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    $sql="INSERT INTO account(username,pass) VALUE('{$username}','{$password}')";
    $addmember="mysql_query($sql);
     if ($addmember)
        echo "Quá trình đăng ký thành công. <a href=''>Về trang chủ</a>";
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";
?>

?>