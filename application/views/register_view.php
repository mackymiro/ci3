<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">CRUD</a>
			<?php if(!$this->session->userdata('loggedIn')): ?>
			<a class="navbar-brand " href="<?php echo base_url();?>">Home</a>
			<a class="navbar-brand " href="<?php echo base_url().'login.html'?>">Login</a>
			<a class="navbar-brand pull-right" href="<?php echo base_url().'register' ?>">Register</a>
			<?php endif; ?>
			<a class="navbar-brand " href="<?php echo base_url().'dashboard.html'?>">Dashboard</a>
			<a class="navbar-brand " href="<?php echo base_url().'logout.html'?>">Logout</a>
        </div>
    </div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-4 ">
			<h1>Register</h1>
			<form action="<?php echo base_url().'register/add.html'?>" method="post">
				<?php if($this->session->flashdata('succReg')): ?>
					<div class="alert alert-success">
						<p>You have successfully registerd.</p>
					</div>
				<?php endif;?>
				<?php echo validation_errors('<div class="error alert alert-danger">', '</div>');?>
				<div class="form-group">
					<label for="ex3">First Name: </label>
					<input type="text" name="firstName" class="form-control"  value="" />
						
				</div>
				<div class="form-group">
					<label for="ex3">Last Name: </label>
					<input type="text" name="lastName" class="form-control"  value="" />
						
				</div>
				<div class="form-group">
					<label for="ex3">Email Address: </label>
					<input type="text" name="email" class="form-control"  value="" />
						
				</div>
				<div class="form-group">
					<label for="ex3">Password: </label>
					<input type="password" name="password" class="form-control"  value="" />
					<br>
					<input type="submit" class="btn btn-success" value="Register">
				</div>
			</form>
		</div>
	</div>
</div>

