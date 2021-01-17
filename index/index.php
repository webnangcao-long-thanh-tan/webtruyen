<?php 
session_start();
include_once '../model/ket_noi.php';
if(isset($_POST['dangxuat']))
{

        unset($_SESSION['login']);
        unset($_GET['quanly']);
        unset($_SESSION['Id_tv']);

}
if(isset($_GET['quanly'])){
    $dn = 1;
}
else 
    $dn = 0;
include('../view/header.php') ?>
		<main>
                    <div class="tinhtranhdangnhap">
                    <?php
                       if($dn == 1){
                           $tentv = $_SESSION['login'];
                           ?>
                        <div class="tttv">
                            <form action="#" method="POST">
                                <div class="infoprofile">
                                <input type="submit" value="" name="profile">
                                <p >xin chào <?php echo $tentv;?></p>
                                </div>
                                <a href="index.php"  name="dangxuat">
								<i class="fas fa-sign-out-alt mr-2"></i>Đăng xuất </a>
                            </form>
                            
                        </div>
                   
                    <?php   
                    }
                       else{
                           ?>
                           <div class="tttv">
                            
                            
                        </div>
                    <?php
                       }
                    ?>
                    </div>
                    <h3 class="tieudetruyenhot">
                        Truyện Hot
                    </h3>
                    <hr/>
                    <section class="mainslide slider">
                        <?php
                            $sqlselecthot = mysqli_query($conn, "select * from truyen where LuotXem > 999");
                            while($rowhot = mysqli_fetch_array($sqlselecthot)){
                                ?>
                        <div class="itemmainslider" >
                            <a href="../comic_comic/index.php?idtruyen=<?php echo $rowhot['Id_truyen']; ?>"><img src="../images/<?php echo $rowhot['HinhAnh'];?>" alt="" id="anhleft">
                            <div class="infohot"><h4><?php echo $rowhot['Ten'];?></h4>
                                <p><?php echo $rowhot['LuotXem']?> lượt xem</p></div>
                            </a>
                            
                        </div>
                        <?php
                            }
                        ?>
        
                        
                       
   
  </section>
                   <!--select Ten, DATEDIFF(DATE(NOW()), DATE(truyen.NgayPost)) as ngaytontai from truyen where DATEDIFF(DATE(NOW()), DATE(truyen.NgayPost)) < 8--> 
                    <h3 class="tieudetruyenmoi">
                        Truyện Mới
                    </h3>
                    <hr/>
                    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 g-4 truyenmoi" style="width: 80%; margin: 0 auto;">
                        <?php
                            $sqlselectnew = mysqli_query($conn, "select Id_truyen, Ten, HinhAnh, LuotXem, DATEDIFF(DATE(NOW()), DATE(truyen.NgayPost)) as ngaytontai from truyen where DATEDIFF(DATE(NOW()), DATE(truyen.NgayPost)) < 11");
                            while($rownew = mysqli_fetch_array($sqlselectnew)){
                        ?>
                        <div class="col">
                            <a href="../comic_comic/index.php?idtruyen=<?php echo $rownew['Id_truyen']?>"><div class="card">
                                    <img src="../images/<?php echo $rownew['HinhAnh'];?>" class="card-img-top" alt="..." style="height: 300px">
      <div class="card-body ">
        <h5 class="card-title"><?php echo $rownew['Ten']?></h5>
        <p class="card-text"><?php echo $rownew['LuotXem']?> Lượt xem</p>
      </div>
                                </div></a></div>
                        <?php
                            }
                        ?>
                        
                    </div>
                    
                    <script>
                         $(document).ready(function(){
$(".mainslide").slick({
  slidesToShow: 7,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
      });
      });

                    </script>

		</main>
<script type="text/javascript" src="../js/slidebar.js"></script>
	<?php include('../view/footer.php');
	
