                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h4 class="my-auto font-weight-bold mb-0 ">Expenditure Data Report</h4>
                        </div>
                        <div class="card-body">
                            <form name="form_filter_pengeluaran" action="<?php echo base_url().'pengeluaran/laporan_filter' ?>" method="post" class="w-100 user needs-validation" novalidate>
                                <h5>Expenditure on time range</h5>
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
                                        <a target="blank" href="<?php echo base_url().'pengeluaran/print/'.set_value('dari').'/'.set_value('sampai') ?>" class="btn btn-success btn-block rounded-0 shadow-sm"><i class="fas fa-print fa-sm text-white-500"></i> Print</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="table-responsive mt-3">
                                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="">
                                            <th>#</th>
                                            <th>Exp. ID</th>
                                            <th>Detail</th>
                                            <th>Total</th>
                                            <th>Date</th>
                                            <th>Employee PJ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 1;
                                            foreach ($data_pengeluaran as $pengeluaran) {
                                        ?>
                                        <tr>
                                            <th><?php echo $no++ ?></th>
                                            <td><?php echo $pengeluaran->pengeluaran_id ?></td>
                                            <td><?php echo $pengeluaran->detail ?></td>
                                            <td>$<?php echo $pengeluaran->total ?></td>
                                            <td><?php echo $pengeluaran->tgl_pengeluaran ?></td>
                                            <td>
                                                <span class="row px-3  text-xs"><?php echo $pengeluaran->karyawan_id ?></span>
                                                <span class="row px-3"><?php echo $pengeluaran->nama_karyawan ?></span>
                                            </td>
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

            

            