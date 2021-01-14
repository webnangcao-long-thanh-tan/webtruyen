<?php
include_once '../model/ket_noi.php';
?>
<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    if ($username == '' || $password == '') {
        echo '<script>alert("Làm ơn không để trống!!!")</script>';
    } else {
        $sqlselectadmin = mysqli_query($conn, "select * from thanhvien where Username = '$username' and Password = '$password' limit 1");
        $count = mysqli_num_rows($sqlselectadmin);
        $rowlogin = mysqli_fetch_array($sqlselectadmin);
        if ($count > 0) {
            $_SESSION['login'] = $rowlogin['Name'];
            $_SESSION['Id_tv'] = $rowlogin['Id_tv'];
            header('location:../index/index.php?quanly=dangnhap');
            echo '<script>alert("Đăng nhập thành công!!!")</script>';
        } else {
            echo '<script>alert("Tài khoản hoặc mật khẩu bị sai!!!")</script>';
        }
    }
} elseif (isset($_POST['signup'])) {
    $usernamedk = addslashes($_POST['usernamedk']);
    $passworddk = addslashes(md5($_POST['passworddk']));
    $namedk = addslashes($_POST['namedk']);
    $emaildk = addslashes($_POST['emaildk']);
    $sdtdk = addslashes($_POST['sdtdk']);
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$usernamedk || !$passworddk || !$emaildk || !$namedk || !$sdtdk) {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    // Mã khóa mật khẩu
    $passworddk = md5($passworddk);
    if (mysqli_num_rows(mysqli_query($conn, "select * from thanhvien where Username = '$usernamedk'")) > 0) {
        echo '<script>alert("Tên người dùng đã tồn tại")</script>';
    } else {
        @$sqlthanhvien = mysqli_query($conn, "insert into thanhvien(Username, Password, Email, Name, DienThoai) values('$usernamedk','$passworddk','$emaildk','$namedk','$sdtdk')");
        if ($sqlthanhvien) {
            echo '<script>alert("Đăng ký thành công")</script>';
            $sqlselectthanhvien = mysqli_query($conn, "select * from thanhvien order by Id_tv");
            $rowthanhvien = mysqli_fetch_array($sqlselectthanhvien);
            $_SESSION['login'] = $namedk;
            $_SESSION['Id_tv'] = $rowthanhvien['Id_tv'];
        } else {
            echo '<script>alert("Lỗi")</script>';
        }
    }
}
//    elseif(isset($_GET['dangxuat'])){
//	$id=$_GET['dangxuat'];
//	if($id==1){
//		unset($_SESSION['dangnhap_home']);
//	}
//	header('location:index.php');
//	
//	
//}
?>
<link href="../css/login.css" rel="stylesheet" type="text/css"/>
<main class="main bg">
    <div class="containerF">
        <div class="change-form">
            <div id="change-login" class="change change-login">
                <strong><span>Đăng nhập</span></strong>
            </div>
            <div id="change-signup"class="change change-signup">
                <strong><span>Đăng kí nhanh</span></strong>
            </div>
        </div>
        <div class="containerF-login containerF-form" id="containerF-login">
            <form action="#" method="POST">
                <div>
                    <i class="fas fa-user" style="color: gray"></i>
                    <input type="text" class="value-in" name="username" placeholder="Nhập tên tài khoản...">
                </div>
                <div>
                    <i class="fas fa-lock" style="color: gray"></i>
                    <input type="password" class="value-in" name="password" placeholder="Nhập mật khẩu...">
                </div>
                <input class="login" type="submit" name="login" value="Đăng nhập">
            </form>
        </div>

        <div class="containerF-signup containerF-form" id="containerF-signup">
            <form action="#" method="POST">
                <div>
                    <i class="fas fa-user" style="color: gray"></i>
                    <input type="text" class="value-in" name="usernamedk" placeholder="Nhập tên tài khoản...">
                </div>
                <div>
                    <i class="fas fa-lock" style="color: gray"></i>
                    <input type="password" class="value-in" name="passworddk" placeholder="Nhập mật khẩu...">
                </div>
                <div>
                    <i class="fas fa-lock" style="color: gray"></i>
                    <input type="text" class="value-in" name="namedk" placeholder="Nhập tên người dùng...">
                </div>
                <div>
                    <i class="fas fa-lock" style="color: gray"></i>
                    <input type="text" class="value-in" name="emaildk" placeholder="Nhập nhập Email...">
                </div>
                <div>
                    <i class="fas fa-lock" style="color: gray"></i>
                    <input type="text" class="value-in" name="sdtdk" placeholder="Nhập số điện thoại...">
                </div>

                <input type="submit" name="signup" value="Đăng kí">
            </form>
        </div>

    </div>
</main>
<script type="text/javascript" src="../js/login.js"></script>

<?php include('../view/footer.php') ?>
