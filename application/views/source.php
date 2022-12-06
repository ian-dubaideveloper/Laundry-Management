    <!-- Custom made script for this project-->
    <script src="<?php echo base_url().'assets/js/script.js' ?>"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url().'assets/vendor/jquery/jquery.min.js' ?>"></script>
    <script src="<?php echo base_url().'assets/vendor/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url().'assets/vendor/jquery-easing/jquery.easing.min.js' ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url().'assets/js/sb-admin-2.min.js' ?>"></script>

    <!-- Page level plugins for Tables-->
    <script src="<?php echo base_url().'assets/vendor/datatables/jquery.dataTables.min.js' ?>"></script>
    <script src="<?php echo base_url().'assets/vendor/datatables/dataTables.bootstrap4.min.js' ?>"></script>

    <!-- Page level custom scripts for Tables-->
    <script src="<?php echo base_url().'assets/js/demo/datatables-demo.js' ?>"></script>

    

    <script>
        $(function(){
            var el = $("<div>");
            el.addClass('alert rounded-0')
            if('<?= !empty($this->session->flashdata('success')) ?>' == 1){
                var msg = el.clone()
                msg.addClass('alert-success')
                msg.html('<?= $this->session->flashdata('success') ?>')

                $('#content>.container-fluid').prepend(msg)
            }
            if('<?= !empty($this->session->flashdata('error')) ?>' == 1){
                var msg = el.clone()
                msg.addClass('alert-danger')
                msg.html('<?= $this->session->flashdata('error') ?>')

                $('#content>.container-fluid').prepend(msg)
            }
        })
    </script>
</body>

</html>