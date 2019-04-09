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
			<?php else: ?>
			<a class="navbar-brand " href="<?php echo base_url().'dashboard.html'?>">Dashboard</a>
			<a class="navbar-brand " href="<?php echo base_url().'logout.html'?>">Logout</a>
			<?php endif;?>
        </div>
    </div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h1>Login</h1>
			<form method="post" action="<?php echo base_url().'login/auth.html'?>">
				
				<?php echo validation_errors('<div class="error alert alert-danger">','</div>');?>
				<div class="form-group">
					<label for="ex3">Email Address </label>
					<input type="text" name="email" class="form-control"  value="" />
						
				</div>
				<div class="form-group">
					<label for="ex3">Password: </label>
					<input type="password" name="password" class="form-control"  value="" />
						
				</div>
				<input type="submit" class="btn btn-success" value="Login" />
			</form>
			
		</div>
	</div>
</div>