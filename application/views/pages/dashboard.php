          <!-- start: Content -->
          <div id="content">
            <div class="col-md-12 padding-0">
              <div class="col-md-12 padding-0">
                <div class="col-md-12 padding-0">
                  <div class="panel box-shadow-none content-header">
                      <div class="panel-body">
                        <div class="col-md-12">
                            <h3 class="animated fadeInLeft">Dashboard</h3>
                            <p class="animated fadeInDown" style="line-height:.4;">
                              Welcome To FutsallApp
                            </p>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box-v5 panel">
                  	<form action="<?php base_url() ?>dashboard/agendaInput" method="post">
                  	<input type="hidden" name="tanggal" value="<?php echo date('Y-m-d'); ?>">
                    <div class="panel-heading padding-0 bg-white border-none">
                        <textarea name="agenda" placeholder="Agenda Harian"></textarea>
                    </div>
                    <div class="panel-body">
                      <div class="col-md-12 padding-0">
                        <div class="col-md-6 col-sm-6 col-xs-6 tool">
                          <a href="#">
                            <span class="fa fa-map-marker fa-2x"></span>
                          </a>
                          <a href="#">
                            <span class="fa fa-camera fa-2x"></span>
                          </a>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 padding-0">
                          <button type="submit" class="btn btn-round pull-right">
                            <span>Send</span>
                            <span class="icon-arrow-right icons"></span>
                          </button>
                        </div>
                      </div>
                    </div>
                </form>
                  </div>

                <div class="panel box-v6">
                     <div class="panel-heading">
                       <h4>Agenda Hari Ini
                        <span class="icon-options-vertical icons pull-right"></span>
                      </h4>
                     </div>
                    <div class="panel-body padding-0">
                      <div class="col-md-12 padding-0">
                          	<?php foreach($agenda_data->result() as $row) : ?>
	                          <div class="col-md-12 padding-0" style="height:127px;">
	                            <div class="col-md-12 col-sm-12 box-v6-content-bg" data-progress="100%">
	                              
	                            </div>
	                            <div class="col-md-12 col-sm-12 col-xs-12 padding-0 box-v6-content">
	                              <div class="col-md-10 col-sm-10 col-xs-10">
	                                <img src="<?php echo base_url() ?>asset/img/avatar.jpg"/>

	                                <h4><?php echo $row->agenda; ?></h4>
	                                <p><?php echo $row->tanggal_agenda; ?></p>
	                              </div>
	                              <div class="col-md-2 col-sm-2 hidden-xs text-center box-v6-progress">
	                                <a style="color: red" href="<?php echo base_url().'dashboard/deleteAgenda/'.$row->id_agenda; ?>"><h3><span class="fa fa-trash"></span></h3></a>
	                              </div>
	                            </div>
	                          </div>
							<?php endforeach ?>
                      </div>
                      
                    </div>
                </div>
              </div>
              <div class="col-md-6">
                  
                  <div class="panel">
                      <div class="panel-heading">
                        <h4>Transaksi Terakhir</h4>
                        
                      </div>
                      <div class="panel-body">
                        <div class="col-md-12 responsive-table">
                            <table class="table table-hover">
                              <tr>
                                <th>Tanggal</th>
                                <th>Paket</th>
                                <th>Durasi</th>
                                <th>Total</th>
                              </tr>
                              <?php foreach($transaksi->result() as $trans): ?>
                              <tr>
                                <td><?php echo $trans->tanggal_transaksi; ?></td>
                                <td><?php echo $trans->nama_paket; ?></td>
                                <td>
                                  <?php echo $trans->durasi .' Jam'; ?>
                                </td>
                                <td>
                                  <?php echo $trans->total; ?>
                                </td>
                              </tr>
								<?php endforeach; ?>
                            </table>
                            
                        </div>
                      </div>
                  </div>
              </div>
              </div>
            </div>
          </div>
          <!-- end: Content -->