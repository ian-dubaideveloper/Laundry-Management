
            <!-- Footer -->
            <footer class="sticky-footer bg-white shadow border py-3">
                <div class="container-fluid my-auto">
                    <div class="copyright text-center my-1 d-flex justify-content-between">
                        <div class="col-auto"><b>Developed in:</b> <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></div>
                        <div class="col-auto"><span>&copy; Laundry Management System - <?php echo date('Y')?> Version 2.0</span></div>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog rounded-0" role="document">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Logout Confirmation</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Are you sure to logout now?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary btn-sm rounded-0" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary btn-sm rounded-0" href="<?php echo base_url().'index.php/login' ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>