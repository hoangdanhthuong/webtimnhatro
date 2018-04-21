
<div id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="head-left">
					<img src="images/header-logo.png">
					<a href="index.php">NhaTroVinh.com</a>
				</div>
				<div id="head-right">
					<a href="index.php?xem=dangtin">Đăng tin miễn phí</a>
					<?php
						if(!isset($_SESSION['email_web_nha_tro'])){
					?>
					<a href="index.php?xem=dangnhap">Đăng nhập</a>
					<a href="index.php?xem=dangky">Đăng ký</a>
					<?php
						}
					?>
					<a href="index.php?xem=trogiup">Trợ giúp</a>
				</div>
			</div>
		</div>
	</div>
</div>