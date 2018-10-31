<div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft"><?php echo $header; ?></h3>
                        <p class="animated fadeInDown">
                          Transaksi <span class="fa-angle-right fa"></span> <?php echo $subheader; ?>
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Data Tables</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Tanggal</th>
                          <th>Paket</th>
                          <th>Harga</th>
                          <th>Durasi</th>
                          <th>Sub Total</th>
                          <th>Diskon</th>
                          <th>Total</th>
                          <th>Option</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($result->result() as $row): ?>
                        <tr>
                          <td><?php echo $row->tanggal_transaksi; ?></td>
                          <td><?php echo $row->nama_paket; ?></td>
                          <td><?php echo $row->harga_paket; ?></td>
                          <td><?php echo $row->durasi; ?></td>
                          <td><?php echo $row->sub_total; ?></td>
                          <td><?php echo $row->diskon; ?></td>
                          <td><?php echo $row->total; ?></td>
                          <td></td>
                        </tr>
						<?php endforeach; ?>
                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>  
              </div>
            </div>
