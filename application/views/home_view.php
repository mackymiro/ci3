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
	
</div>

