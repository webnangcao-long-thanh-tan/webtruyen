<?php
include('../model/ket_noi.php');
?>
<?php
    if(isset($_POST['themsanpham'])){
        $tentruyen = $_POST['tentruyen'];
        $hinhanh = $_FILES['hinhanh']['name'];
        $hinhanh_tmp = $_FILES['hinhanh']['name_tmp'];
        $tltruyen = $_POST['tltruyen'];
        $luotxem = $_POST['luotxem'];
        $mota = $_POST['mota'];
        $ngaypost = $_POST['ngaypost'];
        $path = '../images/';
        $sqlinserttruyen = mysqli_query($conn, "insert into truyen(Ten,IdTL,HinhAnh,LuotXem,MoTa,NgayPost) values('$tentruyen','$tltruyen','$hinhanh','$luotxem','$mota','$ngaypost')");
        move_uploaded_file($hinhanh_tmp,$path.$hinhanh);
        
    }
    elseif(isset($_POST['capnhattruyen'])){
        $idupdate = $_POST['idupdate'];
        $tensanpham = $_POST['tensanpham'];
        $hinhanh = $_FILES['hinhanh']['name'];
        $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
        $tltruyen = $_POST['tltruyen'];
        $luotxem = $_POST['luotxem'];
        $mota = $_POST['mota'];
        $ngaypost = $_POST['ngaypost'];
        $path = '../images/';
        if($hinhanh == ''){
            $sqlupdateimage = "update truyen set Ten"
        }
    }
?>
