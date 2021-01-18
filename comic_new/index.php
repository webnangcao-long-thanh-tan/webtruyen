<?php 
include_once '../model/ket_noi.php';
include('../view/header.php') ?>
	<main class="main">
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
	
	</main>
<?php include('../view/footer.php');
	
