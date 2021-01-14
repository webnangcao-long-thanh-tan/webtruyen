<?php 
session_start();
include_once '../model/ket_noi.php';
if(isset($_GET['quanly'])){
    $dn = 1;
}
else 
    $dn = 0;
include('../view/header.php') ?>
		<main>
                    <?php
                       if($dn == 1){
                           echo 'dang nhap thanh cong';
                       }
                       else
                           echo 'chua dang nhap';
                    ?>
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
  slidesToScroll: 5,
  autoplay: true,
  autoplaySpeed: 2000,
      });
      });

                    </script>
<!--                   
                      <div id="right">
                <div class="tieude1">
                        <marquee width="100%" scrollamount="5" direction="left" behavior="alternate"><k><strong>Truyện hot</strong></k></marquee>
                    </div>
                    <div id="hotright">
                        <div class="kcl">
                            <a href="#"><img src="../images/naruto.jpg" alt="" id="anhleft"/></a>
                            <div class="ctleft"><h4><a href="#" class="tieude">Naruto Shippuden</a></h4></br>
                                <p>1562 chaps</p>
                            </div>
                        </div>
                        <div class="kcl">
                            <a href="#"><img src="https://sachvui.com/cover/2018/one-piece-dao-hai-tac.jpg" alt="" id="anhleft"/></a>
                            <div class="ctleft"><h4><a href="#" class="tieude">OnePeace</a></h4></br>
                                <p>2623 chaps</p>
                            </div>
                        </div>
                        <div class="kcl">
                            <a href="#"><img src="../images/attack on titan.jpg" alt="" id="anhleft"/></a>
                            <div class="ctleft"><h4><a href="#" class="tieude">Attack on titan</a></h4></br>
                                <p>785 chaps</p>
                            </div>
                        </div>
                        <div class="kcl">
                            <a href="#"><img src="../images/hitman.jpg" alt="" id="anhleft"/></a>
                            <div class="ctleft"><h4><a href="#" class="tieude">Hitman</a></h4></br>
                                <p>1003 chaps</p>
                            </div>
                        </div>
                        <div class="kcl">
                            <a href="#"><img src="../images/getbackers.jpg" alt="" id="anhleft"/></a>
                            <div class="ctleft"><h4><a href="#" class="tieude">Getbackers</a></h4></br>
                                <p>894 chaps</p>
                            </div>
                        </div>
                        <div class="kcl">
                            <a href="#"><img src="../images/dragonbal.jpg" alt="" id="anhleft"/></a>
                            <div class="ctleft"><h4><a href="#" class="tieude">Dragonball Super</a></h4></br>
                                <p>2012 chaps</p>
                            </div>
                        </div>
                        <div class="kcl">
                            <a href="#"><img src="../images/avenger.jpg" alt="" id="anhleft"/></a>
                            <div class="ctleft"><h4><a href="#" class="tieude">Avenger</a></h4></br>
                                <p>951 chaps</p>
                            </div>
                        </div>
                        <div class="kcl">
                            <a href="#"><img src="../images/onepunchman.jpg" alt="" id="anhleft"/></a>
                            <div class="ctleft"><h4><a href="#" class="tieude">One punch man</a></h4></br>
                                <p>354 chaps</p>
                            </div>
                        </div>
                        <div class="kcl">
                            <a href="#"><img src="../images/justiceleague.jpg" alt="" id="anhleft"/></a>
                            <div class="ctleft"><h4><a href="#" class="tieude">Justice League</a></h4></br>
                                <p>700 chaps</p>
                            </div>
                        </div>
            
                        </div>
                      </div>
