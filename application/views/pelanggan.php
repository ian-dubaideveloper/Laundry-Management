                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h4 class="my-auto font-weight-bold mb-0 ">Customer Data</h4>
                            <a href="#" class="btn btn-primary shadow-sm rounded-0" data-toggle="modal" data-target="#addPelanggan"><i
                                class="fas fa-plus fa-sm text-white-500"></i> Add Customers</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="">
                                            <th>#</th>
                                            <th>ID</th>
                                            <th>Customer's Name<sup>(M/F)</sup></th>
                                            <th>Address</th>
                                            <th>Contact</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php
                                            $no = 1;
                                            $kode = '';
                                            $n_pelanggan = count($data_pelanggan);
                                            if ($n_pelanggan == 0) {
                                                $kode = 'P000';
                                            } else {
                                                $last_id = (int) substr($data_pelanggan[$n_pelanggan-1]->pelanggan_id, 3, 1);
                                                $kode = 'P00'.($last_id + 2);
                                            }
                                            foreach ($data_pelanggan as $pelanggan) {
                                        ?>
                                        <tr>
                                            <th><?php echo $no++ ?></th>
                                            <td><?php echo $pelanggan->pelanggan_id ?></td>
                                            <td><?php echo $pelanggan->nama_pelanggan.' ' ?><sup>(<?php echo substr($pelanggan->jeniskelamin, 0, 1) ?>)</sup></td>
                                            <td><?php echo $pelanggan->alamat ?></td>
                                            <td><?php echo $pelanggan->no_hp ?></td>
                                            <td class="action-icons text-center">
                                                <a href="#" data-toggle="modal" data-target="#editPelanggan<?php echo $pelanggan->pelanggan_id ?>"> 
                                                    <i title="ubah" class="fas fa-edit text-lg text-info"></i>
                                                </a>
                                                <a href="<?php echo base_url().'pelanggan/delete/'.$pelanggan->pelanggan_id?>"> 
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
            <div class="modal fade" id="addPelanggan" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formAddPelanggan" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-bold  mx-3 mt-3" id="formAddPelangganLabel">Customer Data Input</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form name="form_add_mahasiswa" action="<?php echo base_url().'pelanggan/add' ?>" method="post" class="user needs-validation mx-3 mb-4" novalidate>
                            <div class="modal-body"> 
                                <div class="form-group">
                                    <label class="control-label ">ID</label>
                                    <input type="text" class="form-control" placeholder="Customer ID" autofocus name="pelanggan_id" required readonly value="<?php echo $kode ?>">
                                </div>
                                <div class="form-group">
                                    <label class="control-label ">Customer's Name</label>
                                    <input type="text" class="form-control" title="Fill in the customer's name with letters" placeholder='Customers Name'  name="nama_pelanggan" pattern="[A-Za-z ]{1,50}" required>
                                    <div class="invalid-feedback">
                                    Fill in the customer's name with letters! (max. 50 letters)
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Gender</label>
                                    <select class="form-control" name="jeniskelamin" pattern="[A-Za-z]{1,10}" required>
                                        <option value="">--Please Select--</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    Choose the gender of the customer!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Address</label>
                                    <input type="text"  class="form-control" placeholder='Address' name="alamat"  required>
                                    <div class="invalid-feedback">
                                    Enter the customer's address!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Mobile No.</label>
                                    <input type="tel"  class="form-control" placeholder='Customer Mobile Number' name="no_hp"  pattern="[0-9]{11,15}" required>
                                    <div class="invalid-feedback">
                                    Fill in No. Customer phone!
                                    </div>
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
                foreach ($data_pelanggan as $pelanggan) {
            ?>
            <div class="modal fade" id="editPelanggan<?php echo $pelanggan->pelanggan_id ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formEditPelanggan" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-bold  mx-3 mt-3" id="formEditPelangganLabel">Change Customer Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form name="form_edit_mahasiswa" action="<?php echo base_url().'pelanggan/edit' ?>" method="post" class="user needs-validation mx-3 mb-4" novalidate>
                            <div class="modal-body"> 
                                <div class="form-group">
                                    <label class="control-label ">ID</label>
                                    <input type="text" class="form-control" placeholder="Customer ID" autofocus name="pelanggan_id" value="<?php echo $pelanggan->pelanggan_id ?>" readonly>
                                </div>
                                <hr>

                                <div class="form-group">
                                    <label class="control-label ">Customer's Name</label>
                                    <input type="text" class="form-control" title="Fill in the customer's name with letters" placeholder='Customers Name'  name="nama_pelanggan" pattern="[A-Za-z ]{1,50}" value="<?php echo $pelanggan->nama_pelanggan ?>" required>
                                    <div class="invalid-feedback">
                                    Fill in the customer's name with letters! (max. 50 letters)
                                    </div>
                                </div>
                                <hr>

                                <div class="form-group">
                                    <label class="control-label ">Gender</label>
                                    <select class="form-control" name="jeniskelamin" pattern="[A-Za-z]{1,10}" required>
                                        <option value="">--Please Select--</option>
                                        <option value="Male" <?php if ($pelanggan->jeniskelamin === 'Male') { echo "selected"; } ?>>Male</option>
                                        <option value="Female" <?php if ($pelanggan->jeniskelamin === 'Female') { echo "selected"; } ?>>Female</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    Choose the gender of the customer!
                                    </div>
                                </div>
                                <hr>

                                <div class="form-group">
                                    <label class="control-label ">Address</label>
                                    <input type="text"  class="form-control" placeholder='Address' name="alamat"  value="<?php echo $pelanggan->alamat ?>" required>
                                    <div class="invalid-feedback">
                                    Enter the customer's address!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Mobile No.</label>
                                    <input type="tel"  class="form-control" placeholder='Mobile No.' name="no_hp" pattern="[0-9]{11,15}" value="<?php echo $pelanggan->no_hp ?>" required>
                                    <div class="invalid-feedback">
                                    Fill in No. Customer phone!
                                    </div>
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
                }
            ?>

            

            