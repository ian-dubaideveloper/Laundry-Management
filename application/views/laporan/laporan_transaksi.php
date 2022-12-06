                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h4 class="my-auto font-weight-bold mb-0 ">Transaction Data Report</h4>
                        </div>
                        <div class="card-body">
                            <form name="form_filter_transaksi" action="<?php echo base_url().'transaksi/laporan_filter' ?>" method="post" class="w-100 user needs-validation" novalidate>
                                <h5>Transactions are completed within the timeframe</h5>
                                <div class="row align-items-end">
                                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label ">From</label>
                                            <input type="date"  class="form-control" name="dari" value="<?php echo set_value('dari')?>" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label ">To</label>
                                            <input type="date"  class="form-control" name="sampai" value="<?php echo set_value('sampai')?>" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <button type="submit" class="flex-fill btn btn-primary rounded-0 btn-block px-4"><i class="fa fa-search"></i> Search</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                        <a target="blank" href="<?php echo base_url().'transaksi/print/'.set_value('dari').'/'.set_value('sampai') ?>" class="btn btn-success btn-block rounded-0 shadow-sm"><i class="fas fa-print fa-sm text-white-500"></i> Print</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="table-responsive mt-3">
                                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="">
                                            <th>#</th>
                                            <th>Transc. ID</th>
                                            <th>Customer</th>
                                            <th>Employee</th>
                                            <th>Weight</th>
                                            <th>Total</th>
                                            <th>Order</th>
                                            <th>Finished</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 1;
                                            foreach ($data_transaksi as $transaksi) {
                                        ?>
                                        <tr>
                                            <th><?php echo $no++ ?></th>
                                            <td><?php echo $transaksi->transaksi_id ?></td>
                                            <td>
                                                <span class="row px-3  text-xs"><?php echo $transaksi->pelanggan_id ?></span>
                                                <span class="row px-3"><?php echo $transaksi->nama_pelanggan ?></span>
                                            </td>
                                            <td>
                                                <span class="row px-3  text-xs"><?php echo $transaksi->karyawan_id ?></span>
                                                <span class="row px-3"><?php echo $transaksi->nama_karyawan ?></span>
                                            </td>
                                            <td><?php echo $transaksi->berat ?> KG</td>
                                            <td>$<?php echo $transaksi->total ?></td>
                                            <td><?php echo $transaksi->tgl_order ?></td>
                                            <td><?php if ($transaksi->tgl_selesai == '0000-00-00') { echo '-'; } else { echo $transaksi->tgl_selesai; } ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            

            