<div id="listsp">
<div class="decu">
    <h2 id="textdc">truyện đề cử</h2>
            <ul class="decu">
                <li><a href="../comic_comic/index.php">
                        <img src="../images/truyen.jpg" title="J1 Mini" class="a" />
                    <br />
                    <h6>DORAEMON</h6>
                    
                    <h8>100 chap</h8>
                    <span id="km">HOT</span>
                    </a>
                </li> 
                  <li><a href="#">
                          <img src="../images/naruto.jpg" title="J1 Mini" class="a" />
                    <br />
                    <h6>NARUTO SHIPPUDEN</h6>
                    
                    <h8>1562 chaps</h8>
                    <span id="km">HOT</span>
                    </a>
                </li>
                <li><a href="../comic_comic/index.php">
                          <img src="https://sachvui.com/cover/2018/one-piece-dao-hai-tac.jpg" title="J1 Mini" class="a" />
                    <br />
                    <h6>ONEPEACE</h6>
                    
                    <h8>2623 chaps</h8>
                    <span id="km">HOT</span>
                    </a>
                </li>
                <li><a href="#">
                        <img src="../images/hitman.jpg" title="J1 Mini" class="a" />
                    <br />
                    <h6>HITMAN</h6>
                    
                    <h8>1003 chaps</h8>
                    <span id="km">HOT</span>
                    </a>
                </li>
                <li><a href="#">
                        <img src="../images/dragonquest.jpg" title="J1 Mini" class="a" />
                    <br />
                    <h6>DRAGONQUEST</h6>
                    
                    <h8>895 chaps</h8>
                    <span id="km">HÀNH ĐỘNG</span>
                    </a>
                </li>
                <li><a href="#">
                        <img src="../images/inuyasha.jpg" title="J1 Mini" class="a" />
                    <br />
                    <h6>INUYASHA</h6>
                    
                    <h8>1626 chaps</h8>
                    <span id="km">HÀNH ĐỘNG</span>
                    </a>
                </li>
                <li><a href="#">
                        <img src="../images/shin.jpg" title="J1 Mini" class="a" />
                    <br />
                    <h6>SHIN</h6>
                    
                    <h8>895 chaps</h8>
                    <span id="km">HÀNH ĐỘNG</span>
                    </a>
                </li>
                <li><a href="#">
                        <img src="../images/heroacamedia.jpg" title="J1 Mini" class="a" />
                    <br />
                    <h6>HERO ACAMEDIA</h6>
                    
                    <h8>743 chaps</h8>
                    <span id="km">HÀNH ĐỘNG</span>
                    </a>
                </li>
                <li><a href="#">
                          <img src="../images/boruto.jpg" title="J1 Mini" class="a" />
                    <br />
                    <h6>BORUTO</h6>
                    
                    <h8>658 chaps</h8>
                    <span id="km">HÀNH ĐỘNG</span>
                    </a>
                </li>
                <li><a href="#">
                        <img src="../images/gintama.jpg" title="J1 Mini" class="a" />
                    <br />
                    <h6>GINTAMA</h6>
                    
                    <h8>321 chaps</h8>
                    <span id="km">HÀNH ĐỘNG</span>
                    </a>
                </li>
                <li><a href="#">
                        <img src="../images/kimetsu no yaiba.jpg" title="J1 Mini" class="a" />
                    <br />
                    <h6>KIMETSU NO YAIBA</h6>
                    
                    <h8>987 chaps</h8>
                    <span id="km">HÀNH ĐỘNG</span>
                    </a>
                </li>
                <li><a href="#">
                        <img src="../images/the gamer.jpg" title="J1 Mini" class="a" />
                    <br />
                    <h6>THE GAMER</h6>
                    
                    <h8>156 chaps</h8>
                    <span id="km">HÀNH ĐỘNG</span>
                    </a>
                </li>
          </ul>
