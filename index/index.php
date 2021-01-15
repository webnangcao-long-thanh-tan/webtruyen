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
                        <div class="itemmainslider">
                            <a href="#"><img src="../images/naruto.jpg" alt="" id="anhleft"/><div class="infohot"><h4>Naruto Shippuden</h4></br>
                                <p>1562 chaps</p></div>
                            </div></a>
                            
                        </div>
                        <div class="itemmainslider" >
                            <a href="#"><img src="https://sachvui.com/cover/2018/one-piece-dao-hai-tac.jpg" alt="" id="anhleft">
                            <div class="infohot"><h4>OnePeace</h4></br>
                                <p>2623 chaps</p></div>
                            </a>
                            
                        </div>
                        <div class="itemmainslider" >
                            <a href="#"><img src="../images/attack on titan.jpg" alt="" id="anhleft"/>
                            <div class="infohot"><h4>Attack on titan</h4></br>
                            <p>785 chaps</p></div>
                            </a>
                            
                        </div>
                        <div class="itemmainslider" >
                             <a href="#"><img src="../images/hitman.jpg" alt="" id="anhleft"/><div class="infohot"><h4>Hitman</h4></br>
                                <p>1003 chaps</p></div></a>
                            
                        </div>
                        <div class="itemmainslider" >
                            <a href="#"><img src="../images/getbackers.jpg" alt="" id="anhleft"/><div class="infohot"><h4>Getbackers</h4></br>
                                <p>894 chaps</p></div></a>
                            
                        </div>
                        <div class="itemmainslider" >
                            <a href="#"><img src="../images/dragonbal.jpg" alt="" id="anhleft"/><div class="infohot"><h4>Dragonball Super</h4></br>
                                <p>2012 chaps</p></div></a>
                            
                        </div> 
                        <div class="itemmainslider" >
                            <a href="#"><img src="../images/avenger.jpg" alt="" id="anhleft"/><div class="infohot"><h4>Avenger</h4></br>
                            <p>951 chaps</p></div></a>
                            
                        </div>
                        <div class="itemmainslider" >
                            <a href="#"><img src="../images/onepunchman.jpg" alt="" id="anhleft"/><div class="infohot"><h4>One punch man</h4></br>
                                <p>354 chaps</p></div></a>
                            
                        </div>
                        <div class="itemmainslider" >
                            <a href="#"><img src="../images/justiceleague.jpg" alt="" id="anhleft"/><div class="infohot"><h4>Justice League</h4></br>
                                <p>700 chaps</p></div></a>
                            
                        </div> 
                
   
  </section>
                    
                    <h3 class="tieudetruyenmoi">
                        
                    </h3>
                    <div class="tabtruyenmoi">
                        
                    </div>
                    <script>
                         $(document).ready(function(){
$(".mainslide").slick({
  slidesToShow: 7,
  slidesToScroll: 3,
  autoplay: true,
  autoplaySpeed: 2000,
      });
      });

                    </script>

		</main>
<script type="text/javascript" src="../js/slidebar.js"></script>
	<?php include('../view/footer.php');
	
