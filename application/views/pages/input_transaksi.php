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
    			<form action="<?php echo base_url() ?>transaksi/add" method="post">

    				<div class="form-group form-animate-text">
                        <input type="text" class="form-text datetime" required>
                        <span class="bar"></span>
                        <label><span class="fa fa-calendar"></span> Tanggal Transaksi</label>
                    </div>
                    <div class="form-group">
    					<label for="paket" style="font-size: 1.4em;"><span class="icons icon-clock"></span> Pilih Paket</label><br>
    					<select name="id_paket" id="paket" class="select2-A">
    						<option value="1">Pagi Jam 6:00 - 12:00</option>
    						<option value="2">Siang Jam 12:00 - 18:00</option>
    						<option value="3">Malam Jam 18:00 - 24:00</option>
    					</select>
    				</div><br>
    				<div class="form-group form-animate-text">
                        <input type="text" class="form-text" required>
                        <span class="bar"></span>
                        <label><span class="fa fa-calendar"></span> Harga Paket</label>
                    </div>
    			</form>
    		</div>
    	</div>
    </div>
</div>