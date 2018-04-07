					


					<form method="post" action="{{ route('contact.store') }}" enctype="multipart/form-data" files="true">
						 {{ csrf_field() }}
						<div class="col-md-6 col-sm-6 contact_left_grid">
							<input type="text" name="nama" placeholder="Nama Lengkap" required="">
							<input type="email" name="imel" placeholder="Email" required="">
						</div>
						<div class="col-md-6 col-sm-6 contact_left_grid">
							<input type="text" name="telp" placeholder="Telepon" required="">
							<input type="text" name="subjek" placeholder="Subject" required="">
						</div>
						<div class="clearfix"> </div>
						<textarea name="pesan" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
						<input type="submit" value="Submit">
						<input type="reset" value="Clear">

					</form>