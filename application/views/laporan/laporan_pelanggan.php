                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h4 class="my-auto font-weight-bold mb-0 ">Customer Data Report</h4>
                        </div>
                        <div class="card-body">
                            <form name="form_filter_pelanggan" action="<?php echo base_url().'pelanggan/laporan_filter' ?>" method="post" class="w-100 user needs-validation" novalidate>
                                <div class="row align-items-end">
                                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label ">Gender</label>
                                            <select class="form-control" name="jeniskelamin" pattern="[A-Za-z]{1,10}" >
                                                <option value="All" <?php if(set_value('jeniskelamin') == 'All') { echo 'selected'; } ?>>All</option>
                                                <option value="Male" <?php if(set_value('jeniskelamin') == 'Male') { echo 'selected'; } ?>>Male</option>
                                                <option value="Female" <?php if(set_value('jeniskelamin') == 'Female') { echo 'selected'; } ?>>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <button type="submit" class="flex-fill btn btn-primary rounded-0 btn-block px-4"><i class="fa fa-search"></i> Search</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                        <a target="blank" href="<?php echo base_url().'pelanggan/print/'.set_value('jeniskelamin') ?>" class="btn btn-success btn-block rounded-0 shadow-sm"><i class="fas fa-print fa-sm text-white-500"></i> Print</a>
                                        </div>
                                    </div>
                                </div>
                            </form>


                            <div class="table-responsive mt-3">
                                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="">
                                            <th>No.</th>
                                            <th>ID</th>
                                            <th>Customer's name</th>
                                            <th>Address</th>
                                            <th>Contact</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 1;
                                            foreach ($data_pelanggan as $pelanggan) {
                                        ?>
                                        <tr>
                                            <th><?php echo $no++ ?></th>
                                            <td><?php echo $pelanggan->pelanggan_id ?></td>
                                            <td><?php echo $pelanggan->nama_pelanggan.' ' ?><sup>(<?php echo substr($pelanggan->jeniskelamin, 0, 1) ?>)</sup></td>
                                            <td><?php echo $pelanggan->alamat ?></td>
                                            <td><?php echo $pelanggan->no_hp ?></td>
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

            

            