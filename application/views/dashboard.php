                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>
                  <hr>
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Number of Rows of Employee Table -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="rounded-0 card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                      <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Total Employees</div>
                                        <div class="row no-gutters align-items-center">
                                          <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800 text-right"><?php echo $n_karyawan ?></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-auto">
                                        <i class="fas fa-user-tie fa-2x text-gray-500"></i>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>

                        <!-- Number of Rows of Customer Table -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="rounded-0 card border-left-info shadow h-100 py-2">

                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                      <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Customers</div>
                                        <div class="row no-gutters align-items-center">
                                          <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $n_pelanggan ?></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-gray-500"></i>
                                      </div>
                                    </div>
                                  </div>

                            </div>
                        </div>

                        <!-- Number of Rows of Transaction Table -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="rounded-0 card border-left-primary shadow h-100 py-2">
                                
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                      <div class="col mr-2">
                                        <div class="text-xs font-weight-bold  text-uppercase mb-1">Total Transaction</div>
                                        <div class="row no-gutters align-items-center">
                                          <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $n_transaksi ?></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-auto">
                                        <i class="fas fa-receipt fa-2x text-gray-500"></i>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>

                        <!-- Number of Rows of Active Transaction Table -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="rounded-0 card border-left-warning shadow h-100 py-2">
                                
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                      <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Transaction</div>
                                        <div class="row no-gutters align-items-center">
                                          <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $n_transaksi_aktif ?></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-auto">
                                        <i class="fas fa-circle-notch fa-2x text-gray-500"></i>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <!-- Total Income (This year) -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="rounded-0 card border-left-success shadow h-100 py-2">
                               
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                      <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Income (This year)</div>
                                        <div class="row no-gutters align-items-center">
                                          <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">$ <?php echo $total_pendapatan ?></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-gray-500"></i>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>

                        <!-- Total Expenditure (This year) -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="rounded-0 card border-left-danger shadow h-100 py-2">
                                
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                      <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Expenditure (This year)</div>
                                        <div class="row no-gutters align-items-center">
                                          <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">$ <?php echo $total_pengeluaran ?></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-auto">
                                        <i class="fas fa-share-square fa-2x text-gray-500"></i>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>

                        <?php 
                        
                        $exp1 = str_replace(",", "", $total_pengeluaran);
                        $exp2 = str_replace(",", "", $total_pendapatan);
                        $exp3 = $exp1 - $exp2;
                        
                        ?>

                        <!-- Total Profit (This year) -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="rounded-0 card border-left-info shadow h-100 py-2">
                                
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                      <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Profit (This year)</div>
                                        <div class="row no-gutters align-items-center">
                                          <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">$ <?php echo $total_keuntungan ?> <?php if($exp1 > $exp2){ echo '<small>(Loss)</small>';}?></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-auto">
                                        <i class="fas fa-hand-holding-usd fa-2x text-gray-500"></i>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->