                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h4 class="my-auto font-weight-bold mb-0 ">Employee Data</h4>
                            <a href="#" class="btn btn-primary shadow-sm rounded-0" data-toggle="modal" data-target="#addKaryawan"><i
                                class="fas fa-plus fa-sm text-white-500"></i> Add Employees</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="">
                                            <th>#</th>
                                            <th>ID</th>
                                            <th>Employee <sup>(M/F)</sup></th>
                                            <th>Address</th>
                                            <th>Contact</th>
                                            <th>Salary</th>
                                            <th>Join Date</th>
                                            <th>End Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php
                                            $no = 1;
                                            $kode = '';
                                            $n_karyawan = count($data_karyawan);
                                            if ($n_karyawan == 0) {
                                                $kode = 'K001';
                                            } else {
                                                $last_id = (int) substr($data_karyawan[$n_karyawan-1]->karyawan_id, 3, 1);
                                                $kode = 'K00'.($last_id+1);
                                            }
                                            foreach ($data_karyawan as $karyawan) {
                                        ?>
                                        <tr>
                                            <th><?php echo $no++ ?></th>
                                            <td><?php echo $karyawan->karyawan_id ?></td>
                                            <td><?php echo $karyawan->nama_karyawan.' ' ?><sup>(<?php echo substr($karyawan->jeniskelamin, 0, 1) ?>)</sup><br>
                                                <?php if ($karyawan->aktif == 1) { ?>
                                                    <span class="badge badge-success">Active</span>
                                                <?php } else if ($karyawan->aktif == 2) { ?>
                                                    <span class="badge badge-info">Business Owner</span>
                                                <?php } ?>
                                            </td>
                                            <td><?php echo $karyawan->alamat ?></td>
                                            <td><?php echo $karyawan->no_hp ?></td>
                                            <td><?php if ($karyawan->karyawan_id == 'K000') { echo '----'; } else { echo '$'.$karyawan->gaji_perbulan; } ?></td>
                                            <td><?php echo $karyawan->tgl_bergabung ?></td>
                                            <td><?php if ($karyawan->tgl_berhenti == '0000-00-00') { echo '----'; } else { echo $karyawan->tgl_berhenti; } ?></td>
                                            <td class="action-icons text-center">
                                                <a href="#" data-toggle="modal" data-target="#editKaryawan<?php echo $karyawan->karyawan_id ?>"> 
                                                    <i title="ubah" class="fas fa-edit text-lg text-info"></i>
                                                </a>
                                                <?php if ($karyawan->karyawan_id != 'K000') { ?>
                                                <a href="<?php echo base_url().'karyawan/delete/'.$karyawan->karyawan_id?>"> 
                                                    <i title="hapus" class="fas fa-trash text-lg text-danger"></i>
                                                </a>
                                                <?php } ?>
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
            <div class="modal fade" id="addKaryawan" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formAddKaryawan" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-bold  mx-3 mt-3" id="formAddKaryawanLabel">Input Employee data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form name="form_add_mahasiswa" action="<?php echo base_url().'karyawan/add' ?>" method="post" class="user needs-validation mx-3 mb-4" novalidate>
                            <div class="modal-body"> 
                                <div class="form-group">
                                    <label class="control-label ">ID</label>
                                    <input type="text" class="form-control" placeholder="ID Employee" autofocus name="karyawan_id" required readonly value="<?php echo $kode ?>">
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Employee Name</label>
                                    <input type="text" class="form-control" title="Fill in the Employee Name with Letters" placeholder='Employee Name'  name="nama_karyawan" pattern="[A-Za-z ]{1,50}" required>
                                    <div class="invalid-feedback">
                                    Fill in the name of the employee with letters! (max. 50 letters)
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
                                    Choose the gender of the employee!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Address</label>
                                    <input type="text"  class="form-control" placeholder='Employee Address' name="alamat"  required>
                                    <div class="invalid-feedback">
                                    Fill in the employee's address!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Mobile Number</label>
                                    <input type="tel"  class="form-control" placeholder='Employee Mobile Number' name="no_hp"  pattern="[0-9]{11,15}" required>
                                    <div class="invalid-feedback">
                                        Fill in No. Employee cell phone!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Salary per month</label>
                                    <input type="number"  class="form-control" placeholder='Employee Salary per month' name="gaji_perbulan"  required>
                                    <div class="invalid-feedback">
                                    Fill in the employee's monthly salary!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Join Date</label>
                                    <input type="date"  class="form-control" placeholder='Employee Joining Date' name="tgl_bergabung" required>
                                    <div class="invalid-feedback">
                                    Fill in the date of joining the employee!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Stop Date</label>
                                    <input type="date"  class="form-control" placeholder='Employee ending date' name="tgl_berhenti">
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
                foreach ($data_karyawan as $karyawan) {
            ?>
            <div class="modal fade" id="editKaryawan<?php echo $karyawan->karyawan_id ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formEditKaryawan" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-bold  mx-3 mt-3" id="formEditKaryawanLabel">Change Employee data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form name="form_edit_mahasiswa" action="<?php echo base_url().'karyawan/edit' ?>" method="post" class="user needs-validation mx-3 mb-4" novalidate>
                            <div class="modal-body"> 
                                <div class="form-group">
                                    <label class="control-label ">ID</label>
                                    <input type="text" class="form-control" placeholder="Emp ID" autofocus name="karyawan_id" value="<?php echo $karyawan->karyawan_id ?>" readonly>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Employee Name</label>
                                    <input type="text" class="form-control" title="Fill in the Employee Name with Letters" placeholder='Employee Name'  name="nama_karyawan" pattern="[A-Za-z ]{1,50}" value="<?php echo $karyawan->nama_karyawan ?>" required>
                                    <div class="invalid-feedback">
                                    Fill in the name of the employee with letters! (max. 50 letters)
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Gender</label>
                                    <select class="form-control" name="jeniskelamin" pattern="[A-Za-z]{1,10}" required>
                                        <option value="">--Please Select--</option>
                                        <option value="Male" <?php if ($karyawan->jeniskelamin === 'Male') { echo "selected"; } ?>>Male</option>
                                        <option value="Female" <?php if ($karyawan->jeniskelamin === 'Female') { echo "selected"; } ?>>Female</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    Choose the gender of the employee!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Address</label>
                                    <input type="text"  class="form-control" placeholder='Employee Address' name="alamat"  value="<?php echo $karyawan->alamat ?>" required>
                                    <div class="invalid-feedback">
                                    Fill in the employee's address!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Mobile Number</label>
                                    <input type="tel"  class="form-control" placeholder='Employees Mobile Number' name="no_hp" pattern="[0-9]{11,15}" value="<?php echo $karyawan->no_hp ?>" required>
                                    <div class="invalid-feedback">
                                    Fill in No. Employee cell phone!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Salary per month</label>
                                    <input type="number"  class="form-control" placeholder='Employee Salary per month' name="gaji_perbulan" value="<?php echo $karyawan->gaji_perbulan ?>" required>
                                    <div class="invalid-feedback">
                                    Fill in the employee's monthly salary!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Join Date</label>
                                    <input type="date"  class="form-control" placeholder='Join Date Employees' name="tgl_bergabung" value="<?php echo $karyawan->tgl_bergabung ?>" required>
                                    <div class="invalid-feedback">
                                    Fill in the date of joining the employee!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Stop Date</label>
                                    <input type="date"  class="form-control" placeholder='Employee Stop Date' name="tgl_berhenti" value="<?php echo $karyawan->tgl_berhenti ?>">
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

            

            