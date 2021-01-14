<!DOCTYPE html>
<html>
<head>
    
	<title>Index</title>

        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../slick/slick.css" rel="stylesheet" type="text/css"/>
        <link href="../slick/slick-theme.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
        <link rel="stylesheet" type="text/css" href="../css/trangchu.css">
        <link rel="stylesheet" type="text/css" href="../css/chitiet.css">
        	<link rel="stylesheet" type="text/css" href="../css/frame.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>
    <?php
    include_once '../model/ket_noi.php';
    ?>
		   <header>
                <nav class="Nav">
                    <div class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid" style="background: none;">
      <a class="navbar-brand" href="../index/index.php">    <img src="../images/logo.png" alt="" style="width: 100px; bottom: 0"/></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Truyện Hot</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Truyện Mới</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Thể loại
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                <?php
                                                                    $sqltl = "select * from theloai";
                                                                    $kqtl = mysqli_query($conn, $sqltl);
                                                                    while( ($rows = mysqli_fetch_assoc($kqtl))!= NULL )
		{
                                                                ?>
                                                                <li class="dropdown-item"><a href="../comic_type/index.php"><?php echo $rows['TenTL']?></a></li>
                <?php
                
                }
                ?>
            
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../comic_login/index.php">Đăng nhập</a>
        </li>

      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</div>
                    <section class="regular slider">
                        <div class="itemheadslider">
                                        <h1 class="welcome">Welcome to</h1><br/>
                                        <h1 class="title">TRUYENTRANH.COM <span style="color: #c3a281">WEBSITE</span></h1><br/>
                                        <p class="content">LOREM IPSUM DOLOR SIT AMETIPSUM DOLOR SIT</p>
                                        <form class="buttonheadslider">
                                            <input type="submit" value="READ MORE +">
                                            <input type="submit" value="BUY NOW >">
                                        </form>
                        </div>
                        <div class="itemheadslider itemslider2" >
                            
                            <img src="../images/slidebg1.png" alt=""/>
                        </div>
                        <div class="itemheadslider itemslider3" style="background: red">
                            <img src="../images/navbg2 (3).png" alt=""/>
                            
                        </div>  
                
<!--    <div class="slide1 item">
            <h1 class="welcome">Welcome to</h1><br/>
            <p class="title">AC BREAD WEBSITE</p><br/>
            <p class="content">LOREM IPSUM DOLOR SIT AMETIPSUM DOLOR SIT</p>
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=2">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=3">
    </div>-->
   
  </section>
                </nav>
            </header>
                    <script src="../js/jquery-3.5.1.min.js" type="text/javascript"></script>
                    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
                    <script src="../slick/slick.min.js" type="text/javascript"></script>
                    <script>
                         $(document).ready(function(){
$(".regular").slick({
     dots: false,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
    slidesToShow: 1,
    slidesToScroll: 1,
//  autoplay: true,
//  autoplaySpeed: 2000
      });
    }); 
                    </script>
                    
</body>
		