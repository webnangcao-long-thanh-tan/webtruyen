<?php
include('../model/ket_noi.php');
?>
<?php
    if(isset($_POST['themtruyen'])){
        $tentruyen = $_POST['tentruyen'];
        $hinhanh = $_FILES['hinhanh']['name'];
        $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
        $tltruyen = $_POST['theloai'];
        $luotxem = $_POST['luotxem'];
        $mota = $_POST['mota'];
        $ngaypost = $_POST['ngaypost'];
        $path = '../images/';
        $sqlinserttruyen = mysqli_query($conn, "insert into truyen(Ten,IdTL,HinhAnh,LuotXem,MoTa,NgayPost) values('$tentruyen','$tltruyen','$hinhanh','$luotxem','$mota','$ngaypost')");
        move_uploaded_file($hinhanh_tmp,$path.$hinhanh);
        
    }
    elseif(isset($_POST['capnhattruyen'])){
        $idupdate = $_POST['id_update'];
        $tentruyen = $_POST['tentruyen'];
        $hinhanh = $_FILES['hinhanh']['name'];
        $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
        $tltruyen = $_POST['theloai'];
        $luotxem = $_POST['luotxem'];
        $mota = $_POST['mota'];
        $ngaypost = $_POST['ngaypost'];
        $path = '../images/';
        if($hinhanh == ''){
            $sqlupdateimage = "update truyen set Ten = '$tentruyen', IdTL = '$tltruyen', LuotXem = '$luotxem', MoTa = '$mota', NgayPost = '$ngaypost' where Id = '$idupdate'";
            
        }
        else{
            move_uploaded_file($hinhanh_tmp, $path.$hinhanh);
            $sqlupdateimage = "update truyen set Ten = '$tentruyen', IdTL = '$tltruyen', HinhAnh = '$hinhanh', LuotXem = '$luotxem', MoTa = '$mota', NgayPost = '$ngaypost' where Id = '$idupdate'";
        }
        mysqli_query($conn, $sqlupdateimage);
    }
    if(isset($_GET['xoa'])){
        $id = $_GET['xoa'];
        $sqlxoa = mysqli_query($conn, "delete from truyen where Id_truyen = '$id'");
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Truyen</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="xulytheloai.php">Thể loại <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="xulytruyen.php" style="color:red">Truyện</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="xulykhachhang.php">Khách hàng</a>
        </li>
        </ul>
    </div>
    </nav><br> <br>
    <div class="container">
        <div class="row">
            <?php
            if(isset($_GET['quanly'])=='capnhat'){
                $idcapnhat=$_GET['capnhat_id'];
                $sqlcapnhat=mysqli_query($conn,"select * from truyen where Id_truyen='$idcapnhat'");
                $row_capnhat=mysqli_fetch_array($sqlcapnhat);
                $id_category_1=$row_capnhat['IdTL'];
                ?>
                <div class="col-md-3">
                <h4>Cập nhật Truyện</h4>
                
                <form action="" method="POST" enctype="multipart/form-data">
                    <label>Tên Truyện</label>
                    <input type="text" class="form-control" name="tentruyen" value="<?php echo $row_capnhat['Ten'] ?>"><br>
                    <input type="hidden" class="form-control" name="id_update" value="<?php echo $row_capnhat['Id_truyen'] ?>"><br>
                    <label>Thể Loại</label>
                    <?php
                    $sql_theloai=mysqli_query($conn,"select * from theloai order by Id_TL desc")
                    ?>
                    <select name="theloai" class="form-control">
                        <option value="0">-----Chọn thể loại-----</option>
                        <?php
                        while($row_theloai=mysqli_fetch_array($sql_theloai)){
                            if($id_category_1==$row_theloai['Id_TL']){
                        ?>
                        <option selected value="<?php echo $row_theloai['Id_TL'] ?>"><?php echo $row_theloai['TenTL'] ?></option>
                        <?php
                            }else{
                        ?>
                        <option value="<?php echo $row_theloai['Id_TL'] ?>"><?php echo $row_theloai['TenTL'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select><br>
                    <label>Hình ảnh</label>
                    <input type="file" class="form-control" name="hinhanh"><br>
                    <img src="../images/<?php echo $row_capnhat['HinhAnh'] ?>" height="100" width="80" ><br>
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
            }else{
                ?>
                <div class="col-md-3">
                <h4>Thêm Truyện</h4>
                
                <form action="" method="POST" enctype="multipart/form-data">
                    <label>Tên Truyện</label>
                    <input type="text" class="form-control" name="tentruyen" placeholder="Tên Truyện"><br>                   
                    <label>Thể Loại</label>
                    <?php
                    $sql_theloai=mysqli_query($conn,"select * from theloai order by Id_TL desc")
                    ?>
                    <select name="theloai" class="form-control">
                        <option value="0">-----Chọn thể loại-----</option>
                        <?php
                        while($row_theloai=mysqli_fetch_array($sql_theloai)){
                        ?>
                        <option value="<?php echo $row_theloai['Id_TL'] ?>"><?php echo $row_theloai['TenTL'] ?></option>
                        <?php
                        }
                        ?>
                    </select><br>

                                        <label>Hình ảnh</label>
                    <input type="file" class="form-control" name="hinhanh"><br>
                                        <label>Lượt xem</label>
                    <input type="text" class="form-control" name="luotxem" placeholder="Giá sản phẩm"><br>
                                        <label>Mô tả</label>
                    <textarea class="form-control" name="mota"></textarea><br>
                    <label>Ngày post</label>
                    <input type="text" class="form-control" name="ngaypost" placeholder="Ngày Post"><br>
                                        <input type="submit" name="themtruyen" value="Thêm Truyện" class="btn btn-default">
                </form>
            </div>
            <?php
            }
            ?>
            
            <div class="col-md-9">
            <h4>Liệt kê sản phẩm</h4>
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