</div>
    <div  class="moi">
    <h2 id="textdc">truyện mới</h2>
    <ul>     <li><a href="#">
                        <img src="../images/truyen.jpg" title="J1 Mini" class="a" />
                    <br />
                    <h6>DORAEMON</h6>
                    
                    <h8>100 CHAPS</h8>
                    <span id="km">NEW</span>
                    </a>
                </li> 
                  <li><a href="#">
                          <img src="../images/naruto.jpg" title="J1 Mini" class="a" />
                    <br />
                    <h6>NARUTO SHIPPUDENpppppádasjnijdnvisudnfisjdnvi</h6>
                    
                    <h8>700 chaps</h8>
                    <span id="km">NEW</span>
                    </a>
                </li>
                <li><a href="#">
                          <img src="../images/naruto.jpg" title="J1 Mini" class="a" />
                    <br />
                    <h6>NARUTO SHIPPUDENpppppádasjnijdnvisudnfisjdnvi</h6>
                    
                    <h8>700 chaps</h8>
                    <span id="km">NEW</span>
                    </a>
                </li>
                <li><a href="#">
                          <img src="../images/naruto.jpg" title="J1 Mini" class="a" />
                    <br />
                    <h6>NARUTO SHIPPUDENpppppádasjnijdnvisudnfisjdnvi</h6>
                    
                    <h8>700 chaps</h8>
                    <span id="km">NEW</span>
                    </a>
                </li>
                <li><a href="#">
                          <img src="../images/naruto.jpg" title="J1 Mini" class="a" />
                    <br />
                    <h6>NARUTO SHIPPUDENpppppádasjnijdnvisudnfisjdnvi</h6>
                    
                    <h8>700 chaps</h8>
                    <span id="km">NEW</span>
                    </a>
                </li>
                <li><a href="#">
                          <img src="../images/naruto.jpg" title="J1 Mini" class="a" />
                    <br />
                    <h6>NARUTO SHIPPUDENpppppádasjnijdnvisudnfisjdnvi</h6>
                    
                    <h8>700 chaps</h8>
                    <span id="km">NEW</span>
                    </a>
                </li>
                <li><a href="#">
                          <img src="../images/naruto.jpg" title="J1 Mini" class="a" />
                    <br />
                    <h6>NARUTO SHIPPUDENpppppádasjnijdnvisudnfisjdnvi</h6>
                    
                    <h8>700 chaps</h8>
                    <span id="km">NEW</span>
                    </a>
                </li>
                <li><a href="#">
                          <img src="../images/naruto.jpg" title="J1 Mini" class="a" />
                    <br />
                    <h6>NARUTO SHIPPUDENpppppádasjnijdnvisudnfisjdnvi</h6>
                    
                    <h8>700 chaps</h8>
                    <span id="km">NEW</span>
                    </a>
                </li>
                <li><a href="#">
                          <img src="../images/naruto.jpg" title="J1 Mini" class="a" />
                    <br />
                    <h6>NARUTO SHIPPUDENpppppádasjnijdnvisudnfisjdnvi</h6>
                    
                    <h8>700 chaps</h8>
                    <span id="km">NEW</span>
                    </a>
                </li>
                <li><a href="#">
                          <img src="../images/naruto.jpg" title="J1 Mini" class="a" />
                    <br />
                    <h6>NARUTO SHIPPUDENpppppádasjnijdnvisudnfisjdnvi</h6>
                    
                    <h8>700 chaps</h8>
                    <span id="km">NEW</span>
                    </a>
                </li>
                <li><a href="#">
                          <img src="../images/naruto.jpg" title="J1 Mini" class="a" />
                    <br />
                    <h6>NARUTO SHIPPUDENpppppádasjnijdnvisudnfisjdnvi</h6>
                    
                    <h8>700 chaps</h8>
                    <span id="km">NEW</span>
                    </a>
                </li>
                <li><a href="#">
                          <img src="../images/naruto.jpg" title="J1 Mini" class="a" />
                    <br />
                    <h6>NARUTO SHIPPUDENpppppádasjnijdnvisudnfisjdnvi</h6>
                    
                    <h8>700 chaps</h8>
                    <span id="km">NEW</span>
                    </a>
                </li>
          </ul>
    </div>
        </div>-->

		</main>
<script type="text/javascript" src="../js/slidebar.js"></script>
	<?php include('../view/footer.php');
	
