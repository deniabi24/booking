<div id="content">
	<div class="panel box-shadow-none content-header">
        <div class="panel-body">
          <div class="col-md-12">
             <h3 class="animated fadeInLeft"><?php echo $header ?></h3>
              <p class="animated fadeInDown">
                Transaksi <span class="fa-angle-right fa"></span> <?php echo $subheader ?>
              </p>
          </div>
        </div>
    </div>

    <div class="form-element">
    	<div class="col-md-12 padding-0">
    		<div class="col-md-12 panel" style="padding:50px;padding-bottom:70px;">
    			<form action="<?php echo base_url() ?>transaksi/add_transaksi" method="post">
                    <div class="alert alert-info alert-dismissable"><label class="badge" style="background: #ffffff;color:#333;"><span class="fa fa-info"></span></label> <?php echo $info; ?> </div>
    				<div class="form-group form-animate-text">
                        <input name="tanggal_transaksi" type="text" class="form-text datetime" required>
                        <span class="bar"></span>
                        <label><span class="fa fa-calendar"></span> Pilih Tanggal Transaksi</label>
                    </div>
                    <div class="form-group">
    					<label for="paket" style="font-size: 1.4em;"><span class="icons icon-clock"></span> Pilih Paket</label><br>
    					<select name="id_paket" id="paket" class="form-control" onchange="isiOtomatis()">
    						<option value="">- Pilih Paket -</option>
    						<option value="1">Pagi Jam 6:00 - 12:00</option>
    						<option value="2">Siang Jam 12:00 - 18:00</option>
    						<option value="3">Malam Jam 18:00 - 24:00</option>
    					</select>
    				</div><br>
    				<div class="form-group form-animate-text">
                        <input id="hargaPaket" name="harga_paket" type="text" class="form-text" required>
                        <span class="bar"></span>
                        <label><span class="fa fa-money"></span> Harga Paket</label>
                    </div>

                    <div class="form-group form-animate-text">
                        <input id="durasi" name="durasi" type="text" class="form-text" onkeyup="getSubtotal()" required>
                        <span class="bar"></span>
                        <label><span class="fa fa-clock-o"></span> Durasi</label>
                    </div>
                    <div class="form-group form-animate-text">
                        <input id="subtotal" name="subtotal" type="text" class="form-text" required>
                        <span class="bar"></span>
                        <label><span class="fa fa-money"></span> Sub Total</label>
                    </div>

                    <div class="form-group">
    					<label for="diskon" style="font-size: 1.4em;"><span class="icons icon-tag"></span> Diskon</label><br>
    					<select name="diskon" id="diskon" class="form-control" onchange="getTotal()">
    						<option value="">- Pilih Diskon -</option>
    						<option value="">Tidak Ada Diskon</option>
    						<option value="0.1">10 %</option>
    						<option value="0.2">20 %</option>
    						<option value="0.3">30 %</option>
    						<option value="0.4">40 %</option>
    						<option value="0.4">50 %</option>
    					</select>
    				</div><br>

    				<div class="form-group form-animate-text">
                        <input id="total" name="total" type="text" class="form-text" required>
                        <span class="bar"></span>
                        <label><span class="fa fa-money"></span> Total</label>
                    </div>

                    <div class="form-group">
                    	<button class="btn btn-3d btn-primary"> SIMPAN TRANSAKSI</button> &nbsp;
                    	<button type="reset" class="btn btn-3d btn-danger"> BATAL</button>
                    </div>
    			</form>
    		</div>
    	</div>
    </div>
</div>