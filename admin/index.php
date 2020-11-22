	        		
	        		
<?php session_start()?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="../css/admin-manager.css">
</head>
<body>
	<div id=container>
		<div id="header">
			<div id="icon_navigation">
				<a href="#">
				    <svg width="30" height="30" id="icon_open">
				        <path d="M0,5 30,5" stroke="#000" stroke-width="5"/>
				        <path d="M0,14 30,14" stroke="#000" stroke-width="5"/>
				        <path d="M0,23 30,23" stroke="#000" stroke-width="5"/>
				    </svg>
			 	 </a>
				<span id="icon_close">&times;</span>
			</div>
			<div id="container_logout">
				<button class="logout">logout</button>
			</div>
		</div>
		<div id="content">
			Đây là phần nội dung!
		</div>
		<div id="container_menu">
			<div id="menu">
				<div>
					<h4>Admin</h4>
				</div>
			</div>
			<div id="navigation">
				<ul>
					<li><a href="#">Bảng điều khiển</a></li>
					<li><a href="#">Thể loại</a></li>
					<li><a href="#">Truyện</a>
					<form>
						<div>
						<input name="truyen" type="radio" value="danhsachtruyen" />Danh sách truyện
						</div>
						<div>
						<input name="truyen" type="radio" value="danhsachchap" />Danh sách chap
					</div>
					<div>
						<input name="truyen" type="radio" value="themtruyen" />Thêm truyện
					</div>
					</form>
					</li>
					<li><a href="#">Quản lí người dùng</a></li>
				</ul>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		var showmenu=document.getElementById("icon_open");
		var closemenu=document.getElementById("icon_close");
		 showmenu.addEventListener("click",function(){
		 	document.getElementById("container_menu").style.width="30%";
		 	document.getElementById("header").style.marginLeft="30%";
		 	document.getElementById("content").style.marginLeft="30%";
		 	document.getElementById("icon_close").style.display="inline-block";
		 	document.getElementById("icon_open").style.display="none";
		 });
		 closemenu.addEventListener("click",function(){
		 	document.getElementById("container_menu").style.width="0px";
		 	document.getElementById("header").style.marginLeft="0px";
		 	document.getElementById("content").style.marginLeft="0px";
		 	document.getElementById("icon_close").style.display="none";
		 	document.getElementById("icon_open").style.display="block";
		 })

	</script>
</body>
</html>