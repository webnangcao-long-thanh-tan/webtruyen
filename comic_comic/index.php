<?php 
session_start();
include_once '../model/ket_noi.php';
include('../view/header.php');

if(isset($_GET['idtruyen'])){
    $idtruyen = $_GET['idtruyen'];
}
?>
<main class="main">
     <div class="z">
        
        <div class="body">
            <?php if(isset($idtruyen)){
                $sqlselectruyen = mysqli_query($conn, "select * from truyen where Id_truyen = '$idtruyen'");
                while($rowtruyen = mysqli_fetch_array($sqlselectruyen)){
                    
                    ?>
                    <div class="chitiet">
                <div class="chitiet1">
                    <div class="img">
                        <img src="../images/<?php echo $rowtruyen['HinhAnh']?>" alt="">
                    </div>
                    <div class="oda">
                        <div class="chinhsua">
                            <span class="one"><a href=""><?php echo $rowtruyen['Ten']?></a></span><br>
                            <a href="" class="likea">Thích</a>
                            <a href="" class="likea">Bình luận</a><br>
                        
                        <span>* Thể Loại: </span>
                        <?php
                        $idtl = $rowtruyen['IdTL'];
                        $sqlselecttheloai = mysqli_query($conn, "select DISTINCT TenTL from theloai, truyen where theloai.Id_TL = '$idtl'");
                        while($rowtheloai = mysqli_fetch_array($sqlselecttheloai)){
                            ?>
                        <a href="" id="ha"><?php echo $rowtheloai['TenTL']?></a><br>
                        <?php
                        }
                        ?>
                        <span>* Lượt xem: <?php echo $rowtruyen['LuotXem']?></span><br>
                        <span>* Ngày Post: <?php echo $rowtruyen['NgayPost']?></span><br>
                        
                        <br>
                        <div class="doc">
                            <a href="">Đọc Online</a>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="list">
                    <div class="chuong1">
                        <h2 class="hr">Danh sách chap</h2>
                    </div>
                </div>
                <div class="chuong2">
                    <a href="">Chap 0</a>
                </div>
                <div class="chuong2">
                    <a href="">Chap 1</a>
                </div>
                <div class="chuong2">
                    <a href="">Chap 2</a>
                </div>
                <div class="chuong2">
                    <a href="">Chap 3</a>
                </div>
                <div class="chuong2">
                    <a href="">Chap 4</a>
                </div>
                <div class="chuong2">
                    <a href="">Chap 5</a>
                </div>
                <div class="chuong2">
                    <a href="">Chap 6</a>
                </div>
                <div class="chuong2">
                    <a href="">Chap 7</a>
                </div>
                <div class="chuong2">
                    <a href="">Chap 8</a>
                </div>
                <div class="chuong2">
                    <a href="">Chap 9</a>
                </div>
                <div class="chuong2">
                    <a href="">Chap 10</a>
                </div>
                <div class="chuong2">
                    <a href="">Chap 11</a>
                </div>
                <div class="chuong2">
                    <a href="">Chap 12</a>
                </div>
                <div class="chuong2">
                    <a href="">Chap 13</a>
                </div>
                <div class="chuong2">
                    <a href="">Chap 14</a>
                </div>
                <div class="chuong2">
                    <a href="">Chap 15</a>
                </div>
                <div class="chuong2">
                    <a href="">Chap 16</a>
                </div>
                <div class="chuong2">
                    <a href="">Chap 17</a>
                </div>
                <div class="chuong2">
                    <a href="">Chap 18</a>
                </div>
                <div class="chuong2">
                    <a href="">Chap 19</a>
                </div>
                <div class="chuong2">
                    <a href="">Chap 20</a>
                </div>
               
                <div class="thongtin">
                    <p><span><?php echo $rowtruyen['MoTa']?> </span></p>
                    
                </div>
                <div id="tnt_pagination">

<a href="index.php?page=1">1</a>
<a href ="index.php?page=2">2</a>
<a href="index.php?page=3">3</a>
<a href="index.php?page=4">4</a>
<a href="index.php?page=5">5</a>
<a href="index.php?page=6">6</a>
<a href="index.php?page=7">7</a>
<a href="#forward">Next</a>
</div>
            </div>
            <?php    
                }
            }
            ?>
            
            <div class="slidebar">
                <div class="danhngon">
                    <div class="danhngon1">
                        <p>QC</p>
                    </div>
                    <div class="danhngon2">
                        <p>Kẻ ngu thường tỏ ra nguy hiểm, kẻ nguy hiểm thường tỏ ra ngu</p>
                    </div>
                    
                </div>
                <div class="danhmuc">
                    <div class="danhngon1" id="id">
                        <p>Thể loại truyện</p>
                    </div>
                    <div class="danhmuc1">
                        <a href="">Tất cả truyện</a>
                    </div>
                    <?php
                        $sqltheloaiall = mysqli_query($conn, "select * from theloai");
                        while($rowtheloaiall = mysqli_fetch_array($sqltheloaiall)){
                        ?>
                    <div class="danhmuc1">
                        <a href=""><?php echo $rowtheloaiall['TenTL']?></a>
                    </div>
                        <?php
                        
                        }
                        ?>
                    
                </div>
                
            </div>
            

        </div>
    </div>
</main>


