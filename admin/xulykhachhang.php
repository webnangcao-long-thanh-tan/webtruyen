<?php
include('../model/ket_noi.php');
?>
<?php
    if(isset($_POST['capnhattv'])){
        $idupdatetv = $_POST['id_updatetv'];
        $usernameup = md5($_POST['usernameud']);
        $passup = $_POST['passud'];
        $emailud = $_POST['emailud'];
        $nameud = $_POST['nameud'];
        $sdtud = $_POST['sdtud'];
        
        $sqlupdatetv = "update thanhvien set Username = '$usernameup', Password = '$passup', Email = '$emailud', Name = '$nameud', DienThoai = '$sdtud' where Id_tv = '$idupdatetv'";
        
        mysqli_query($conn, $sqlupdatetv);
    }
    if(isset($_GET['xoatv'])){
        $id = $_GET['xoatv'];
        $sqlxoa = mysqli_query($conn, "delete from thanhvien where Id_tv = '$id'");
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>thanhvien</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="xulytheloai.php">Thể loại</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="xulytruyen.php" style="color:red">Truyện</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="xulykhachhang.php">Khách hàng <span class="sr-only">(current)</span></a>
        </li>
        </ul>
    </div>
    </nav><br> <br>
    <div class="container">
        <div class="row">
            <?php
            if(isset($_GET['quanly'])=='capnhat'){
                $idcapnhat=$_GET['capnhat_id'];
                $sqlcapnhat=mysqli_query($conn,"select * from thanhvien where Id_tv='$idcapnhat'");
                $row_capnhat=mysqli_fetch_array($sqlcapnhat);
                ?>
                <div class="col-md-3">
                <h4>Cập nhật Thành viên</h4>
                
                <form action="" method="POST" enctype="multipart/form-data">
                    <label>Username</label>
                    <input type="text" class="form-control" name="tentruyen" value="<?php echo $row_capnhat['Username'] ?>"><br>
                    <input type="hidden" class="form-control" name="id_update" value="<?php echo $row_capnhat['Id_tv'] ?>"><br>
                    <label>Lượt Xem</label>
                    <input type="text" name="luotxem" value="<?php echo $row_capnhat['LuotXem'] ?>">
                    <label>Mô tả</label>
                    <textarea class="form-control" rows="10" name="mota"><?php echo $row_capnhat['MoTa'] ?></textarea><br>
                    <label>Ngày Post</label>
                    <input type="text" name="ngaypost" value="<?php echo $row_capnhat['NgayPost']?>">
                    <input type="submit" name="capnhattruyen" value="Cập nhật sản phẩm" class="btn btn-default">
                </form>
            </div>
            <?php
            }
            ?>
            
            <div class="col-md-9">
            <h4>Liệt kê Truyện</h4>
            <?php
            $sql_select_truyen=mysqli_query($conn,"select * from truyen,theloai where truyen.IdTL=theloai.Id_TL order by truyen.Id_truyen desc")
            ?>
            <table class="table table-responsive table-bordered ">
                <tr>
                    <th>Thứ tự</th>
                    <th>Tên Truyện</th>
                    <th>thể loại</th>
                    <th>Hình ảnh</th>
                    <th>Lượt xem</th>
                    <th>Mô tả</th>
                    <th>Ngày Post</th>
                    <th>thêm hành động</th>
                </tr>
                <?php
                $i=0;
                while($row_truyen=mysqli_fetch_array($sql_select_truyen)){
                    $i++;
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row_truyen['Ten'] ?></td> 
                    <td><?php echo $row_truyen['TenTL'] ?></td>
                    <td><img src="../images/<?php echo $row_truyen['HinhAnh'] ?>" height="100" width="80"></td>
                    <td><?php echo $row_truyen['LuotXem'] ?></td>
                    <td><?php echo $row_truyen['MoTa']?></td>
                    <td><?php echo $row_truyen['NgayPost']?></td>
                    <td><a href="?xoa=<?php echo $row_truyen['Id_truyen'] ?>">Xóa</a> | <a href="xulytruyen.php?quanly=capnhat&capnhat_id=<?php echo $row_truyen['Id_truyen'] ?>">Sửa</a></td>
                </tr>
                <?php
                }
                ?>
            </table>
            </div>
        </div>
    </div>

</body>
</html>
