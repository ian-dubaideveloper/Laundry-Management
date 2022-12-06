<?php 
$this->session->set_flashdata('logout_success','You have successfully logged out of the system!');
redirect(base_url());
?>
<body class="bg-gradient-dark">

    <div class="container py-5 mt-5">
    	<div class="alert-container">
	    	<div class="alert alert-light -dark alert-dismissible fade show w-75 m-auto" role="alert">
				<h3 class="alert-heading my-2  font-weight-bold ">You have successfully logged out of the system!</h3>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick=location.href="<?php echo base_url() ?>">
				<span aria-hidden="true">&times;</span>
				</button>
				<hr>
				<p class="lead">Please login again to re-access the <br>Laundry Management System</p>
				<img class="illustration" src="<?php echo base_url().'assets/img/undraw_Login.svg' ?>">
			</div>
		</div>
	</div>
</div>
<!-- End of Main Content -->