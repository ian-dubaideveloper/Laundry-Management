                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h4 class="my-auto font-weight-bold mb-0 ">Employee Data Report</h4>
                        </div>
                        <div class="card-body">
                            <form name="form_filter_karyawan" action="<?php echo base_url().'karyawan/laporan_filter' ?>" method="post" class="w-100 user needs-validation" novalidate>
                                <h5>Active on time range</h5>
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
                                        <a target="blank" href="<?php echo base_url().'karyawan/print/'.set_value('dari').'/'.set_value('sampai') ?>" class="btn btn-success btn-block rounded-0 shadow-sm"><i class="fas fa-print fa-sm text-white-500"></i> Print</a>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div class="d-flex m-3">
                                
                            </div>

                            <div class="table-responsive mt-3">
                                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="">
                                            <th>No.</th>
                                            <th>ID</th>
                                            <th>Employee Name</th>
                                            <th>Address</th>
                                            <th>Contact</th>
                                            <th>Salary/month</th>
                                            <th>Join</th>
                                            <th>End</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 1;
                                            foreach ($data_karyawan as $karyawan) {
                                        ?>
                                        <tr>
                                            <th><?php echo $no++ ?></th>
                                            <td><?php echo $karyawan->karyawan_id ?></td>
                                            <td><?php echo $karyawan->nama_karyawan.' ' ?><sup>(<?php echo substr($karyawan->jeniskelamin, 0, 1) ?>)</sup></td>
                                            <td><?php echo $karyawan->alamat ?></td>
                                            <td><?php echo $karyawan->no_hp ?></td>
                                            <td>$<?php echo $karyawan->gaji_perbulan ?></td>
                                            <td><?php echo $karyawan->tgl_bergabung ?></td>
                                            <td><?php if ($karyawan->tgl_berhenti == '0000-00-00') { echo '-'; } else { echo $karyawan->tgl_berhenti; } ?></td>
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

            

            