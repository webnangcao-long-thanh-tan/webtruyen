<?php 
session_start();
include_once '../model/ket_noi.php';
include('../view/header.php');
if(isset($_SESSION['tukhoa'])){
    $tukhoa = $_SESSION['tukhoa'];

?>
	<main class="main">
		<h3 class="tieudetruyenmoi">
                        trang tìm kiếm
                    </h3>
                    <hr/>
                    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 g-4 truyenmoi" style="width: 80%; margin: 0 auto;">
                        <?php
                            $sqlselecttukhoa = mysqli_query($conn, "select * from truyen where Ten like '%$tukhoa%'");
                            while($rowtimkiem = mysqli_fetch_array($sqlselecttukhoa)){
                        ?>
                        <div class="col">
                            <a href="../comic_comic/index.php?idtruyen=<?php echo $rowtimkiem['Id_truyen']?>"><div class="card">
                                    <img src="../images/<?php echo $rowtimkiem['HinhAnh'];?>" class="card-img-top" alt="..." style="height: 300px">
      <div class="card-body ">
        <h5 class="card-title"><?php echo $rowtimkiem['Ten']?></h5>
        <p class="card-text"><?php echo $rowtimkiem['LuotXem']?> Lượt xem</p>
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
	
