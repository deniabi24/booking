<div id="content">
  <div class="panel content-header">
      <div class="panel-body">
        <div class="col-md-12">
            <h3 class="animated fadeInLeft">Calendar</h3>
            <p class="animated fadeInDown">
              Home <span class="fa-angle-right fa"></span> Calendar
            </p>
        </div>
      </div>
  </div>
  
	  <div class="col-md-12">
	  	<div class="panel">
		    <div class="panel-heading" style="padding:20px;"><button class="btn btn-3d btn-success">Book Now!</button></div>
		    <div class="panel-body">
		      <div id='calendar'></div>
		  </div>
		</div>
	</div>
	



    <!-- modal -->
  <div class="modal fade" tabindex="-1" role="dialog" id="eModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form method="post" id="form_booking" action="<?php echo base_url() ?>booking/input">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Input Booking</h4>
					  </div>
					  <div class="modal-body">
						  
						<div class="form-group">
								<label>Nama Costumer</label>
								<input type="text" name="nama_cs" id="nama_cs" class="form-control" />
							</div>
							<div class="form-group">
									<label>Nama Club</label>
									<input type="text" name="nama_cl" id="nama_cl" class="form-control" />
								</div>
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" name="phone" id="phone" class="form-control" />
							</div>
							<div class="form-group">
									<label>Alamat</label>
									<input type="text" name="alamat" id="alamat" class="form-control" />
              </div>
              <div class="form-group">
                <label for="start">Waktu Mulai</label>
                <input type="text" name="start" id="start" class="form-control" readonly/>
              </div>
              <div class="form-group">
                <label for="end">Waktu Selesai</label>
                <input type="text" name="end" id="end" class="form-control" readonly />
              </div>
              <div class="form-group">
                <label for="status"> Status Pembayaran </label>
                <input type="text" name="status_pembayaran" id="status_pembayaran" class="form-control" />
              </div>
					  <div class="modal-footer">
						  <input type="submit" name="submit" id="submit" class="btn btn-info" value="Simpan" />
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
		  </div>
	</div>
<!-- //modal -->
</div>
