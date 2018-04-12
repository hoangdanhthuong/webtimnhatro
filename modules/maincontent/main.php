<div id="content">
	<?php
	if(isset($_GET['xem'])){
		$tam=$_GET['xem'];
	}else{
		$tam='';
	}
	if($tam==""){
		include("search/search.php");	
	}
	
	?>
	<!-- search -->
	<div id="content-body">
		<div class="container">
			<div  class="row">
				<?php
				
				if($tam=='trogiup'){
					include('left/trogiup.php');
					include("right/trogiup.php");
				}elseif($tam=='dangnhap'){
					include("left/dangnhap.php");
					include("right/baivietmoi.php");
				}elseif($tam=="dangky"){
					include("left/dangky.php");
					include("right/baivietmoi.php");
				}elseif($tam=="phongtronhatro"){
					include("left/phongtro.php");
					include("right/phongtro.php");
				}elseif($tam=="dangtin"){
					include("left/dangtin.php");
					include("right/trogiup.php");

				}elseif($tam=="nhanghikhachsan"){
					include("left/nhanghikhachsan.php");
					include("right/phongtro.php");

				}elseif($tam=="gioithieu"){
					include("left/gioithieu.php");
					include("right/phongtro.php");

				}elseif($tam=="dieukhoansudung"){
					include("left/dieukhoansudung.php");
					include("right/phongtro.php");
				}elseif($tam=="xemtin"){

					include("left/xemtin.php");
					include("right/phongtro.php");
				}else{
					include("left/trangchu.php");
					include("right/baivietmoi.php")	;
				}
				?>
				<!--left-->
				
				<!--right-->
			</div>
		</div>
	</div>
</div>
		<!--content-->