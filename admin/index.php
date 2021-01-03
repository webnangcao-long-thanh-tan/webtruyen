	        		
	        		
<?php session_start()?>
<?php include '../model/ket_noi.php';?>
<?php
    if(isset($_POST['dangnhap'])){
        $taikhoan = $_POST['taikhoan'];
        $matkhau = md5($_POST['matkhau']);
        if($taikhan = '' || $matkhau == ''){
            echo '<p>xin điền đầy đủ thông tin!</p>';
        }
        else{
            $sql_select_admin = mysqli_query($conn, "select * from admin where Username = '$taikhoan' and Password = '$matkhau' limit 1");
            $count = mysqli_num_rows($sql_select_admin);
            $row_dang_nhap = mysqli_fetch_array($sql_select_admin);
            if($count > 0){
                $_SESSION['dangnhap'] = $row_dang_nhap['Username'];
                $_SESSION['admin_id'] = $row_dang_nhap['Id'];
                header('location:dashboard.php');
            }
            else{
                echo "<script language='javascript'>alert('dang nhap that bai !');";
            }
            
            
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>Đăng nhập quảng trị</title>
<meta charset="UTF-8" />
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>

<h1 align="center">Đăng nhập admin</h1>
<div class="col-md-6">
<div class="form-group">
    <form action="" method="POST">
        <label>Tài khoản</label>
        <input type="text" name="taikhoan" placeholder="Điền Email" class="form-control"><br>
        <label>Mật khẩu</label>
        <input type="password" name="matkhau" placeholder="Điền mật khẩu" class="form-control">
        <input type="submit" name="dangnhap" class="btn btn-primary" value="Đăng nhập">
    </form>
</div>
</div>
</body>
</html>
