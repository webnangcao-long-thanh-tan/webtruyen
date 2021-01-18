<?php 
include_once '../model/ket_noi.php';
include('../view/header.php');
if(isset($_GET['theloai'])){
    $theloai = $_GET['theloai'];

?>
	<main class="main">
            <?php
                $sqlselecttheloaiinfo = mysqli_query($conn, "select distinct * from theloai where Id_TL = '$theloai'");
            ?>
		<h3 class="tieudetruyenmoi">
                        <?php
                        $rowtheloaiinfo = mysqli_fetch_array($sqlselecttheloaiinfo);
                            echo $rowtheloaiinfo['TenTL'];
                        ?>
                    </h3>
                    <hr/>
                    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 g-4 truyenmoi" style="width: 80%; margin: 0 auto;">
                        <?php
                            $sqlselectnew = mysqli_query($conn, "select * from truyen where IdTL = '$theloai'");
                            while($rowshowtheloai = mysqli_fetch_array($sqlselectnew)){
                        ?>
                        <div class="col">
                            <a href="../comic_comic/index.php?idtruyen=<?php echo $rownew['Id_truyen']?>"><div class="card">
                                    <img src="../images/<?php echo $rowshowtheloai['HinhAnh'];?>" class="card-img-top" alt="..." style="height: 300px">
      <div class="card-body ">
        <h5 class="card-title"><?php echo $rowshowtheloai['Ten']?></h5>
        <p class="card-text"><?php echo $rowshowtheloai['LuotXem']?> Lượt xem</p>
      </div>
                                </div></a></div>
                        <?php
                            }
                        ?>
                        
                    </div>
	
	</main>
<?php
} 
?>
<?php include('../view/footer.php');
	
