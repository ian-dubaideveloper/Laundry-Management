<?php 
$this->session->set_flashdata('error','Data failed to save to database.');
redirect(base_url().$datatype);
?>
<body class="bg-gradient-danger">

    <div class="container py-5 mt-5">
    	<div class="alert-container">
			<div class="alert alert-light text-dark alert-dismissible fade show w-75 m-auto" role="alert" >
				<h3 class="alert-heading my-2 text-danger font-weight-bold">Operation Failed!</h3>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick=location.href="<?php echo base_url().$datatype ?>">
					<span aria-hidden="true">&times;</span>
				</button>
				<p class="lead">Data failed to save to database.</p>
				<hr>
				<p class="mb-0">The data you entered is already in the database, or try to check your database connection again.</p>
				<img class="illustration" src="<?php echo base_url().'assets/img/undraw_Notify.svg' ?>">
			</div>	
		</div>
	</div>
</div>
<!-- End of Main Content -->