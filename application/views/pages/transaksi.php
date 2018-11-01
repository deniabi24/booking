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
                    <div class="panel-heading" style="padding: 20px;">
                      <a href="<?= base_url() ?>/transaksi/add" class="btn ripple-infinite btn-raised btn-success"">
                        <div>
                          <span class="fa fa-plus"></span> Transaksi
                        </div>
                      </a>
                    </div>
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
                          <td><?php echo $row->durasi.' '.$jam; ?></td>
                          <td><?php echo $row->sub_total; ?></td>
                          <td><?php echo $row->diskon; ?> %</td>
                          <td><?php echo $row->total; ?></td>
                          <td>
                            <a href="<?php echo base_url().'transaksi/delete/'.$row->id_transaksi; ?>" class="btn btn-danger" onclick="return confirm('Apakah kamu yakin ingin menghapus transaksi ini ?')"><span class="fa fa-close"></span> </a>
                          </td>
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
