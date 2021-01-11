<?php
include('../model/ket_noi.php');
?>
<?php
   if(isset($_POST['themtheloai'])){
       $tentheloai=$_POST['theloai'];
       $sql_insert=mysqli_query($conn,"insert into theloai(TenTL) value('$tentheloai')");
   }elseif(isset($_POST['capnhattheloai'])){
    $id_post_capnhat=$_POST['id_theloai'];
    $tentheloai=$_POST['theloai'];
    $sql_update=mysqli_query($conn,"update theloai set TenTL='$tentheloai' where Id_TL='$id_post_capnhat' ");
    header('location: xulytheloai.php');
   }
   if(isset($_GET['xoa'])){
       $id=$_GET['xoa'];
       $sql_xoa=mysqli_query($conn,"delete from theloai where Id_TL='$id'");
   }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Danh mục</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
<!--        <li class="nav-item active">
            <a class="nav-link" href="xulydonhang.php">Đơn hàng <span class="sr-only">(current)</span></a>
        </li>-->
        <li class="nav-item">
            <a class="nav-link" href="xulytheloai.php" style="color:red">Thể loại</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="xulytruyen.php">Truyện</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="xulykhachhang.php">Thành viên</a>
        </li>
<!--        <li class="nav-item">
            <a class="nav-link disabled" href="xulylienhe.php">Liên hệ</a>
        </li>-->
        </ul>
    </div>
    </nav><br> <br>
    <div class="container">
        <div class="row">
            <?php
            if(isset($_GET['quanly'])=='capnhat'){
                $id_capnhat=$_GET['Id'];
                $sql_capnhat=mysqli_query($conn,"select * from theloai where Id_TL='$id_capnhat'");
                $row_capnhat=mysqli_fetch_array($sql_capnhat);
                ?>
                <div class="col-md-4">
                <h4>Cập nhật Thể loại</h4>
                <label>Tên Thể loại</label>
                <form action="" method="POST">
                    <input type="text" class="form-control" name="theloai" value="<?php echo $row_capnhat['TenTL'] ?>"><br>
                    <input type="hidden" class="form-control" name="id_theloai" value="<?php echo $row_capnhat['Id_TL'] ?>">
                    <input type="submit" name="capnhattheloai" value="Cập nhật thể loại" class="btn btn-default">
                </form>
                </div>
            <?php
            }else{
                ?>
                <div class="col-md-4">
                <h4>Thêm thể loại</h4>
                <label>Tên thể loại</label>
                <form action="" method="POST">
                    <input type="text" class="form-control" name="theloai" placeholder="Tên thể loại"><br>
                    <input type="submit" name="themtheloai" value="Thêm thể loại" class="btn btn-default">
                </form>
            </div>
            <?php
            }
            ?>
            
            <div class="col-md-8">
            <h4>Liệt kê thể loại</h4>
            <?php
            $sql_select=mysqli_query($conn,"select * from theloai order by Id_TL desc")
            ?>
            <table class="table table-responsive table-bordered ">
                <tr>
                    <th>Thứ tự</th>
                    <th>Tên thể loại</th>
                    <th>Quản lý</th>
                </tr>
                <?php
                $i=0;
                while($row_theloai=mysqli_fetch_array($sql_select)){
                    $i++;
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row_theloai['TenTL'] ?></td>  
                    <td><a href="?xoa=<?php echo $row_theloai['Id_TL'] ?>">Xóa</a> | <a href="?quanly=capnhat&Id=<?php echo $row_theloai['Id_TL'] ?>">Sửa</a></td>
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


