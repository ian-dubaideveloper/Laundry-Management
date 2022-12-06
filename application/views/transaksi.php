                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h4 class="my-auto font-weight-bold mb-0 ">Transaction Data</h4>
                            <a href="#" class="btn btn-primary shadow-sm rounded-0" data-toggle="modal" data-target="#addTransaksi"><i
                                class="fas fa-plus fa-sm text-white-500"></i> Add New Transaction</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
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
                                            <th class="actions">Actions</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php
                                            $no = 1;
                                            foreach ($data_transaksi as $transaksi) {
                                        ?>
                                        <tr>
                                            <th><?php echo $no++ ?></th>
                                            <td>
                                                <?php if ($transaksi->tgl_selesai == '0000-00-00') { ?>
                                                    <span class="badge badge-danger">Not Finished Yet</span><br>
                                                <?php } 
                                                    echo $transaksi->transaksi_id;
                                                ?>
                                            </td>
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
                                            <td class="action-icons text-center">

                                                <?php if ($transaksi->tgl_selesai == '0000-00-00') { ?>

                                                <a target="blank" href="<?php echo base_url().'transaksi/print_nota/'.$transaksi->transaksi_id?>" class="btn btn-sm rounded-lg btn-primary mb-2"> Note</a><br>

                                                <a href="<?php echo base_url().'transaksi/done/'.$transaksi->transaksi_id?>" class="btn btn-sm rounded-lg btn-success mb-2">Complete</a><br>

                                                <?php } ?>
                                                <a href="#" data-toggle="modal" data-target="#editTransaksi<?php echo $no-1 ?>"> 
                                                    <i title="ubah" class="fas fa-edit text-lg text-info"></i>
                                                </a>
                                                <a href="<?php echo base_url().'transaksi/delete/'.$transaksi->transaksi_id?>"> 
                                                    <i title="hapus" class="fas fa-trash text-lg text-danger"></i>
                                                </a>
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

            <!-- Modal for adding new data -->
            <div class="modal fade" id="addTransaksi" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formAddTransaksi" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-bold  mx-3 mt-3" id="formAddTransaksiLabel">Input Transaction Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form name="form_add_transaksi" action="<?php echo base_url().'transaksi/add' ?>" method="post" class="user needs-validation mx-3 mb-4" novalidate>
                            <div class="modal-body"> 
                                <div class="form-group">
                                    <label class="control-label ">Customer</label>
                                    <select class="form-control" name="pelanggan_id" required>
                                        <option value="">--Please Select--</option>
                                        <?php
                                            foreach ($data_pelanggan as $pelanggan) {
                                        ?>
                                        <option value="<?php echo $pelanggan->pelanggan_id ?>">
                                            <?php echo $pelanggan->pelanggan_id.' '.$pelanggan->nama_pelanggan ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                    <div class="invalid-feedback">
                                       Choose a customer identity!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Employee</label>
                                    <select class="form-control" name="karyawan_id" required>
                                        <option value="">--Please Select--</option>
                                        <?php
                                            foreach ($data_karyawan as $karyawan) {
                                                if ($karyawan->aktif == 1) {
                                        ?>
                                        <option value="<?php echo $karyawan->karyawan_id ?>">
                                            <?php echo $karyawan->karyawan_id.' '.$karyawan->nama_karyawan ?>
                                        </option>
                                        <?php }} ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Choose employee identity!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Weight (kg)</label>
                                    <input type="number"  class="form-control" placeholder='Laundry Weight' name="berat"  required>
                                    <div class="invalid-feedback">
                                        Fillup Laundry Weight!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Order Date</label>
                                    <input type="date"  class="form-control" placeholder='Laundry Order Date' name="tgl_order" required>
                                    <div class="invalid-feedback">
                                        Fill in the date of the laundry order!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Finished Date</label>
                                    <input type="date"  class="form-control" placeholder='Finished Date' name="tgl_selesai">
                                </div>
                            </div>
                            <div class="modal-footer d-flex">
                                <button type="button" class="flex-fill btn btn-danger rounded-0" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="flex-fill btn btn-primary rounded-0">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal for editing existing data -->
            <?php
                $no = 1;
                foreach ($data_transaksi as $transaksi) {
            ?>
            <div class="modal fade" id="editTransaksi<?php echo $no ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formEditTransaksi" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-bold  mx-3 mt-3" id="formEditTransaksiLabel">Edit Transaction Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form name="form_edit_matakuliah" action="<?php echo base_url().'transaksi/edit' ?>" method="post" class="user needs-validation mx-3 mb-4" novalidate>
                            <div class="modal-body"> 
                                <div class="form-group d-none">
                                    <label class="control-label ">ID Transactions</label>
                                    <input type="text"  class="form-control" name="transaksi_id" value="<?php echo $transaksi->transaksi_id ?>" required readonly>
                                </div>                                
                                <div class="form-group">
                                    <label class="control-label ">Customer</label>
                                    <select class="form-control" name="pelanggan_id" required>
                                        <option value="">--Please Select--</option>
                                        <?php
                                            foreach ($data_pelanggan as $pelanggan) {
                                        ?>
                                        <option value="<?php echo $pelanggan->pelanggan_id ?>" <?php if ($pelanggan->pelanggan_id === $transaksi->pelanggan_id) { echo "selected"; } ?>>
                                            <?php echo $pelanggan->pelanggan_id.' '.$pelanggan->nama_pelanggan ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                    <div class="invalid-feedback">
                                       Choose a customer identity!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Employee</label>
                                    <select class="form-control" name="karyawan_id" required>
                                        <option value="">--Please Select--</option>
                                        <?php
                                            foreach ($data_karyawan as $karyawan) {
                                                if ($karyawan->aktif == 1) {
                                        ?>
                                        <option value="<?php echo $karyawan->karyawan_id ?>" <?php if ($karyawan->karyawan_id === $transaksi->karyawan_id) { echo "selected"; } ?>>
                                            <?php echo $karyawan->karyawan_id.' '.$karyawan->nama_karyawan ?>
                                        </option>
                                        <?php }} ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Choose employee identity!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Weight (kg)</label>
                                    <input type="number"  class="form-control" placeholder='Laundry Weight' name="berat" value="<?php echo $transaksi->berat ?>" required>
                                    <div class="invalid-feedback">
                                        Fillup Laundry Weight!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Order Date</label>
                                    <input type="date"  class="form-control" placeholder='Laundry Order Date' name="tgl_order" value="<?php echo $transaksi->tgl_order ?>" required>
                                    <div class="invalid-feedback">
                                        Fill in the date of the laundry order!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Finished Date</label>
                                    <input type="date"  class="form-control" placeholder='Finished Date' name="tgl_selesai" value="<?php echo $transaksi->tgl_selesai ?>">
                                </div>
                            </div>
                            <div class="modal-footer d-flex">
                                <button type="button" class="flex-fill btn btn-danger rounded-0" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="flex-fill btn btn-primary rounded-0">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php
                $no++;
                }
            ?>