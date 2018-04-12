<div class="register col-md-9" >
	<div class="heading">
		<p><a href="index.php">Trang chủ </a>&nbsp; &#x226B; &nbsp; <a href="index.php?xem=dangtin">Đăng tin</a></p>
	</div>
	<h1 class="well text-center">Đăng tin</h1>
	<div class="col-lg-12 well">
		<div class="row">
			<form>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-6 form-group">
							<label>Tiêu đề <span>*</span></label>
							<input type="text" placeholder="Tiêu đề.." class="form-control">
						</div>
						<div class="col-sm-6 form-group">
							<label>Số điện thoại <span>*</span></label>
							<input type="text" placeholder="Số điện thoại.." class="form-control">
						</div>
					</div>					
					
					<div class="row">
						<div class="col-sm-4 form-group">
							<label for="tinh">Tỉnh(Thành phố) <span>*</span> </label>

							<select name="tinh" class="form-control" id="tinh">
								<option >Vinh</option>
							</select>
						</div>	
						<div class="col-sm-4 form-group">
							<label for="tinh">Quận(huyện) <span>*</span></label>

							<select name="quanhuyen" class="form-control" id="tinh">
								<option >Vinh</option>
							</select>
						</div>		
						<div class="col-sm-4 form-group">
							<label for="tinh">Phường(xã) <span>*</span></label>

							<select name="tinh" class="form-control" id="tinh">
								<option >Vinh</option>
							</select>
						</div>			
					</div>
					<div class="form-group">
						<label>Địa chỉ liên hệ <span>*</span></label>
						<textarea placeholder="Nhập địa chỉ.." rows="3" class="form-control"></textarea>
					</div>	
					<div class="row">
						<div class="col-sm-4 form-group">
							<label>Số lượng phòng còn(<span>*</span>)</label>
							<input type="number" placeholder="Số phòng.." class="form-control" required="required">
						</div>		
						<div class="col-sm-6 form-group">
							<label for="hinhanh">Hình ảnh</label>
							<input type="file" name="hinhanh" accept="image/*">
						</div>	
					</div>
					<div class="row">
						<label for="map">Bản đồ</label>
						<div id="map"></div>
					</div>						
					
					<button type="button" class="btn btn-md btn-primary col-sm-3">Gửi thông tin</button>					
				</div>
			</form> 
		</div>
	</div>
</div>