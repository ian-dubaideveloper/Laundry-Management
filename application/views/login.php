<?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "<div class='alert alert-danger'>Login failed! Incorrect username and password.</div>";
        } else if ($_GET['pesan'] == "logout") {
            echo "<div class='alert alert-danger'>You have logged out.</div>";
        } else if ($_GET['pesan'] == "belumlogin") {
            echo "<div class='alert alert- success'>Please login first.</div>";
        }
    }
?>
<style>
    html, body{
        height:100%;
        width:100%;
        overflow:hidden
    }
    #system-logo{
        height:15em !important;
        width:15em !important;
        object-fit:cover;
        object-position: center center;
    }
</style>
<body class="bg-gradient-primary">


    <div class="row justify-content-center h-100 align-items-center">

        <div class="col-xl-4 col-lg-5 col-md-10 col-sm-12 col-xs-12 mt-3">

            <div class="card o-hidden border-0 shadow-lg my-5 rounded-0 mb-3">
                <div class="card-body p-0">
                    <div class="p-5">
                        <div class="text-center py-3">
                            <img src="<?php echo base_url() ?>assets/img/logo.jpg" class="w-25 px-3 rounded-circle mb-3" id="system-logo">
                            <h1 class="h2 text-gray-900">Laundry Management System</h1>
                        </div>
                        <form method="post" class="w-75 m-auto pt-3" action="<?php echo base_url()?>welcome/login">
                        <?= $this->session->flashdata('logout_success') ?>
                            <div class="form-group">
                                <input type="text" class="form-control"
                                    id="username" aria-describedby="emailHelp"
                                    placeholder="Username" name="username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control"
                                    id="password" placeholder="Password" name="password">
                            </div>
                            <hr class="pt-3">
                            <button href="#" class="btn btn-primary btn-user btn-block rounded-pill" type="submit">
                                Login
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <?php if(!empty($this->session->flashdata('logout_success'))): ?>
                <div class="alert alert-success rounded-0">
                    <?= $this->session->flashdata('logout_success') ?>
                </div>
            <?php endif; ?>

        </div>

    </div>