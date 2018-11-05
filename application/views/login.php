<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/logincss.css">
	<title>Document</title>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="<?php echo base_url();?>assets/js/login.js"></script>

</head>
<body>
  <div class="w3-bar w3-white w3-border-bottom w3-xlarge">
    <a href="<?php echo base_url();?>index.php" class="w3-bar-item w3-button w3-dark-grey w3-hover-dark-grey w3-text-white"><b><i class="fa fa-handshake-o w3-margin-right"></i>KitaSabi.id</b></a>
    <?php 
    if($this->session->userdata('login?')==TRUE){ ?>
 <a href="<?php echo base_url('index.php/user/do_logout'); ?>" class="w3-bar-item w3-button w3-right w3-dark-grey w3-hover-dark-grey w3-text-white"><i class="fa fa-check-square-o"></i> Logout</a>
    <?php 
    } else {
    ?>
    <a href="<?php echo base_url();?>index.php/user" class="w3-bar-item w3-button w3-right w3-dark-grey w3-hover-dark-grey w3-text-white"><i class="fa fa-check-square-o"></i> Login</a>
  <?php }?>
  </div>
	<div class="login-reg-panel">
		<div class="login-info-box">
			<h2>Have an account?</h2>
			<label id="label-register" for="log-reg-show">Login</label>
			<input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
		</div>

		<div class="register-info-box">
			<h2>Don't have an account?</h2>
			<label id="label-login" for="log-login-show">Register</label>
			<input type="radio" name="active-log-panel" id="log-login-show">
			<font color="red"><?php echo $this->session->flashdata('gagallogin');?></font>
			<font color="green"><?php echo $this->session->flashdata('berhasil');?></font>
		</div>

		<div class="white-panel">
			<div class="login-show">
				<h3>LOGIN</h3>
				<form role='form' action="<?php echo base_url('index.php/user/do_login');?>" method="post">
					<input type="email" placeholder="Email" name="email" required>
					<input type="password" placeholder="Password" name="password" required>
					<button class="w3-button w3-round-xxlarge w3-dark-grey">Login</button> 
				</form>
			</div>
			<div class="register-show">
				<h3>REGISTER</h3>
				<form role='form' action="<?php echo base_url('index.php/user/do_register');?>" method="post">
					<input type="text" placeholder="Nama Lengkap" name="nama" required>
					<input type="email" placeholder="Email" name="email" required>
					<input type="password" placeholder="Password" name="password" required>
					<input type="text" placeholder="No. Rekening" name="rekening" required>
					<input type="text" placeholder="Alamat" name="alamat" required>
					<button class="w3-button w3-round-xxlarge w3-dark-grey">Sign Up</button> 
				</form>
			</div>
		</div>
	</div>
	 <script>
    $(document).ready(function(){
      $('.login-info-box').fadeOut();
      $('.login-show').addClass('show-log-panel');
    });


    $('.login-reg-panel input[type="radio"]').on('change', function() {
      if($('#log-login-show').is(':checked')) {
        $('.register-info-box').fadeOut(); 
        $('.login-info-box').fadeIn();
        
        $('.white-panel').addClass('right-log');
        $('.register-show').addClass('show-log-panel');
        $('.login-show').removeClass('show-log-panel');
        
      }
      else if($('#log-reg-show').is(':checked')) {
        $('.register-info-box').fadeIn();
        $('.login-info-box').fadeOut();
        
        $('.white-panel').removeClass('right-log');
        
        $('.login-show').addClass('show-log-panel');
        $('.register-show').removeClass('show-log-panel');
      }
    });

  </script>
</body>

</html>