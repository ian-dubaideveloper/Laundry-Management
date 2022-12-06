                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h4 class="my-auto font-weight-bold mb-0 ">Transaction Data Report</h4>
                        </div>
                        <div class="card-body">
                            <form name="form_filter_karyawan" action="<?php echo base_url().'transaksi/laporan_filter' ?>" method="post" class="w-100 user needs-validation mx-3 mb-4" novalidate>
                                <h5>Transactions are completed within the timeframe</h5>
                                <div class="row align-items-end w-100">
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label ">From</label>
                                            <input type="date"  class="form-control" name="dari" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label ">To</label>
                                            <input type="date"  class="form-control" name="sampai" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <button type="submit" class="flex-fill btn btn-block btn-primary  px-4"><i class="fa fa-search"></i> Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            

            